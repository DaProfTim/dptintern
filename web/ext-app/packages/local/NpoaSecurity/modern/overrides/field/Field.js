Ext.define('NpoaSecurity.overrides.field.Field', {
    requires: [
        'NpoaSecurity.utils.SecurityUtils'
    ],
    override: 'Ext.field.Field',

    checkAclField: function() {
        NpoaSecurity.utils.SecurityUtils.checkAclField(this);
    }
});