Ext.define('NpoaSecurity.utils.StringUtils', {
    statics: {
        ucFirst: function(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        },
        lcFirst: function(str) {
            return str.charAt(0).toLowerCase() + str.slice(1);
        },
        isString: function (s) {
            return typeof(s) === 'string' || s instanceof String;
        }
    }
});