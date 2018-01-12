Ext.define('NpoaApp.view.menu.Index', {
    extend: 'Ext.toolbar.Toolbar',
    alias: 'widget.menuIndex',
    items: [
        {
            xtype: 'image',
            src: 'images/npoa_logo_white_sm.png',
            cls: 'navTopBrand',
            width: 150,
            height: 58,
            margin: '10 25 10 25',
            alt: 'NPO Applications',
            textAlign: 'left',
            listeners: {
                el: {
                    click: function(btn) {
                        NpoaApp.app.redirectCheck('benutzer/index');
                    }
                }
            }
        }
    ]
});