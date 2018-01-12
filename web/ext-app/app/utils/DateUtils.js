Ext.define('NpoaApp.utils.DateUtils', {
    statics: {
        getMonday: function(date) {
            var newDate = Ext.clone(date);
            var day = newDate.getDay() || 7;
            if( day !== 1 ) {
                newDate.setHours(-24 * (day - 1) + 12, 0, 0);
            }

            return newDate;
        },
        getSunday: function(date) {
            var newDate = Ext.clone(date);
            var day = newDate.getDay() || 1;
            if( day !== 7 ) {
                newDate.setHours(24 * (7 - day) + 12, 0, 0);
            }

            return newDate;
        }
    }
});