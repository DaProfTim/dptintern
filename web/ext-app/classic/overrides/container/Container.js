Ext.define('NpoaApp.overrides.container.Container', {
    override: 'Ext.container.Container',

    resetView: function(isConfigUnchanged) {
        if (isConfigUnchanged) {
            return;
        }
        // Nur wenn sich die Config der View geaendert hat, ist standardmaessig ein Reset notwendig
        // Es werden alle Forms sowie Grids- und Treepanel-Stores geleert
        if (this instanceof Ext.form.Panel) {
            if (!Ext.isEmpty(this.getForm().getRecord())) {
                this.loadRecord(Ext.create(this.getForm().getRecord().self.getName()));
                this.clearDirty();
            }
        }
        this.query('form').forEach(function (item) {
            if (!Ext.isEmpty(item.getForm().getRecord())) {
                item.loadRecord(Ext.create(item.getForm().getRecord().self.getName()));
                item.clearDirty();
            }
        });
        if (this instanceof Ext.grid.Panel) {
            if (!Ext.isEmpty(this.getStore())) {
                this.getStore().removeAll();
            }
        }
        this.query('grid').forEach(function (item) {
            if (!Ext.isEmpty(item.getStore())) {
                item.getStore().removeAll();
            }
        });
        if (this instanceof Ext.tree.Panel) {
            if (!Ext.isEmpty(this.getStore())) {
                this.getStore().removeAll();
            }
        }
        this.query('treepanel').forEach(function (item) {
            if (!Ext.isEmpty(item.getStore())) {
                item.getStore().removeAll();
            }
        });
    }
});