Ext.define('NpoaApp.component.GroupingComboBox', {
    extend: 'Ext.form.field.ComboBox',
    alias: ['widget.groupingcombobox', 'widget.groupingcombo'],

    constructor: function (args) {
        var me = this,
            groupField = args.groupField || "group",
            groupDisplayField = args.groupDisplayField || groupField,
            displayField = args.displayField || "name";
        //debugger

        args.tpl = new Ext.XTemplate(
            '<tpl for=".">',
            '<tpl if="this.' + groupField + ' != values.' + groupField + '">',
            '<tpl exec="this.' + groupField + ' = values.' + groupField + '"></tpl>',
            '<div class="groupingcombo-header" title="{' + groupDisplayField + '}">{' + groupDisplayField + '}</div>',
            '</tpl>',
            '<div class="x-boundlist-item indent">{' + displayField + '}</div>',
            '</tpl>'
        );

        me.callParent(arguments);
    }
});