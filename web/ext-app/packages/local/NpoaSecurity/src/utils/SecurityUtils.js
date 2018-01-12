Ext.define('NpoaSecurity.utils.SecurityUtils', {
    requires: [
        'NpoaSecurity.utils.StringUtils'
    ],
    statics: {
        checkAclForm: function(form) {
            // Disable/Hide Form Felder in Abhaengigkeit der Feld-/Model-AclRolen und der Rollen des aktuellen Benutzers
            if (!Ext.isEmpty(NpoaApp.user) && NpoaApp.user.isLoggedIn()) {
                var fields = form.getFields();
                fields.each(function(field) {
                    field.checkAclField();
                });
            }
        },
        checkAclField: function(field) {
            // Keine Pruefung ohne ExtJsSecurityConfig
            if (typeof NpoaApp.app.securityConfig === 'undefined' || Ext.isEmpty(NpoaApp.app.securityConfig)) {
                return;
            }

            var disableField = false, hideField = false;
            var userRoles = NpoaApp.user.getRole();
            var model;
            var isRoot = true;

            // Beispiel fuer field.name: klimaschutzprojekt[ort][anreisemoeglichkeitText] oder klimaschutzprojekt[titel]
            var fieldRegEx = new RegExp(/([^\[]+)\[([^\]]*)\](.*)/i);
            var fieldName = field.getName();

            /*
             * Geprueft wird Entity fuer Entity, angefangen von der auesseren, also im obigen Bsp. klimaschutzprojekt inkl. des Assoziationsfeldes ort,
             * dann im naechsten Durchlauf die Entity ort inkl. des Feldes anreisemoeglichkeitText etc.
             */
            while (!Ext.isEmpty(fieldName)) {
                // extrahiere Entity-Namen aus Feldnamen
                fieldRegEx.exec(fieldName);
                var fieldPrefix = RegExp.$1; // im Bsp. oben klimaschutzprojekt
                fieldName = RegExp.$2; // im Bsp. oben ort bzw. titel
                var fieldNameTail = RegExp.$3; // im Bsp. oben [anreisemoeglichkeitText] bzw. ''

                // Bei Feldern ohne Prefix ist keine Pruefung moeglich, da sie nicht einem Model zugeordnet sind
                if (isRoot && Ext.isEmpty(fieldName)) {
                    return true;
                }

                // Ext Model holen
                var modelName = NpoaApp.app.modelPrefix + '.' + NpoaSecurity.utils.StringUtils.ucFirst(fieldPrefix);
                model = Ext.ClassManager.get(modelName);
                // Feld auslassen, wenn kein Model gefunden
                if (Ext.isEmpty(model)) {
                    return true;
                }

                var foundAnyRoleEntry = false;
                var foundAnyEntityEntry = false;
                var highestEntryMask = 0;
                var highestFieldMask = 0;
                var masks;
                var masksParentClass;

                // Es muss nach der hoechsten Maske aller Rollen des Benutzers gesucht werden
                Ext.Array.each(userRoles, function(obj, index, me) {
                    if (!Ext.isEmpty(NpoaApp.app.securityConfig[obj.name])) {
                        foundAnyRoleEntry = true;
                        masks = NpoaApp.app.securityConfig[obj.name][modelName];
                        if (!Ext.isEmpty(NpoaApp.app.securityConfig[obj.name][modelName]['_parentClass'])) {
                            masksParentClass = NpoaApp.app.securityConfig[obj.name][NpoaApp.app.securityConfig[obj.name][modelName]['_parentClass']];
                        }
                        if (!Ext.isEmpty(masks)) {
                            foundAnyEntityEntry = true;
                            if (masks[modelName] > highestEntryMask) {
                                highestEntryMask = masks[modelName];
                            }
                            // Zuerst wird nach dem Feldeintrag bei der Klasse, dann bei der Parent-Klasse gesucht
                            if (!Ext.isEmpty(masks[fieldName]) && masks[fieldName] > highestFieldMask) {
                                highestFieldMask = masks[fieldName];
                            } else if (!Ext.isEmpty(masksParentClass) && !Ext.isEmpty(masksParentClass[fieldName]) && masksParentClass[fieldName] > highestFieldMask) {
                                highestFieldMask = masksParentClass[fieldName];
                            }
                        }
                    }
                });

                /*
                 * Wenn keine der Rollen des Benutzers in der SecurityConfig aufgefuehrt waren oder die Entity nicht in den Berechtigungen
                 * eine der Rollen aufgefuehrt war, Zugriff verweigern.
                 */
                if (!foundAnyRoleEntry || !foundAnyEntityEntry) {
                    disableField = true;
                    hideField = true;
                } else {
                    // Ansonsten entscheidet die hoechste Maske; Entity-Maske hat Vorrang vor Feld-Maske
                    if (!this.isGrantedEditByMask(highestEntryMask)) {
                        disableField = true;
                    }
                    if (!this.isGrantedViewByMask(highestEntryMask)) {
                        hideField = true;
                    }
                    // CSRF-Token Feld darf nicht entfernt werden
                    if (!disableField && !this.isGrantedEditByMask(highestFieldMask) && fieldName != '_token') {
                        disableField = true;
                    }
                    if (!hideField && !this.isGrantedViewByMask(highestFieldMask) && fieldName != '_token') {
                        hideField = true;
                    }
                }

                if (disableField) {
                    field.setDisabled(true);
                }
                if (hideField) {
                    field.setHidden(true);
                }

                if (Ext.isEmpty(fieldNameTail) || fieldNameTail.match(/\[[0-9]*\]/g)|| hideField) {
                    // Fertig, da "einfaches" Feld, kein weiteres "Absteigen" noetig
                    // weiteres "Absteigen" ausserdem nur dann sinnvoll, wenn Feld nicht schon ausgeblendet wurde
                    return;
                } else {
                    // Assoziationsfeld, Assoziations-Type benutzen
                    var refTypeO2M = (!Ext.isEmpty(model.prototype.fieldsMap[fieldName]))
                        ? model.prototype.fieldsMap[fieldName].reference.type
                        : null;
                    var refTypeM2M = (!Ext.isEmpty(model.prototype.schema.associations[model.prototype.prefix + fieldName]))
                        ? model.prototype.schema.associations[model.prototype.prefix + fieldName].right.type
                        : null;
                    if (Ext.isEmpty(refTypeO2M) && Ext.isEmpty(refTypeM2M)) {
                        return;
                    }
                    var refType = (!Ext.isEmpty(refTypeO2M)) ? refTypeO2M : refTypeM2M;
                    /*
                     * Weiteres Absteigen; neuer Feldname ist nun der Model-Name der referenzierten Entity + der schon ermittelte Rest;
                     * Im Prinzip wird also lediglich der Feldname, der nicht zwangslaeufig mit dem Model-Namen der referenzierten Entity uebereinstimmmen
                     * muss, durch letzteren ausgetauscht.
                     */
                    fieldName = refType.substr(refType.lastIndexOf('.') + 1) + fieldNameTail;
                }
                isRoot = false;
            }
        },
        checkAclByAclProperty: function(comp) {
            if (Ext.isEmpty(comp.aclRoles)) {
                return;
            }
            var disableField, hideField = false;
            if (Ext.isEmpty(NpoaApp.user) || !NpoaApp.user.isLoggedIn()) {
                return;
            }
            if (Ext.isEmpty(comp.aclRoles.writable) || !NpoaApp.user.hasAnyRole(comp.aclRoles.writable)) {
                // Feld darf nicht beschrieben werden
                disableField = true;
            }
            if ((Ext.isEmpty(comp.aclRoles.readable) || !NpoaApp.user.hasAnyRole(comp.aclRoles.readable))
                && (Ext.isEmpty(comp.aclRoles.writable) || !NpoaApp.user.hasAnyRole(comp.aclRoles.writable))) {
                // Feld darf nicht gelesen werden
                hideField = true;
                disableField = true;
            }

            if (disableField) {
                comp.setDisabled(true);
            }
            if (hideField) {
                comp.setHidden(true);
            }
        },
        isGrantedViewByMask: function(mask) {
            return mask >= 1;
        },
        isGrantedEditByMask: function(mask) {
            return mask >= 5;
        }
    }
});