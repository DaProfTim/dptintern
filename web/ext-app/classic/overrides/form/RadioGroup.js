Ext.define('Ext.overrides.form.RadioGroup', {
    override: 'Ext.form.RadioGroup',
    invalidCls: Ext.baseCSSPrefix + 'form-invalid',
    setValue: function(value) {
        var cbValue, first, formId, radios, i, len, name;
        if (!Ext.isObject(value)) {
            var obj = {};
            obj[this.name] = value;
            value = obj;
        }
        if (Ext.isObject(value)) {
            for (name in value) {
                if (value.hasOwnProperty(name)) {
                    cbValue = value[name];
                    first = this.items.first();
                    formId = first ? first.getFormId() : null;
                    radios = Ext.form.RadioManager.getWithValue(name, cbValue, formId).items;
                    len = radios.length;

                    for (i = 0; i < len; ++i) {
                        radios[i].setValue(true);
                    }
                }
            }
        }
        return this;
    },
    listeners: {
        'change': function(comp, newValue, oldValue) {
            if (this.readOnly) {
                return oldValue
            }
        }
    }
});