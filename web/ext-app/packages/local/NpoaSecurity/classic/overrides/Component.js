Ext.define('NpoaSecurity.overrides.Component', {
    requires: [
        'NpoaSecurity.utils.SecurityUtils'
    ],
    override: 'Ext.Component',
    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        me.on('beforerender', me.checkAcl, me);
    },

    checkAcl: function() {
        NpoaSecurity.utils.SecurityUtils.checkAclByAclProperty(this);
    }
});