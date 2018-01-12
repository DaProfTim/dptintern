Ext.define('NpoaApp.model.appBundle.entity.accessControl.base.Benutzer', {
    extend: 'Ext.data.Model',
    idProperty: 'id',
    prefix: 'benutzer',
    requires: [
        'NpoaApp.model.appBundle.entity.accessControl.Rolle'
    ],
    fields: [
        { name: 'prefix', type: 'string', convert: function(v, record) { return 'benutzer'; } },
        { name: 'id', type: 'integer', allowNull: true, defaultValue: null },
        { name: 'istAktiv', type: 'boolean', convert: function(v) { return (v ? 1 : 0); }, defaultValue: 0 },
        { name: 'ersterLogin', type: 'date', dateFormat: 'c' },
        { name: 'ablaufdatum', type: 'date', dateFormat: 'c' },
        { name: 'benutzername', type: 'string' },
        { name: 'loginVersuche', type: 'integer', allowNull: true, defaultValue: null },
        { name: 'loginSperrdatum', type: 'date', dateFormat: 'c' },
        { name: 'email', type: 'string' },
        { name: 'passwort', type: 'string' },
        { name: 'resetToken', type: 'string' },
        { name: 'emailTmp', type: 'string' },
        { name: 'vorname', type: 'string' },
        { name: 'nachname', type: 'string' },
        { name: 'geschlecht', type: 'string' },
        { name: 'createdBy', type: 'string' },
        { name: 'updatedBy', type: 'string' },
        { name: 'createdAt', type: 'date', dateFormat: 'c' },
        { name: 'updatedAt', type: 'date', dateFormat: 'c' }
    ],
    manyToMany: {
        benutzerrolle: { role: 'rolle', field: 'rolle_id', type: 'NpoaApp.model.appBundle.entity.accessControl.Rolle', right: true }
    }
});
