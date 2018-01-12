Ext.define('Ext.overrides.form.field.ComboBox', {
    override: 'Ext.form.field.ComboBox',

    setValue: function(value) {
        // Bei JSON-Objekten, die keine Ext-Models sind, id Property rausholen
        if (Ext.isObject(value) && !(value instanceof Ext.data.Model)) {
            if (!Ext.isEmpty(value['id'])) {
                this.setValue(value['id']);
            }
        } else if (Ext.isArray(value) && value.length > 0 && Ext.isObject(value[0]) && !(value[0] instanceof Ext.data.Model)) {
            var idArray = [];
            Ext.iterate(value, function(valueObj) {
                idArray.push(valueObj['id']);
            });
            this.setValue(idArray);
        } else {
            this.callParent(arguments);
        }
    }
});