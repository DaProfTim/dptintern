Ext.define('NpoaApp.view.index.IndexController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.indexIndex',

    onContentChanged: function(view, isConfigUnchanged) {
        // Login Formular immer leeren
        view.down('form').reset();
    },
    
    onLoginClick: function(button) {
        var form = button.up('form').getForm();
        if (form.isValid()) {
            form.submit({
                success: function(form, action) {
                    NpoaApp.user.setConfig(action.result.token);
                    Ext.GlobalEvents.fireEvent('userLoggedIn', NpoaApp.user, action.result);
                    NpoaApp.app.redirectToStartRoute();
                },
                failure: function(form, action) {
                    if (action.failureType == Ext.form.Action.SERVER_INVALID) {
                        Ext.Msg.show({
                            title: NpoaApp.Translations.login.error.TITLE,
                            message: NpoaApp.Translations.login.error.BAD_CREDENTIALS,
                            buttons: Ext.Msg.OK,
                            closable: false,
                            icon: Ext.Msg.ERROR
                        });
                    }
                }
            });
        } else {
            Ext.Msg.alert(NpoaApp.Translations.login.error.TITLE, NpoaApp.Translations.login.error.BAD_CREDENTIALS);
        }
    },

    onForgotPwClick: function(button) {
        NpoaApp.app.redirectTo('passwort-vergessen');
    }
});