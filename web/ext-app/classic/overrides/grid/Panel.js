Ext.define('NpoaApp.overrides.grid.Panel', {
    override: 'Ext.grid.Panel',
    requires: [
        'NpoaApp.ux.StickyHeader'
    ],
    mixins: {
        stickyHeader: 'NpoaApp.ux.StickyHeader'
    },
    initComponent: function() {
        this.mixins.stickyHeader.initComponent.call(this);
        this.callParent();
    }
});