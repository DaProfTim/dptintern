Ext.define('NpoaSecurity.overrides.form.field.Base', {
    requires: [
        'NpoaSecurity.utils.SecurityUtils'
    ],
    override: 'Ext.form.field.Base',

    checkAclField: function() {
        NpoaSecurity.utils.SecurityUtils.checkAclField(this);
    }
});