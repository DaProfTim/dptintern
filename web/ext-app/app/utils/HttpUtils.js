Ext.define('NpoaApp.utils.HttpUtils', {
    statics: {

        initLoadingMask: function (loadingMessage) {
            var loadText = loadingMessage;
            if (Ext.isEmpty(loadingMessage)) {
                loadText = NpoaApp.Translations.global.LOADING + '...';
            }
            // Mask function on Ext.getBody() to mask the body element during Ajax calls
            Ext.Ajax.on('beforerequest', function () {
                Ext.getBody().mask(loadText, 'loading')
            }, Ext.getBody());

            Ext.Ajax.on('requestcomplete', Ext.getBody().unmask, Ext.getBody());
            Ext.Ajax.on('requestexception', Ext.getBody().unmask, Ext.getBody());
        },

        onXHRException: function (debugInfo) {
            Ext.Msg.show({
                title: NpoaApp.Translations.global.XHR_EXCEPTION_TITLE,
                msg: NpoaApp.Translations.global.XHR_EXCEPTION_INFO + '<br>' + debugInfo,
                buttons: Ext.Msg.OK,
                closable: true,
                icon: Ext.Msg.ERROR,
                maxWidth: 900
            });
        }
    }
});