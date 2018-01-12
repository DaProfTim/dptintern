Ext.define('NpoaApp.ux.Dropzone', {
    extend: 'Ext.form.FieldContainer',
    alias: ['widget.dropzone'],
    html: '',
    dropzoneId: null,
    url: null,
    params: null,
    paramName: 'file',
    maxFilesize: 10,
    acceptedTypes: [
        'image/gif',
        'image/png',
        'image/jpeg',
        'text/*',
        'application/pdf'
    ],
    dropzone: null,
    maxFiles: null,
    componentCls: 'x-container-dropbox',
    initComponent: function() {
        var me = this;
        me.callParent(arguments);
        if (Ext.isEmpty(me.dropzoneId)) {
            me.dropzoneId = me.id + '-dropzone';
        }
        me.on('afterrender', me.onAfterRenderDropzone, me);
        me.setHtml('<div id="' + this.dropzoneId + '" style="height: 200px" class="dropzone needsclick"></div>');
    },
    dropzoneMsgError: 'Fehler bei der Übertragung.',
    onDropzoneError: function(dropzone, file, response) {
        dropzone.removeFile(file);
        Ext.Msg.alert('Fehler', this.dropzoneMsgError);
    },
    onDropzoneSuccess: function(dropzone, file, response) {
        dropzone.removeFile(file);
    },

    onAfterRenderDropzone: function() {
        var me = this;
        var acceptedTypesStr = ((Ext.isEmpty(me.acceptedTypes)) ? '' : me.acceptedTypes.join(','));
        var myDropzone = new Dropzone('div#' + me.dropzoneId, {
            url: me.url,
            acceptedFiles: acceptedTypesStr,
            maxFiles: me.maxFiles,
            paramName: me.paramName,
            maxFilesize: me.maxFilesize,
            dictDefaultMessage: 'Ziehen Sie Ihre Dateien auf dieses Feld oder klicken Sie auf das Feld, um Dateien auszuwählen.'
        });
        me.dropzone = myDropzone;
        myDropzone.autoDiscover = false;
        myDropzone.options = Ext.Object.merge(myDropzone.options, {
            dictFallbackMessage: 'Ihr Browser unterstützt kein Drag &amp; Drop Datei Upload.',
            dictFallbackText: 'Bitte benutzen Sie das folgende Formular zum Upload.',
            dictFileTooBig: 'Die Datei ist zu groß ({{filesize}}MB). Max. Dateigröße: {{maxFilesize}}MB.',
            dictInvalidFileType: 'Dateityp wird nicht unterstützt.',
            dictResponseError: 'Der Server antwortete mit dem Statuscode {{statusCode}}.',
            dictCancelUpload: 'Upload abbrechen',
            dictCancelUploadConfirmation: 'Sind Sie sicher, dass Sie den Upload abbrechen wollen?',
            dictRemoveFile: 'Datei entfernen',
            dictRemoveFileConfirmation: null,
            dictMaxFilesExceeded: 'Sie können keine weiteren Dateien hochladen.'
        });

        myDropzone.on('success', function(file, response) {
            var responseJson = Ext.JSON.decode(response);
            if (file.status == 'success' && responseJson.success) {
                me.onDropzoneSuccess(myDropzone, file, responseJson);
            } else {
                me.onDropzoneError(myDropzone, file, responseJson);
            }
        });
        myDropzone.on('sending', function (file, xhr, formData) {
            if (!Ext.isEmpty(me.params)) {
                Ext.Object.each(me.params, function (key, value) {
                    formData.append(key, value);
                })
            }
        });
        myDropzone.on('error', function(file) {
            me.onDropzoneError(myDropzone, file, '');
        });
    }
});