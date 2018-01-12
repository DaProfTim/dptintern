Ext.define('NpoaSecurity.overrides.Component', {
    requires: [
        'NpoaSecurity.utils.SecurityUtils'
    ],
    override: 'Ext.Component',
    initialize: function() {
        var me = this;
        me.callParent(arguments);
        me.checkAcl();
    },

    checkAcl: function() {
        NpoaSecurity.utils.SecurityUtils.checkAclByAclProperty(this);
    }
});