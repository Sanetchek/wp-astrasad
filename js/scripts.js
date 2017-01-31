jQuery(document).ready(function ($){
    $("#lightSlider").lightSlider({
        item: 1,
        slideMove: 1,
        slideMargin: 10,
        auto: true,
        loop: true,
        pause: 6000,
        controls: true,
        pager: true,
        galleryMargin:0,
        thumbMargin:28,
        thumbItem: 5,
        gallery: true,
        enableDrag:false,
        responsive : [
            {
                breakpoint:1080,
                settings: {
                    thumbItem: 4
                }
            },
            {
                breakpoint:1024,
                settings: {
                    gallery: false
                }
            }
        ],

        onSliderLoad: function (el) {
            $('.lSGallery').wrap('<div class="wrapper"></div>');
        }
    });
});
