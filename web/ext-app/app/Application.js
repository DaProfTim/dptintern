/**
 * The main application class. An instance of this class is created by app.js when it
 * calls Ext.application(). This is the ideal place to handle application launch and
 * initialization details.
 */
Ext.define('NpoaApp.Application', {
    extend: 'Ext.app.Application',
    name: 'NpoaApp',
    requires: [
        'NpoaSecurity.controller.SecurityController',
        'NpoaApp.utils.*',
        'NpoaApp.Translations',
        'NpoaApp.view.NpoaViewport',
        'NpoaApp.model.*',
        'Ext.mixin.Responsive'
    ],
    controllers: [
        'NpoaSecurity.controller.SecurityController'
    ],
    stores: [
    ],
    storesPreloadIfLoggedIn: [
    ],
    defaultToken: 'benutzer/index',
    modelPrefix: 'NpoaApp.model.appBundle.entity',
    autoCreateViewport: false,
    mixins: [
        'Ext.mixin.Responsive'
    ],
    responsiveFormulas: {
        small: 'width < 600',
        medium: 'width >= 600 && width < 1150',
        large: 'width >= 1150'
    },
    launch: function () {
        NpoaApp.app = this;
        this.detectToolkit();
        if (this.isClassic()) {
            this.viewport = Ext.create('NpoaApp.view.NpoaViewport');
        } else {
            Ext.Viewport.setActiveItem(Ext.create('NpoaApp.view.NpoaViewport'));
        }
        NpoaApp.user = Ext.create('NpoaApp.model.User', AppConfig.user);
        // redirect wenn kein User eingeloggt
        var activeToken = Ext.util.History.getToken();
        if (typeof AppConfig.user == 'undefined' && activeToken != 'login' && activeToken != 'passwort-vergessen') {
            NpoaApp.app.redirectTo('login');
        }
        this.preloadStoresIfLoggedIn();
        Ext.GlobalEvents.fireEvent('applicationLaunch', this, NpoaApp.user);
    },

    detectToolkit: function() {
        if (typeof Ext.Viewport.setActiveItem == 'function') {
            this.toolkit = 'modern';
        } else {
            this.toolkit = 'classic';
        }
    },
    isModern: function () {
        return (this.toolkit == 'modern');
    },
    isClassic: function () {
        return (this.toolkit == 'classic');
    },

    redirectToStartRoute: function() {
        if (!NpoaApp.user.isLoggedIn()) {
            NpoaApp.app.redirectTo('login');
        } else {
            NpoaApp.app.redirectTo('benutzer/index');
        }
    },

    redirectCheck: function(target, force) {
        this.viewport.checkDirtyForms(target, force);
    },

    onDefaultException: function() {
        Ext.Msg.show({
            title: NpoaApp.Translations.global.XHR_EXCEPTION_TITLE,
            message: NpoaApp.Translations.global.XHR_EXCEPTION_INFO,
            buttons: Ext.Msg.OK,
            closable: false,
            icon: Ext.Msg.ERROR
        });
    },

    onAppUpdate: function () {
        Ext.Msg.show({
            title: NpoaApp.Translations.global.APP_UPDATE_TITLE,
            message: NpoaApp.Translations.global.APP_UPDATE,
            buttons: Ext.Msg.OK,
            closable: false,
            minWidth: 500,
            icon: Ext.Msg.INFO,
            fn: function(btn) {
                window.location.reload();
            }
        });
    },

    preloadStoresIfLoggedIn: function () {
        if (!NpoaApp.user.isLoggedIn()) {
            return;
        }
        var storesArr = this.storesPreloadIfLoggedIn;
        Ext.each(storesArr, function (store) {
            Ext.data.StoreManager.lookup(store).load();
        });
    }
});

Ext.onReady(function () {
    // CSRF Token fuer Ajax Request setzen
    Ext.Ajax.setExtraParams({ _token: AppConfig.csrfToken });

    // Timeouts fuer Ajax Requests auf 60 statt 30 Sekunden erhoehen
    Ext.Ajax.setTimeout(60000);
});
