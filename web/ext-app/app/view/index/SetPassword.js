Ext.define('NpoaApp.view.index.SetPassword', {
    extend: 'Ext.panel.Panel',
    requires: [
        'NpoaApp.view.index.SetPasswordController'
    ],
    alias: 'widget.indexSetPassword',
    controller: 'indexSetPassword',
    width: '100%',
    items: [
        {
            xtype: 'form',
            frame: true,
            itemId: 'resetPasswordForm',
            title: NpoaApp.Translations.user.PASSWORD_CHANGE,
            url: Routing.generate('app_benutzer_setpasswordcheck'),
            cls: 'panel-shadow',
            style: {
                maxWidth: '600px',
                margin: 'auto',
                marginTop: '35px'
            },
            items: [
                {
                    xtype: 'container',
                    html: NpoaApp.Translations.user.PASSWORD_POLICY,
                    margin: '0 0 20px 0'
                },
                {
                    fieldLabel: NpoaApp.Translations.user.PASSWORD_CURRENT,
                    name: 'password',
                    xtype: 'textfield',
                    inputType: 'password',
                    itemId: 'passwordCurrent'
                },
                {
                    fieldLabel: NpoaApp.Translations.user.PASSWORD_NEW,
                    xtype: 'textfield',
                    inputType: 'password',
                    name: 'passwordNew'
                },
                {
                    fieldLabel: NpoaApp.Translations.user.PASSWORD_REPEAT,
                    xtype: 'textfield',
                    inputType: 'password',
                    name: 'passwordNew2',
                    margin: '0 0 20px 0',
                    listeners: {
                        specialkey: function (field, e) {
                            var setPWBtn = this.up().down('#setPWBtn');
                            if (e.getKey() === e.ENTER) {
                                setPWBtn.fireHandler()
                            }
                        }
                    }
                },
                {
                    xtype: 'fieldcontainer',
                    layout: 'hbox',
                    items: [
                        {
                            xtype: 'button',
                            itemId: 'setPWBtn',
                            text: NpoaApp.Translations.global.SAVE,
                            listeners: {
                                click: 'onSetPasswordClick'
                            }
                        }
                    ]
                }
            ]
        }
    ],
    listeners: {
        beforerender: function () {
            if (!NpoaApp.user.isLoggedIn()) {
                this.redirectTo('login');
            }
            if (AppConfig.setPassword) {
                this.down('#passwordCurrent').disable();
                this.down('#passwordCurrent').hide();
            }
        }
    }
});