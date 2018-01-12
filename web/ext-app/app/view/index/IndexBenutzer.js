Ext.define('NpoaApp.view.index.IndexBenutzer', {
    extend: 'Ext.panel.Panel',
    requires: [
        'NpoaApp.view.index.IndexBenutzerController'
    ],
    controller: 'indexIndexBenutzer',
    alias: 'widget.indexIndexBenutzer',
    title: 'Herzlich willkommen!',
    width: '100%',
    items: [
        {
            xtype: 'panel',
            title: 'Startseite',
            frame: true,
            html: 'Sie befinden sich auf der Startseite. Diese Seite ist noch im Aufbau.'
        }
    ]
});