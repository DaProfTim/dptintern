Ext.define('Ext.overrides.form.Basic', {
    override: 'Ext.form.Basic',
    requires: [
        'NpoaApp.utils.StringUtils'
    ],
    isValid: function () {
        var me = this,
            invalid,
            response;

        Ext.suspendLayouts();
        invalid = me.getFields().filterBy(function (field) {
            response = !field.validate();
            // mark radio group as invalid if error is set
            if (response) {
                NpoaApp.utils.FormUtils.markRadioGroupErrors(me);
            }
            return response;
        });
        Ext.resumeLayouts(true);

        return invalid.length < 1;
    },

    clearDirty: function () {
        var i, it = this.getFields().findBy(function (f) {
            f.clearInvalid();
            f.originalValue = f.getValue();
        });
    },

    // Erweiterung von loadRecord um automatische Prefixes fuer Formulare (z.B. projekt[ort][ansprechpartner]...)
    // Prefixe werden bei der Generierung der Ext-Models aus den Doctrine-Entities automatisch erzeugt und in der loadRecord-Funktion ausgelesen und gesetzt
    // wenn Refrenzen auf andere Models vorhanden sind, werden sie rekursiv ueber loadRecord ebenfalls geladen und der Prefix automatisch erweitert
    loadRecord: function (record, prePrefix, processed, prefix) {
        this._record = record;
        var me = this;
        var uniqueId;
        if (typeof processed == 'undefined') {
            processed = [];
        }
        if (typeof prefix == 'undefined') {
            prefix = record.get('prefix');
        }
        if (typeof prePrefix !== 'undefined') {
            prefix = prePrefix + '[' + prefix + ']';
        }

        var associated = record.getAssociatedData();
        // var manyToMany = record.manyToMany;
        // var oneToMany = record.oneToMany;
        // var xToMany = Object.merge(manyToMany, oneToMany);
        // AssociatedData enthaelt nur die Beziehungen, die ueber reference angegeben wurden
        if (associated) {
            Ext.iterate(associated, function (assocName, obj) {
                var assocRec, assocRecModel;
                assocRec = associated[assocName];
                getterName = 'get' + NpoaApp.utils.StringUtils.ucFirst(assocName);

                assocRecModel = record[getterName]();
                //jedes Model darf nur einmal genutzt werden, daher unique id setzen und in processed-array speichern
                uniqueId = assocName + assocRec.id;

                if (processed.indexOf(uniqueId) == -1) {
                    processed.push(uniqueId);
                    me.loadRecord(assocRecModel, prefix, processed, assocName);
                }

            }, this);
        }
        // xToMany enthaelt alle Beziehungen, die ueber oneToMany oder manyToMany angegeben wurden
        // if (xToMany) {
        //     Ext.Object.each(xToMany, function (key, value) {
        //
        //     });
        // }

        return this.setValues(record.getData(true), prefix);
    },

    // setValues erweitert um Prefix
    setValues: function (values, prefix) {
        var me = this, v, vLen, val;

        if (typeof prefix === 'undefined') {
            return;
        }

        function setVal(fieldId, val, prefix) {
            var field = me.findField(fieldId, prefix);

            if (field) {
                field.setValue(val);
                if (me.trackResetOnLoad) {
                    field.resetOriginalValue();
                }
            }
        }

        // Suspend here because setting the value on a field could trigger
        // a layout, for example if an error gets set, or it's a display field
        Ext.suspendLayouts();
        if (Ext.isArray(values)) {
            // array of objects
            vLen = values.length;

            for (v = 0; v < vLen; v++) {
                val = values[v];
                setVal(val.id, val.value, prefix);
            }
        } else {
            // object hash
            Ext.iterate(values, function (key, value) {
                setVal(key, value, prefix);
            });
        }
        Ext.resumeLayouts(true);
        return this;
    },

    // findField erweitert um Prefix
    findField: function (id, prefix) {
        this.callParent(arguments);
        var field;

        if (typeof prefix !== 'undefined') {
            id = String(prefix) + '[' + id + ']';
        }

        field = this.getFields().findBy(function (f) {
            return f.id === id || f.name === id  || f.name === id + '[]' || f.dataIndex === id || f.itemId === id;
        });

        // pruefen ob das field ggf. als checkboxgroup existiert
        //if (!field) {
        //    field = this.monitor.items.items.find(function(f) {
        //        return (f.xtype === 'checkboxgroup' && (f.id === id || f.name === id || f.dataIndex === id || f.itemId === id));
        //    });
        //}

        return field;
    }
});
