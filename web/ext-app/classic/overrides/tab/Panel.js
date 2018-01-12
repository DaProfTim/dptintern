Ext.define('Ext.overrides.tab.Panel', {
    override: 'Ext.tab.Panel',
    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        me.cls = 'npo-tabpanel ' + ((me.cls != undefined) ? me.cls : '');

        me.addListener('tabchange', function(tabPanel, newCard, oldCard, eOpts) {
            var token = Ext.util.History.getToken(),
                segments = token.split('/'),
                oldTabAlias = oldCard.getXType(),
                newTabAlias = newCard.getXType(),
                newToken;

            var lastIndex = segments.length -1;
            var lastSegment = segments[lastIndex];

            if (lastSegment == oldTabAlias) {
                segments[lastIndex] = newTabAlias;
            } else if (lastSegment != newTabAlias) {
                segments.push(newTabAlias);
            }
            newToken = segments.join('/');
            NpoaApp.app.redirectTo(newToken);
        });
    }
});