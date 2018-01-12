Ext.define('NpoaApp.view.menu.Empty', {
    extend: 'Ext.ux.toolbar.MainMenuToolbar',
    requires: [
        'Ext.ux.toolbar.MainMenuToolbar'
    ],
    style: {
        'background-color': '#43a047'
    },
    alias: 'widget.menuEmpty',
    itemId: 'menuEmpty',
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
            href: '#',
            hrefTarget: '_self'
        }
    ]
});