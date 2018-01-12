Ext.define('NpoaApp.model.appBundle.entity.accessControl.base.Rolle', {
    extend: 'Ext.data.Model',
    idProperty: 'id',
    prefix: 'rolle',
    fields: [
        { name: 'prefix', type: 'string', convert: function(v, record) { return 'rolle'; } },
        { name: 'id', type: 'integer', allowNull: true, defaultValue: null },
        { name: 'name', type: 'string' },
        { name: 'beschreibung', type: 'string' }
    ]
});
