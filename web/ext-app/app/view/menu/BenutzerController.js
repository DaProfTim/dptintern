Ext.define('NpoaApp.view.menu.BenutzerController', {
    extend: 'NpoaApp.view.menu.BaseMenuController',
    alias: 'controller.menuPortalBenutzer',
    requires: [
        'NpoaApp.view.menu.BaseMenuController',
        'NpoaApp.view.menu.Benutzer',
        'NpoaApp.view.index.IndexBenutzer'
    ],
    routes: {
        'benutzer/index': {
            before: 'beforeBenutzerIndex',
            action: 'onBenutzerIndex'
        }
    },

    beforeBenutzerIndex: function(action) {
        NpoaApp.app.viewport.getController().handleHttpException(action);
        NpoaApp.app.viewport.getController().handleEmailChanged();
        if (AppConfig.setPassword) {
            this.redirectTo('passwort-setzen');
            action.stop();
        } else {
            action.resume();
        }
    },

    onBenutzerIndex: function() {
        NpoaApp.app.viewport.setMenu('menuBenutzer');
        NpoaApp.app.viewport.setContent('indexIndexBenutzer');
    }
});