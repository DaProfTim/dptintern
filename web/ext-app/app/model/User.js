Ext.define('NpoaApp.model.User', {
    requires: [
        'NpoaSecurity.model.User'
    ],
    extend: 'NpoaSecurity.model.User',
    // Diese Werte werden mit den Symfony Userdaten beim Instanziieren initialisiert
    config: {
        createdAt: null,
        updatedAt: null,
        updatedBy: null,
        createdBy: null,
        email: null,
        benutzername: null,
        passwort: null,
        istAktiv: null,
        vorname: null,
        nachname: null,
        geschlecht: null,
        id: null,
        ersterLogin: null,
        ablaufdatum: null,
        rolle: []
    }
});