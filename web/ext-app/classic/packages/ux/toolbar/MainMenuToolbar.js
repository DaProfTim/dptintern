Ext.define('Ext.ux.toolbar.MainMenuToolbar', {
    extend: 'Ext.toolbar.Toolbar',
    alias: 'widget.mainMenuToolbar',
    overflowHandler: 'menu',
    requires: [
        'Ext.toolbar.Toolbar',
        'Ext.ux.button.MainMenuButton'
    ],
    defaults: {
        iconAlign: 'top',
        margin: 0
    },
    cls: 'navTop',
    defaultType: 'mainMenuButton',
    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        me.on('afterrender', me.afterMainMenuToolbarRender, me, { single: true });
    },
    afterMainMenuToolbarRender: function (panel) {
        panel.updateLayout();
    }
});