Ext.define('NpoaSecurity.controller.SecurityController', {
    extend: 'Ext.app.Controller',
    listen: {
        global: {
            userLoggedIn: 'onUserLoggedIn',
            applicationLaunch: 'onApplicationLaunch'
        }
    },

    onUserLoggedIn: function(user, response) {
        this.appUser = user;
        this.applySecurityConfig(response.extJsSecurityConfig);
    },
    onApplicationLaunch: function(app, user) {
        if (typeof NpoaApp === 'undefined') {
            NpoaApp = {};
        }
        if (typeof NpoaApp.app === 'undefined') {
            NpoaApp.app = app;
        }
        if (typeof NpoaApp.user === 'undefined') {
            NpoaApp.user = user;
        }
        this.applySecurityConfig();
    },
    applySecurityConfig: function(pConfig) {
        var config = (typeof pConfig != 'undefined' && !Ext.isEmpty(pConfig))
            ? pConfig
            : ((typeof ejsc != 'undefined' && !Ext.isEmpty(ejsc))
            ? ejsc
            : null);
        if (config != null) {
            var jsonSecurityConfig = Ext.util.Base64.decode(config);
            NpoaApp.app.securityConfig = Ext.decode(jsonSecurityConfig);
        } else {
            NpoaApp.app.securityConfig = {};
        }
    }
});