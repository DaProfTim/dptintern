if (Ext.util && Ext.util.Format) {
    Ext.define('NpoaApp.overrides.util.Format', {
        override: 'Ext.util.Format',
        decimalSeparator: ',',
        thousandSeparator: '.',
        currencyAtEnd: true,
        currencySign: '€',
        currencySpacer: ' '
    });
}