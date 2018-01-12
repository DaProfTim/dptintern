Ext.define('NpoaApp.ResponsiveConfig', {
    statics: {
        getConfig: function(component, opts) {
            var type;
            var resConfig = {};

            if (component instanceof Ext.form.field.Base) {
                type = 'formfield';
            } else if (component instanceof Ext.form.FieldSet) {
                type = 'fieldset';
            }  else if (component instanceof Ext.form.FieldContainer) {
                type = 'fieldcontainer';
            } else {
                type = 'panel';
            }


            // debugger;
            switch(type) {
                case 'panel':
                    resConfig = {
                        small: {
                            layout: {
                                type: 'box',
                                vertical: true,
                                align: 'stretch'
                            },
                            defaults: {
                                labelAlign: 'top'
                            }
                        },
                        medium: {
                            layout: {
                                type: 'box',
                                vertical: true,
                                align: 'stretch'
                            },
                            defaults: {
                                labelAlign: 'top'
                            }
                        },
                        large: {
                            layout: {
                                type: 'box',
                                vertical: false,
                                align: 'stretch'
                            },
                            defaults: {
                                labelAlign: 'top'
                            }
                        }
                    };
                    break;
            }

            if (opts) {
                Ext.Object.merge(resConfig, opts);
            }

            return resConfig;
        }
   }
});
