Ext.define('NpoaApp.view.menu.Benutzer', {
    extend: 'Ext.ux.toolbar.MainMenuToolbar',
    requires: [
        'Ext.ux.toolbar.MainMenuToolbar'
    ],
    alias: 'widget.menuBenutzer',
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
                    click: function() {
                        NpoaApp.app.redirectCheck('benutzer/index');
                    }
                }
            }
        },
        {
            text: 'Projekte',
            itemId: 'startBtn',
            iconCls: 'fa fa-sitemap',
            ihref: 'benutzer/index'
        }
        // {
        //     text: 'Logout',
        //     itemId: 'logoutBtn',
        //     icon: 'css/icons/logout.svg',
        //     ihref: 'logout'
        // }
    ]
});