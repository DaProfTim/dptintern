Ext.define('NpoaApp.view.NpoaViewport', {
    extend: 'Ext.Viewport',
    layout: 'fit',
    config: {
        activeMenu: 'menuEmpty',
        hasActiveTabPanel: false
    },
    requires: [
        'Ext.Viewport',
        'Ext.Img',
        'Ext.form.DateField',
        'Ext.form.field.Tag',
        'Ext.form.field.Time',
        'Ext.form.field.File',
        'Ext.form.RadioGroup',
        'Ext.layout.*',
        'Ext.form.DisplayField',
        'Ext.form.FieldSet',
        'Ext.panel.Panel',
        'Ext.grid.Panel',
        'Ext.tab.Panel',
        'Ext.toolbar.Spacer',
        'Ext.ux.form.trigger.Clear',
        'Ext.ux.form.field.Currency',
        'NpoaApp.component.GroupingComboBox',
        'NpoaApp.component.PopupWindow',
        'NpoaApp.view.menu.Empty',
        'NpoaApp.view.NpoaViewportController',
        'NpoaApp.view.menu.BenutzerController',
        'NpoaApp.view.menu.IndexController',
        'NpoaApp.ResponsiveConfig'
    ],
    scrollable: 'y',
    controller: 'npoaViewport',
    controllers: [
        'NpoaApp.view.menu.BenutzerController',
        'NpoaApp.view.menu.IndexController'
    ],
    initComponent: function() {
        this.callParent();
        // Controller aus controllers-Array initialisieren; muessen immer verfuegbar sein wegen den enthaltenen Routen
        var ln,
            controllers = Ext.Array.from(this.controllers);
        this.controllers = new Ext.util.MixedCollection();
        for (i = 0, ln = controllers.length; i < ln; i++) {
            NpoaApp.app.getController(controllers[i]);
        }

        // Route-Listener: Markiere Menue-Punkt entsprechend token
        Ext.util.History.on({
            change: 'setMenuItemActive',
            scope: this
        });

        this.menuPanel = this.down('#menu');
        this.contentPanel = this.down('#content');
    },
    listeners: {
        render: function() {
            this.getScrollable().on(
                {
                    scroll: { fn: this.onScroll, scope: this, buffer: 0 }
                }
            );
        }
    },
    onScroll: function(e, t) {
        this.handleScrollPos();
    },
    handleScrollPos: function() {
        var minPos = 80;
        var scrollPos = NpoaApp.app.viewport.getScrollable().getPosition().y;
        if (scrollPos > minPos) {
            if (this.menuPanel.hasCls('navTopMini')) {
                return;
            }
            this.suspendLayouts();
            this.menuPanel.setHeight(40);
            this.menuPanel.addCls('navTopMini');
            this.contentPanel.addCls('mini');
            this.resumeLayouts();
        } else {
            if (!this.menuPanel.hasCls('navTopMini')) {
                return;
            }
            this.suspendLayouts();
            this.menuPanel.removeCls('navTopMini');
            this.contentPanel.removeCls('mini');
            this.menuPanel.setHeight(80);
            this.resumeLayouts();
        }
    },
    items: [
        /* Container fuer menu, submenu, content und footer */
        {
            xtype: 'container',
            id: 'viewport',
            reference: 'viewportPanel',
            items: [
                /* Menu (fixed) */
                {
                    xtype: 'menuEmpty',
                    height: 80,
                    cls: 'navTop',
                    itemId: 'menu',
                    reference: 'menuPanel',
                    id: 'menu',
                    autoEl: {
                        tag: 'nav',
                        role: 'navigation',
                        'aria-live': 'polite'
                    }
                },
                /* Content */
                {
                    xtype: 'container',
                    reference: 'contentPanel',
                    id: 'content',
                    layout: {
                        type: 'hbox',
                        align: 'center',
                        pack: 'center'
                    },
                    autoEl: {
                        'aria-live': 'polite'
                    },
                    style: {
                        paddingTop: '80px'
                    }
                },
                /* Footer */
                {
                    xtype: 'container',
                    reference: 'footerPanel',
                    ariaRole: 'contentinfo',
                    id: 'footer',
                    layout: {
                        type: 'card',
                        anchor: '100%'
                    },
                    html: NpoaApp.Translations.global.COPYRIGHT
                }
            ]
        }
    ],

    /**
     * Laedt den uebergebenen View in das Menuepanel, in dem die Elemente des uebergebenen widget-Types
     * in das Menue geladen werden und die vorhandenen ersetzen.
     *
     * @param name der alias des zu ladenden Views ohne das 'widget.' prefix
     * @param destroy optional; wenn true, wird die alte View destroyt; false ist Standard
     */
    setMenu: function (name, destroy) {
        destroy = (destroy === undefined) ? false : destroy;
        if (this.activeMenu == name) {
            return;
        }
        var menuPanel = this.lookupReference('menuPanel');
        var widget = Ext.widget(name);
        menuPanel.removeAll(destroy);
        menuPanel.add(widget.items.items);
        this.activeMenu = name;
        this.setMenuItemActive();
    },

    /**
     * Laedt den uebergebenen View in das Contentpanel.
     *
     * @param name der Klassenname des zu ladenden Views
     * @param config optional; das config Objekt, das beim Instanziieren der Klasse uebergeben werden soll
     * @param destroy optional; wenn true (Standard), wird die alte View destroyt
     */
    setContent: function (name, config, destroy) {
        destroy = (destroy === undefined) ? false : destroy;
        var contentPanel = this.lookupReference('contentPanel');
        contentPanel.removeAll(destroy);
        var menuPanel = this.lookupReference('menuPanel');
        var component = Ext.ComponentQuery.query(name)[0];
        var configUnchanged = false;
        var isNew = false;
        if (!component) {
            component = Ext.widget(name, config);
            component.fireEvent('contentChanged', component, configUnchanged);
            isNew = true;
        } else {
            component.setConfig(config);
            configUnchanged = (Ext.JSON.encode(component.oldContentConfig) == Ext.JSON.encode(config));

            // Wenn sich die Config geaendert hat, wird standardmaessig die resetView Methode (vordefiniert in Ext.container.Container) aufgerufen
            if (!configUnchanged) {
                component.resetView(configUnchanged);
            }

            // Wenn sich die Konfiguration der View nicht geaendert hat, wird dies der Komponente ueber einen Parameter im contentChanged-Event zusaetzlich mitgeteilt
            component.fireEvent('contentChanged', component, configUnchanged);
        }
        if (component instanceof Ext.tab.Panel) {
            this.setHasActiveTabPanel(true);

            if (isNew) {
                // Bei TabPaneln muss zusaetzlich beim Tab Wechsel die handleScrollPos getriggert werden
                component.addListener('tabchange', function(tabPanel, newCard, oldCard, eOpts) {
                    NpoaApp.app.viewport.handleScrollPos();
                });
            }
        } else {
            this.setHasActiveTabPanel(false);
        }
        component.oldContentConfig = config;
        contentPanel.add(component);
    },

    checkDirtyForms: function (target, force) {
        if (force === undefined) {
            force = false;
        }
        NpoaApp.utils.FormUtils.checkDirtyForms(this.lookupReference('contentPanel').query('form'), function(yesButtonClicked) {
            if (yesButtonClicked === false) {
                return false;
            } else {
                NpoaApp.app.redirectTo(target, ((yesButtonClicked) ? yesButtonClicked : force));
            }
        });
    },

    resetView: function (view) {
        view.query('form').forEach(function (item) {
            if (!Ext.isEmpty(item.getForm().getRecord())) {
                item.loadRecord(Ext.create(item.getForm().getRecord().self.getName()));
                item.clearDirty();
            }
        });
    },

    setMenuItemActive: function () {
        var menuPanel = this.lookupReference('menuPanel');
        var token = Ext.util.History.getHash();
        var lastActiveItem = null;
        var foundNew = false;
        menuPanel.items.each(function (item) {
            if (item.hasCls('active')) {
                lastActiveItem = item;
            }
            if (item.ihref && token.indexOf(item.ihref) != -1) {
                item.addCls('active');
                foundNew = true;
            } else {
                item.removeCls('active');
            }
        });
        if (!foundNew && lastActiveItem != null) {
            lastActiveItem.addCls('active');
        }
    }
});

Ext.onReady(function () {
    var loadingAnimation = Ext.get('loadingAnimation');
    if (loadingAnimation != null) {
        loadingAnimation.hide();
    }

    Ext.Ajax.on('requestcomplete', function (conn, response, options, eOpts) {
        var loading = false;
        Ext.Object.each(Ext.Ajax.requests, function (key, request) {
            if (Ext.Ajax.isLoading(request)) {
                loading = true;
                return false;
            }
        });
        if (!loading) {
            Ext.getBody().unmask();
        }
        if (response.success) {
            if (response.msg) {
                Ext.Msg.alert(NpoaApp.Translations.update.SUCCESS, response.msg);
            }
        }
    }, Ext.getBody());

    Ext.Ajax.on('requestexception', function(conn, response, options, e) {
        Ext.getBody().unmask();
        // Unzureichende Rechte (serverseitig)
        if (response.status === 401) {
            Ext.Msg.show({
                title: NpoaApp.Translations.global.XHR_ACCESS_DENIED_TITLE,
                message: NpoaApp.Translations.global.XHR_ACCESS_DENIED_INFO,
                buttons: Ext.Msg.OK,
                closable: false,
                icon: Ext.Msg.ERROR
            });
            // Session ist abgelaufen oder ungueltig
        } else if (response.status === 403) {
            Ext.Msg.show({
                title: NpoaApp.Translations.global.XHR_AUTHENTICATION_INVALID_TITLE,
                message: NpoaApp.Translations.global.XHR_AUTHENTICATION_INVALID_INFO,
                buttons: Ext.Msg.OK,
                closable: false,
                icon: Ext.Msg.ERROR,
                fn: function(btn) {
                    NpoaApp.user = Ext.create('NpoaApp.model.User');
                    NpoaApp.app.redirectToLogin();
                    Ext.getBody().mask(NpoaApp.Translations.global.LOADING, NpoaApp.Translations.global.LOADING);
                }
            });
            // Allgemeiner Serverfehler
        } else if (!response.aborted) {
            var response = Ext.decode(response.responseText),
                debugInfo = '';
            if (!response === undefined && !Ext.isEmpty(response.debugExceptionInfo)) {
                debugInfo = '<br>Debug-Info: <br><br>' + response.debugExceptionInfo;
            }
            NpoaApp.utils.HttpUtils.onXHRException(debugInfo);
        }
    }, Ext.getBody());

    // Windows resizen, wenn Browser Window geresizt wird
    window.onresize = function() {
        Ext.ComponentQuery.query('window').forEach(function(item) {
            item.setMaxWidth(NpoaApp.app.viewport.width - 50);
            item.setMaxHeight(NpoaApp.app.viewport.height - 50);
            item.center();
        });
    }
});