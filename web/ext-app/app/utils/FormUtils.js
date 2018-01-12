Ext.define('NpoaApp.utils.FormUtils', {
    statics: {

        checkDirtyTab: function (activeTab, clickedTab, form) {
            var tabPanel = activeTab.up('tabpanel');

            if (form.isDirty()) {
                if (confirm(NpoaApp.Translations.update.UNSAVED_DATA)) {
                    form.reset();
                    return true;
                }
                return false;
            }
        },

        markRadioGroupErrors: function (form) {
            form.getFields().each(function (item, index, fields) {
                if (item.getXType() == 'radiogroup' && typeof item.activeError != 'undefined') {
                    var rButtons = item.items;
                    rButtons.each(function (rButton, index, buttons) {
                        if (rButton.isRadio == true) {
                            rButton.inputEl.addCls('x-form-trigger-wrap-default');
                            rButton.inputEl.addCls('x-form-trigger-wrap-invalid');
                        }
                    });
                }
            });
        },

        checkDirtyForms: function (forms, callback) {
            if (forms.length > 0) {
                var dirtyForm = null;
                Ext.iterate(forms, function (form) {
                    if (form.getForm().isDirty()) {
                        dirtyForm = form;
                        return false;
                    }
                });
                if (dirtyForm) {
                    Ext.Msg.confirm(
                        NpoaApp.Translations.form.UNSAVED_DATA_TITLE,
                        NpoaApp.Translations.form.UNSAVED_DATA,
                        function (btn) {
                            if (btn == 'yes') {
                                dirtyForm.reset();
                                callback(true);
                            } else {
                                callback(false);
                            }
                        }
                    );
                } else {
                    callback();
                }
            } else {
                callback();
            }
        }
    }
});