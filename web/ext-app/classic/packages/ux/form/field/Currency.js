Ext.define('Ext.ux.form.field.Currency', {
    extend: 'Ext.form.field.Number',
    alias: ['widget.currencyfield'],
    listeners: {
        render: function(cmp) {
            cmp.showCurrency(cmp);
        },
        blur: function(cmp) {
            cmp.showCurrency(cmp);
        },
        change: function(cmp) {
            if (!cmp.hasFocus) {
                cmp.showCurrency(cmp);
            }
        },
        focus: function(cmp) {
            cmp.removeCurrency(cmp);
        }
    },
    getValueCurrencyStr: function(value) {
        if (Ext.util.Format.currencyAtEnd) {
            return value + Ext.util.Format.currencySpacer + Ext.util.Format.currencySign;
        } else {
            return Ext.util.Format.currencySign + Ext.util.Format.currencySpacer + value;
        }
    },
    showCurrency: function(cmp) {
        if (cmp.getRawValue() == '' || cmp.getRawValue() == Ext.util.Format.currencySign) {
            cmp.setRawValue(Ext.util.Format.currencySign);
        } else if (cmp.getRawValue().slice(-1) != Ext.util.Format.currencySign) {
            cmp.setRawValue(cmp.getValueCurrencyStr(cmp.getRawValue()));
        }
    },
    removeCurrency: function(cmp) {
        cmp.setRawValue(this.getCurrencyRemoved(cmp.getRawValue()));
    },
    getCurrencyRemoved: function(val) {
        var regEx;
        if (Ext.util.Format.currencyAtEnd) {
            regEx = new RegExp("[" + Ext.util.Format.currencySpacer + "]?" + Ext.util.Format.currencySign, "g");
        } else {
            regEx = new RegExp(Ext.util.Format.currencySign + "[" + Ext.util.Format.currencySpacer + "]?", "g");
        }
        return val.replace(regEx, '');
    },
    rawToValue: function(value) {
        value = this.getCurrencyRemoved(value);
        return this.callParent(arguments);
    },
    getSubmitValue: function() {
        var value = this.callParent(arguments);
        value = this.getCurrencyRemoved(value);
        return value;
    },
    getErrors: function(value) {
        if (arguments.length > 0) {
            value = this.getCurrencyRemoved(value);
        } else {
            value = this.getCurrencyRemoved(this.getRawValue());
        }
        return this.callParent(arguments);
    }
});