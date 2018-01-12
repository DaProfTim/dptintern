Ext.define('Ext.overrides.form.field.Date', {
    override: 'Ext.form.field.Date',
    requires: ['Ext.picker.Month'],
    selectMonth: new Date((new Date().setDate(1))),
    switchFormat: function(newFormat) {
        var dateVal = this.getValue();
        this.format = newFormat;
        if (Ext.isDate(dateVal) || dateVal == null) {
            this.suspendCheckChange++;
            this.setValue(dateVal);
            if (!Ext.isEmpty(this.picker)) {
                this.picker.destroy();
                this.picker = this.createPicker();
            }
            this.suspendCheckChange--;
        }
    },
    setValue: function(value) {
        if (this.format == 'm.Y' && Ext.isDate(value)) {
            value.setDate(1);
        }
        this.callParent(arguments);
    },
    createPicker: function() {
        if (this.format == 'm.Y') {
            return this.getMonthPicker();
        } else {
            return this.callParent();
        }
    },
    getMonthPicker: function() {
        var me = this,
            format = Ext.String.format;
        return new Ext.picker.Month({
            id: me.id + '-picker',
            pickerField: me,
            ownerCt: me.ownerCt,
            renderTo: document.body,
            floating: true,
            hidden: true,
            focusOnShow: true,
            minDate: me.minValue,
            maxDate: me.maxValue,
            disabledDatesRE: me.disabledDatesRE,
            disabledDatesText: me.disabledDatesText,
            disabledDays: me.disabledDays,
            disabledDaysText: me.disabledDaysText,
            format: me.format,
            showToday: me.showToday,
            startDay: me.startDay,
            minText: format(me.minText, me.formatDate(me.minValue)),
            maxText: format(me.maxText, me.formatDate(me.maxValue)),
            listeners: {
                select: {
                    scope: me,
                    fn: me.monthPickerOnSelect
                },
                monthdblclick: {
                    scope: me,
                    fn: me.monthPickerOnOKClick
                },
                yeardblclick: {
                    scope: me,
                    fn: me.monthPickerOnOKClick
                },
                OkClick: {
                    scope: me,
                    fn: me.monthPickerOnOKClick
                },
                CancelClick: {
                    scope: me,
                    fn: me.monthPickerOnCancelClick
                }
            },
            keyNavConfig: {
                esc: function() {
                    me.collapse();
                }
            }
        });
    },
    monthPickerOnCancelClick: function() {
        var me = this;
        me.selectMonth = null;
        me.collapse();
    },
    monthPickerOnOKClick: function() {
        var me = this;
        if (me.selectMonth) {
            me.setValue(me.selectMonth);
            me.fireEvent('select', me, me.selectMonth);
        }
        me.collapse();
    },
    monthPickerOnSelect: function(m, d) {
        var me = this;
        me.selectMonth = new Date((d[0] + 1) + '/1/' + d[1]);
    }
});