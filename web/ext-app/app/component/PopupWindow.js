Ext.define('NpoaApp.component.PopupWindow', {
    extend: 'Ext.window.Window',
    style: {
        maxHeight: '90%',
        maxWidth: '800px'
    },
    layout: 'fit',
    modal: true,
    closable: false,
    padding: 0,
    fixed: true,
    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        me.on('afterrender', me.handleAfterRenderCustom, me);
    },
    listeners: {
        move: function(win) {
            var offset = (win.container.getHeight() - win.getHeight()) / 2;
            var topPos = win.container.getScrollTop() + offset;
            if (win.getY() != topPos) {
                win.setY(topPos);
            }
        }
    },
    handleAfterRenderCustom: function() {
        // fix fuer Ext-Bug hbox-layout
        this.setWidth(this.getWidth());
    }
});