jQuery(document).ready(function($) {

    var mediaUploader;

    $('#upload-button').on('click', function(e) {
        e.preventDefault();
        if( mediaUploader ) {
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Загрузить изображение',
            button: {
                text: 'Выберете изображение'
            },
            multiple: false
        });

         mediaUploader.on('select', function(){
             attachment = mediaUploader.state().get('selection').first().toJSON();
             $('#title-picture').val(attachment.url);
             $('#title-image img').attr('src', attachment.url);
         });

        mediaUploader.open();

    });

});