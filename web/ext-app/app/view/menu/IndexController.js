Ext.define('NpoaApp.view.menu.IndexController', {
    extend: 'Ext.app.Controller',
    alias: 'controller.menuIndex',
    requires: [
        'NpoaApp.view.menu.Index',
        'NpoaApp.view.index.Index',
        'NpoaApp.view.index.IndexBenutzer',
        'NpoaApp.view.index.ResetPassword'
    ],
    routes: {
        'login': {
            before: 'beforeLogin',
            action: 'onLogin'
        },
        'passwort-vergessen': 'onPasswortVergessen'
    },

    beforeLogin: function (action) {
        NpoaApp.app.viewport.getController().handleHttpException(action);
        NpoaApp.app.viewport.getController().handleTokenError();
        if (!NpoaApp.user.isLoggedIn()) {
            action.resume();
        } else {
            NpoaApp.app.redirectToStartRoute();
        }
    },
    onLogin: function() {
        NpoaApp.app.viewport.setMenu('menuIndex');
        NpoaApp.app.viewport.setContent('indexIndex');
    },

    onPasswortVergessen: function() {
        NpoaApp.app.viewport.setMenu('menuIndex');
        NpoaApp.app.viewport.setContent('indexResetPassword');
        NpoaApp.app.viewport.getController().handleTokenError();
    }
});