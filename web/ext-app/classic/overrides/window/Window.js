Ext.define('Ext.overrides.window.Window', {
    override: 'Ext.window.Window',
    scrollable: true,
    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        me.on('beforerender', me.handleBeforeRenderCustom, me);
    },
    handleBeforeRenderCustom: function (component) {
        if (typeof NpoaApp === 'undefined' || typeof NpoaApp.app === 'undefined' || typeof NpoaApp.app.viewport === 'undefined') {
            return;
        }
        this.setMaxWidth(NpoaApp.app.viewport.width - 50);
        this.setMaxHeight(NpoaApp.app.viewport.height - 50);
    }
});