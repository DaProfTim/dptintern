Ext.define('NpoaSecurity.overrides.form.Panel', {
    override: 'Ext.form.Panel',

    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        me.on('render', me.handleSecurityOnRender, me);
    },

    handleSecurityOnRender: function (component) {
        this.checkAclForm();
    },

    checkAclForm: function() {
        NpoaSecurity.utils.SecurityUtils.checkAclForm(this.getForm());
    }
});