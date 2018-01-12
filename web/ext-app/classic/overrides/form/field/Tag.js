Ext.define('Ext.overrides.form.field.Tag', {
    override: 'Ext.form.field.Tag',

    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        me.on('select', me.handleSelect, me);
    },

    handleSelect: function(combo, record) {
        combo.inputEl.dom.value = '';
    },

    setValue: function(value) {
        // Bei Objekten, die keine Ext-Models sind, id Property rausholen
        if (Ext.isArray(value) && Ext.isObject(value[0]) && !(value[0] instanceof Ext.data.Model)) {
            var newValue = [];
            Ext.Array.each(value, function(tagObj, index, valueSelf) {
                newValue.push(tagObj.id);
            });
            value = newValue;
        }

        this.callParent(arguments);
    }
});