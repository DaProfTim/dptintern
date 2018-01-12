Ext.define('Ext.overrides.menu.Menu', {
    override: 'Ext.menu.Menu',
    getFocusEl: function() {
        return this.focusedItem || this.el;
    }
});