(function($){
    $(document).ready(function(){
        $('button#about_img, button#banner_image').on('click', function(e){
            e.preventDefault();
            var imageuploader = wp.media({
                'title': 'Upload Author Image',
                'button': {
                    'text': 'Set the Image',
                },
                'multiple': false,
            });
            imageuploader.open();

            imageuploader.on('select', function(){
                var image = imageuploader.state().get('selection').first().toJSON();
                var link = image.url;
                $('input#about_img_url').val(link);
                $('.preview-img img').attr('src', link);
            });

        });
    });
})(jQuery);
