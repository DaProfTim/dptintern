Ext.define('NpoaApp.view.menu.BaseMenuController', {
    extend: 'Ext.app.Controller',
    beforeTab: function(widget, route, tab, action) {
        var token = Ext.util.History.getToken();
        var component = Ext.ComponentQuery.query(widget)[0];
        if (component && (token == route || token == route + '/' + tab)) {
            action.stop();
        } else {
            action.resume();
        }
    }
});
