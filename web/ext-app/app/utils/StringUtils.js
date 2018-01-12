Ext.define('NpoaApp.utils.StringUtils', {
    statics: {
        ucFirst: function(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        },
        lcFirst: function(str) {
            return str.charAt(0).toLowerCase() + str.slice(1);
        },
        isString: function (s) {
            return typeof(s) === 'string' || s instanceof String;
        },
        replaceVars: function(str, args) {
            if (args.length > 0) {
                for (var i = 0; i < args.length; i++) {
                    str = str.replace(args[i][0], args[i][1]);
                }
            }
            return str;
        }
    }
});