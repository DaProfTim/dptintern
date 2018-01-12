Ext.define('NpoaSecurity.overrides.form.Panel', {
    override: 'Ext.form.Panel',

    initialize: function() {
        var me = this;
        me.callParent(arguments);
        me.on('painted', me.handleSecurityOnRender, me);
    },

    handleSecurityOnRender: function (component) {
        this.checkAclForm();
    },

    checkAclForm: function() {
        NpoaSecurity.utils.SecurityUtils.checkAclForm(this);
    },

    getFields: function() {
        var items = this.items.items;
        var fields = new Ext.util.Collection();
        items.forEach(function(item) {
            if (item instanceof Ext.field.Field) {
                fields.add(item);
            }
        });
        return fields;
    }
});