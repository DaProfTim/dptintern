Ext.define('NpoaApp.view.index.Index', {
    extend: 'Ext.panel.Panel',
    requires: [
        'NpoaApp.view.index.IndexController'
    ],
    controller: 'indexIndex',
    alias: 'widget.indexIndex',
    itemId: 'loginPanel',
    width: '100%',
    listeners: {
        contentChanged: 'onContentChanged'
    },
    items: [
        {
            xtype: 'form',
            frame: true,
            title: 'Login',
            itemId: 'loginForm',
            url: Routing.generate('login_check'),
            cls: 'panel-shadow',
            style: {
                maxWidth: '600px',
                margin: 'auto',
                marginTop: '35px'
            },
            items: [
                {
                    xtype: 'container',
                    html: NpoaApp.Translations.index.TEXT,
                    margin: '0 0 20px 0'
                },
                {
                    xtype: 'textfield',
                    fieldLabel: NpoaApp.Translations.user.attrs.EMAIL,
                    allowBlank: false,
                    name: '_username',
                    labelWidth: 150,
                    listeners: {
                        specialkey: function (field, e) {
                            var anmeldeBtn = this.up().down('#anmeldeBtn');
                            if (e.getKey() === e.ENTER) {
                                anmeldeBtn.fireHandler();
                            }
                        }
                    }
                },
                {
                    xtype: 'textfield',
                    fieldLabel: NpoaApp.Translations.user.attrs.PASSWORD,
                    allowBlank: false,
                    name: '_password',
                    inputType: 'password',
                    labelWidth: 150,
                    listeners: {
                        specialkey: function (field, e) {
                            var anmeldeBtn = this.up().down('#anmeldeBtn');
                            if (e.getKey() === e.ENTER) {
                                anmeldeBtn.fireHandler();
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
                            text: NpoaApp.Translations.login.BUTTON_LOGIN,
                            itemId: 'anmeldeBtn',
                            listeners: {
                                click: 'onLoginClick'
                            },
                            style: 'margin-right: 10px; margin-bottom: 10px;'
                        },
                        {
                            xtype: 'button',
                            text: NpoaApp.Translations.login.FORGOT_PW,
                            listeners: {
                                click: 'onForgotPwClick'
                            },
                            style: 'margin-right: 10px; margin-bottom: 10px;'
                        }
                    ]
                }
            ]
        }
    ]
});