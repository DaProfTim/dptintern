Ext.define('NpoaSecurity.model.User', {
    /** Diese Werte werden mit den Symfony Userdaten beim Instanziieren initialisiert. */
    config: {
        id: null,
        rolle: []
    },
            
    constructor: function(config) {
        this.initConfig(Ext.JSON.decode(config));
    },

    /**
     * Gibt an, ob der User eingeloggt ist.
     *
     * @returns {boolean}
     */
    isLoggedIn: function() {
        return this.getId() != null;
    },

    getRole: function() {
        return this.getRolle();
    },
    
    /**
     * Gibt an, ob dem Benutzer die entsprechende Rolle zugeordnet ist.
     *
     * @param {string} zu pruefende Rolle
     * @returns {boolean}
     */
    hasRole: function(role) {
        if (!this.isLoggedIn()) {
            return role == 'IS_AUTHENTICATED_ANONYMOUSLY';
        }
        var gotIt = false;
        Ext.Array.each(this.getRolle(), function(obj, index, me) {
            if (obj.role === role || obj.name === role) {
                gotIt = true;
                return false
            }
        });

        return gotIt;
    },

    /**
     * Gibt an, ob dem Benutzer mind. eine entsprechende Rolle zugeordnet ist.
     *
     * @param {Array} roles zu pruefenden Rollen
     * @returns {boolean}
     */
    hasAnyRole: function(roles) {
        var gotIt = false;
        var rolesNameArray = [];
        if (!this.isLoggedIn()) {
            Ext.Array.each(roles, function(obj, index, me) {
                if (obj == 'IS_AUTHENTICATED_ANONYMOUSLY') {
                    gotIt = true;
                    return false
                }
            });
            return gotIt;
        } else {
            Ext.Array.each(this.getRolle(), function(obj, index, me) {
                rolesNameArray[obj.name] = obj.name;
            });
            Ext.Array.each(roles, function(obj, index, me) {
                if (!Ext.isEmpty(rolesNameArray[obj])) {
                    gotIt = true;
                    return false
                }
            });
        }

        return gotIt;
    }

});