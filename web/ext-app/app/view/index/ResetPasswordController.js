Ext.define('NpoaApp.view.index.ResetPasswordController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.indexResetPassword',
    
    onResetPasswordSubmit: function() {
        var form = this.getView().down('form').getForm();
        if (form.isValid()) {
            form.submit({
                success: function(form, action) {
                    Ext.Msg.show({
                        title: NpoaApp.Translations.login.PASSWORD_RESET_MAIL_SENT_TITLE,
                        message: NpoaApp.Translations.login.PASSWORD_RESET_MAIL_SENT,
                        buttons: Ext.Msg.OK,
                        closable: false,
                        icon: Ext.Msg.INFO,
                        fn: function(btn) {
                            NpoaApp.app.redirectTo('login');
                        }
                    });
                },
                failure: function(form, action) {
                    if (action.failureType == Ext.form.Action.SERVER_INVALID) {
                        var errors = action.result.errors;
                        Ext.Msg.alert(
                            NpoaApp.Translations.global.ERROR,
                            NpoaApp.Translations.login.error.EMAIL_INVALID
                        );
                    }
                }
            });
        } else {
            Ext.Msg.alert(
                NpoaApp.Translations.global.ERROR,
                NpoaApp.Translations.login.error.EMAIL_INVALID
            );
        }
    },
    
    onSwitchToLoginClick: function() {
        NpoaApp.app.redirectTo('login');
    }

});