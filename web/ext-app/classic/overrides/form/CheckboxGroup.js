Ext.define('Ext.overrides.form.CheckboxGroup', {
    override: 'Ext.form.CheckboxGroup',
    invalidCls: Ext.baseCSSPrefix + 'form-invalid',

    // es konnen Entity-Objekte an Checkboxgroups uebergeben werden
    // Override um sie in ein Array mit IDs umzuwandeln bevor setValue() ausgefuehrt wird.
    setValue: function(value) {
        var me = this,
            boxes = me.getBoxes(),
            b,
            bLen = boxes.length,
            box, name,
            cbValue,
            tmpArr;

        me.batchChanges(function() {
            Ext.suspendLayouts();
            for (b = 0; b < bLen; b++) {
                box = boxes[b];
                name = box.getName();
                cbValue = false;

                if (value) {
                    if (Ext.isArray(value[name])) {
                        cbValue = Ext.Array.contains(value[name], box.inputValue);
                    } else if (Ext.isObject(value[0])) { // override fuer Entity-Objekte
                        tmpArr = [];
                        for (index in value) {
                            var obj = value[index];
                            if ('id' in obj) {
                                tmpArr.push(obj.id);
                            }
                        }
                        cbValue = Ext.Array.contains(tmpArr, box.inputValue);
                    } else {
                        // single value, let the checkbox's own setValue handle conversion
                        cbValue = value[name];
                    }
                }

                box.setValue(cbValue);
            }
            Ext.resumeLayouts(true);
        });
        return me;
    }
});