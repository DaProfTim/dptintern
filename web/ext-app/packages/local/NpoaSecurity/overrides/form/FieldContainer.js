Ext.define('NpoaSecurity.overrides.form.FieldContainer', {
    override: 'Ext.form.FieldContainer',

    checkAclField: function() {
        if (!Ext.isEmpty(NpoaApp.user) && NpoaApp.user.isLoggedIn()) {
            var fields = this.items;
            var hasOnlyHiddenFields = true;
            fields.each(function(field) {
                if (field instanceof Ext.form.field.Base) {
                    field.checkAclField();
                }
                if (!field.isHidden()) {
                    hasOnlyHiddenFields = false;
                }
            });
            if (hasOnlyHiddenFields) {
                this.setHidden(true);
            }
        }
    }
});