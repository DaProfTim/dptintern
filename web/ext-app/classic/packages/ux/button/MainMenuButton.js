Ext.define('Ext.ux.button.MainMenuButton', {
    extend: 'Ext.button.Button',
    alias: 'widget.mainMenuButton',
    requires: [
        'Ext.button.Button'
    ],
    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        me.on('afterrender', me.afterMainMenuButtonRender, me);
        me.on('click', me.onClickMainMenuButton, me);
    },
    afterMainMenuButtonRender: function (btn) {
        if (!Ext.isEmpty(this.ihref) || !Ext.isEmpty(this.ehref)) {
            btn.getEl().set({
                'role': 'menuitem'
            });
        }
    },
    onClickMainMenuButton: function (btn) {
        if (!Ext.isEmpty(this.ihref)) {
            NpoaApp.app.redirectCheck(this.ihref);
        }
        if (!Ext.isEmpty(this.ehref)) {
            NpoaApp.app.redirectCheckExternal(this.ehref);
        }
    }
});