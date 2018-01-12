Ext.define('NpoaApp.view.index.SetPasswordController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.indexSetPassword',

    onSetPasswordClick: function(button, e, opts) {
        var form = this.getView().down('form').getForm();
        var controller = this;
        if (form.isValid()) {
            form.submit({
                success: function(form, action) {
                    Ext.Msg.alert(
                        NpoaApp.Translations.user.PASSWORD_SAVED_TITLE,
                        NpoaApp.Translations.user.PASSWORD_SAVED,
                        function(buttonId) {
                            NpoaApp.app.redirectToStartRoute();
                        },
                        controller
                    );
                    delete AppConfig.setPassword
                },
                failure: function(form, action) {
                    if (action.failureType == Ext.form.Action.SERVER_INVALID) {
                        var error = action.result.error;
                        Ext.Msg.alert(NpoaApp.Translations.user.ERROR,
                            NpoaApp.Translations.user.PASSWORD_ERROR + '<br>' + ((action.result.error) ? action.result.error : '')
                        );
                    }
                }
            });
        } else {
            Ext.Msg.alert(
                NpoaApp.Translations.user.ERROR,
                NpoaApp.Translations.global.INVALID_FORM
            );
        }
    }
});