Ext.define('NpoaApp.view.NpoaViewportController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.npoaViewport',
    requires: [
        'NpoaApp.view.menu.Empty',
        'NpoaApp.view.index.SetPassword'
    ],
    routes: {
        'logout': 'onLogout',
        'passwort-setzen': 'onPasswortSetzen'
    },
    listen: {
        controller: {
            '#': {
                unmatchedroute : 'onUnmatchedRoute'
            }
        }
    },

    onUnmatchedRoute: function(hash) {
        if (!Ext.isEmpty(hash)) {
            Ext.Msg.show({
                title: NpoaApp.Translations.global.UNMATCHED_ROUTE_TITLE,
                message: NpoaApp.Translations.global.UNMATCHED_ROUTE_INFO,
                buttons: Ext.Msg.OK,
                closable: false,
                icon: Ext.Msg.ERROR,
                fn: function(btn) {
                    NpoaApp.app.redirectToStartRoute();
                }
            });
        }
    },

    handleHttpException: function(action) {
        // die Eigenschaft httpException wird von Symfony im Falle eines Serverfehlers in FlashBag Session Variable httpException geschrieben
        if (AppConfig.httpException) {
            switch (AppConfig.httpException) {
                case '404':
                    action.stop();
                    NpoaApp.app.redirectToStartRoute();
                    break;
                case '403':
                case '401':
                    action.stop();
                    Ext.Msg.show({
                        title: NpoaApp.Translations.global.XHR_ACCESS_DENIED_TITLE,
                        message: NpoaApp.Translations.global.XHR_ACCESS_DENIED_INFO,
                        buttons: Ext.Msg.OK,
                        closable: false,
                        icon: Ext.Msg.ERROR
                    });
                    break;
                default:
                    NpoaApp.app.onDefaultException();
                    action.resume();
            }
            delete AppConfig.httpException;
        }
    },
    handleEmailChanged: function() {
        if (AppConfig.emailChanged) {
            Ext.Msg.show({
                title: NpoaApp.Translations.user.email_change.SUCCESS_TITLE,
                message: NpoaApp.Translations.user.email_change.SUCCESS,
                buttons: Ext.Msg.OK,
                closable: false
            });
            delete AppConfig.emailChanged;
        }
    },
    handleTokenError: function () {
        if (AppConfig.tokenExpired) {
            Ext.Msg.show({
                title: NpoaApp.Translations.login.error.TOKEN_EXPIRED_TITLE,
                message: NpoaApp.Translations.login.error.TOKEN_EXPIRED_INFO,
                buttons: Ext.Msg.OK,
                closable: false
            });
            delete AppConfig.tokenExpired;
        } else if (AppConfig.tokenInvalid) {
            Ext.Msg.show({
                title: NpoaApp.Translations.login.error.TOKEN_INVALID_TITLE,
                message: NpoaApp.Translations.login.error.TOKEN_INVALID_INFO,
                buttons: Ext.Msg.OK,
                closable: false
            });
            delete AppConfig.tokenInvalid;
        }
    },

    onLogout: function(button, e, opts) {
        NpoaApp.utils.FormUtils.checkDirtyForms(this.lookupReference('contentPanel').query('form'), function(yesButtonClicked) {
            if (yesButtonClicked === false) {
                return false;
            } else {
                Ext.Ajax.request({
                    url:  Routing.generate('app_benutzer_logout'),
                    method: 'GET',
                    scope: this,
                    success: function(response) {
                        NpoaApp.user = Ext.create('NpoaApp.model.User');
                        NpoaApp.app.redirectTo('login');
                        // Ext.getBody().mask(NpoaApp.Translations.login.LOGOUT_WAIT, NpoaApp.Translations.login.LOGOUT);
                        // location.reload();
                    }
                });
            }
        });
    },
    onPasswortSetzen: function() {
        NpoaApp.app.viewport.setMenu('menuEmpty');
        NpoaApp.app.viewport.setContent('indexSetPassword');
        this.handleTokenError();
    }
});