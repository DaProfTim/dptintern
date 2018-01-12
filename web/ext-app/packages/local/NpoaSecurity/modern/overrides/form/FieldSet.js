Ext.define('NpoaSecurity.overrides.form.FieldSet', {
    override: 'Ext.form.FieldSet',
    config: {
        hideIfFieldsHidden: false
    },

    initialize: function() {
        var me = this;
        me.callParent(arguments);
        if (this.hideIfFieldsHidden) {
            me.on('painted', me.handleFieldsHidden, me);
        }
    },

    handleFieldsHidden: function (component) {
        if (this.hideIfFieldsHidden) {
            var fields = this.items;
            var hasOnlyHiddenFields = true;
            fields.each(function(field) {
                if (!field.isHidden() && field instanceof Ext.form.field.Base) {
                    hasOnlyHiddenFields = false;
                }
            });
            if (hasOnlyHiddenFields) {
                this.setHidden(true);
            }
        }
    }
});