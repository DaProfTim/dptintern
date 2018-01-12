Ext.define('NpoaApp.view.NpoaViewport', {
    extend: 'Ext.tab.Panel',
    fullscreen: true,
    alias: 'widget.npoaViewport',
    requires: [
    ],
    defaults: {
        styleHtmlContent: true
    },
    tabBarPosition: 'top',
    items: [
        {
            title: '',
            iconCls: 'x-fa fa-home',
            layout: 'fit',
            html: ''
        },
        {
            title: 'Bestellen',
            iconCls: 'x-fa fa-user',
            html: ''
        },
        {
            title: '',
            iconCls: 'x-fa fa-users',
            html: ''
        },
        {
            title: '',
            iconCls: 'x-fa fa-cog',
            html: ''
        }
    ]
});
