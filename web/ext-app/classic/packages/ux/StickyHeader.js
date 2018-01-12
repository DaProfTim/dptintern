Ext.define('NpoaApp.ux.StickyHeader', {
    extend: 'Ext.Mixin',

    initComponent: function() {
        if (this.useStickyHeader) {
            this.initStickyHeader();
        }
    },

    initStickyHeader: function() {
        // Init Sticky Header Component Variablen
        this.isStickyHeaderActive = false;
        this.stickyHeaderOffset = 40; // hier kann ein Offset vorgegeben werden, falls noch andere Elemente auf der Seite oben fixed angezeigt werden
        this.columnsHeaderDockedTopOrig = 0;
        this.columnsHeaderDockedLeftOrig = 0;
        this.scrollTriggerPos = 0;
        this.addCls('sticky-header');

        // Manches kann erst beim Rendern erfolgen
        this.on('render', this.handleRenderCustom, this);
    },

    handleRenderCustom: function (comp) {
        // Scroll Listener setzen
        NpoaApp.app.viewport.getScrollable().on({
            scroll: { fn: this.handleStickyHeaderWrapper, scope: this, buffer: 0 }
        });
        // Bei TabPaneln bleibt die TabBar stehen, daher erhoeht sich das Offset
        if (NpoaApp.app.viewport.getHasActiveTabPanel()) {
            comp.stickyHeaderOffset += 51;
        }
        // Grid Colum Header Zeile merken
        comp.columnsHeaderDocked = Ext.get(comp.bodyWrap.query('.x-grid-header-ct-docked-top')[0]); // Grid Spalten Ueberschriften

        this.on('afterlayout', this.handleStickyHeaderWrapperForced, this);
    },

    handleStickyHeaderWrapperForced: function() {
        if (this.scrollTriggerPos == 0) {
            // Beim ersten Layout muss die Position, ab dem der Sticky Header getriggert werden soll, berechnet werden sowie die Original-Werte gespeichert
            this.scrollTriggerPos = this.columnsHeaderDocked.getTop() - this.stickyHeaderOffset;
            this.columnsHeaderDockedLeftOrig = this.columnsHeaderDocked.getLeft();
            this.columnsHeaderDockedTopOrig = this.columnsHeaderDocked.dom.offsetTop;
        }
        this.handleStickyHeader(true);
    },

    handleStickyHeaderWrapper: function() {
        this.handleStickyHeader(false);
    },

    enableStickyHeader: function(forced, hide) {
        var comp = this;
        var wasStickyBefore = comp.isStickyHeaderActive;
        comp.isStickyHeaderActive = true;

        if (!wasStickyBefore || forced) {
            // Grid-Column-Header-Zeile am oberen Bildschirmrand bzw. unter den restlichen position-fixed-Divs positionieren
            comp.columnsHeaderDocked.setStyle('top', comp.stickyHeaderOffset + 'px');
        }

        if (!hide) {
            if (!wasStickyBefore || forced) {
                comp.columnsHeaderDocked.addCls('sticky-header-sticked');
                comp.columnsHeaderDocked.setStyle('left', comp.columnsHeaderDockedLeftOrig + 'px');
            }
            comp.columnsHeaderDocked.removeCls('sticky-header-hidden');
        } else {
            comp.columnsHeaderDocked.addCls('sticky-header-hidden');
        }
    },

    disableStickyHeader: function() {
        var comp = this;
        if (!comp.isStickyHeaderActive) {
            comp.columnsHeaderDocked.removeCls('sticky-header-hidden');
            return;
        }
        comp.isStickyHeaderActive = false;

        // Default Werte wiederherstellen
        comp.columnsHeaderDocked.removeCls('sticky-header-sticked');
        comp.columnsHeaderDocked.setStyle('left', '');
        comp.columnsHeaderDocked.setStyle('top', comp.columnsHeaderDockedTopOrig + 'px');
    },

    handleStickyHeader: function(forced) {
        var comp = this;

        if (!comp || !comp.useStickyHeader) {
            return;
        }
        var scrollPos = Ext.getBody().getScrollTop(); // Aktuelle Scroll Position
        var store = comp.getStore();

        if (store.getCount() == 0 && comp.isStickyHeaderActive) {
            comp.disableStickyHeader();
            return;
        }

        // Sticky Header wird aktiv, wenn ueber den Grid-Header hinaus gescrollt wird
        if (scrollPos > comp.scrollTriggerPos) {
            // wird unter dem letzten Grid-Zelleneintrag hinweggescrollt, wird der Sticky-Header ausgeblendet
            var scrollTriggerBottomPos = this.scrollTriggerPos + this.getView().getHeight();
            var hide = (scrollPos >= scrollTriggerBottomPos + 10);
            comp.enableStickyHeader(forced, hide);
        } else {
            comp.disableStickyHeader();
        }
    }
});