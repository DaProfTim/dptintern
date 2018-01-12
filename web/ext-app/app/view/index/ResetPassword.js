Ext.define('NpoaApp.view.index.ResetPassword', {
    extend: 'Ext.panel.Panel',
    requires: [
        'NpoaApp.view.index.ResetPasswordController'
    ],
    controller: 'indexResetPassword',
    alias: 'widget.indexResetPassword',
    width: '100%',
    items: [
        {
            xtype: 'form',
            frame: true,
            itemId: 'resetPasswordForm',
            title: NpoaApp.Translations.login.RESET_PW,
            url: Routing.generate('app_benutzer_sendresettoken'),
            cls: 'panel-shadow',
            style: {
                maxWidth: '600px',
                margin: 'auto',
                marginTop: '35px'
            },
            items: [
                {
                    xtype: 'container',
                    html: NpoaApp.Translations.login.PASSWORD_RESET_INFO,
                    margin: '0 0 20px 0'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: NpoaApp.Translations.user.attrs.EMAIL,
                    vtype: 'email',
                    name: 'email',
                    listeners: {
                        specialkey: function (field, e) {
                            var resetBtn = this.up().down('#resetBtn');
                            if (e.getKey() === e.ENTER) {
                                resetBtn.fireHandler()
                            }
                        }
                    }
                },
                {
                    xtype: 'fieldcontainer',
                    layout: 'column',
                    style: 'margin-top: 30px',
                    items: [
                        {
                            xtype: 'button',
                            itemId: 'resetBtn',
                            text: NpoaApp.Translations.login.RESET_PW,
                            listeners: {
                                click: 'onResetPasswordSubmit'
                            },
                            style: 'margin-right: 10px; margin-bottom: 10px;'
                        },
                        {
                            xtype: 'button',
                            text: NpoaApp.Translations.login.BACK_TO_LOGIN,
                            listeners: {
                                click: 'onSwitchToLoginClick'
                            }
                        }
                    ]
                }
            ]
        }
    ]
});