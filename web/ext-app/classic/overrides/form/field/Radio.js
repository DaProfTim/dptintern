Ext.define('Ext.overrides.form.field.Radio', {
    override: 'Ext.form.field.Radio',
    onBoxClick: function () {
        var me = this;
        if (!me.disabled && !me.readOnly) {
            this.setValue(true);
        }
        // remove manually added error css classes
        if (me.ownerCt.getXType() == 'radiogroup') {
            var rButtons = me.ownerCt.items;
            rButtons.each(function (rButton, index, buttons) {
                if (rButton.isRadio == true) {
                    rButton.inputEl.removeCls('x-form-trigger-wrap-default');
                    rButton.inputEl.removeCls('x-form-trigger-wrap-invalid');
                }
            });
        }
    },
    setValue: function(value) {
        if (Ext.isObject(value)) {
            if (!Ext.isEmpty(value.id)) {
                this.setValue(value.id);
            }
        } else {
            this.callParent(arguments);
        }
        return this;
    }
});