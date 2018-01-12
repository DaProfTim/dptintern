Ext.define('NpoaApp.model.appBundle.entity.accessControl.base.Session', {
    extend: 'Ext.data.Model',
    idProperty: 'sessId',
    prefix: 'session',
    fields: [
        { name: 'prefix', type: 'string', convert: function(v, record) { return 'session'; } },
        { name: 'sessId', type: 'string' },
        { name: 'sessTime', type: 'integer', allowNull: true, defaultValue: null },
        { name: 'sessLifetime', type: 'integer', allowNull: true, defaultValue: null }
    ]
});
