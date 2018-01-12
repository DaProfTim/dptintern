Ext.define('Ext.overrides.form.Panel', {
    override: 'Ext.form.Panel',
    clearDirty: function () {
        return this.getForm().clearDirty();
    },
    loadRecord: function (record, prefix) {
        this.callParent(arguments);
        return this.getForm().loadRecord(record, prefix);
    }
});