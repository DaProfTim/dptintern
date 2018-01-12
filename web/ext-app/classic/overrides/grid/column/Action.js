Ext.define('Ext.overrides.grid.column.Action', {
    override: 'Ext.grid.column.Action',
    initComponent: function() {
        this.text = NpoaApp.Translations.global.ACTION_EDIT;
        this.menuText = NpoaApp.Translations.global.ACTION_EDIT;
        this.callParent(arguments);
    }
});