Ext.define('NpoaApp.overrides.tree.Panel', {
    override: 'Ext.tree.Panel',
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