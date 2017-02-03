jQuery(document).ready(function ($){
    var slider = $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        auto: true,
        pause: 2000,
        onSlideBefore:function($slideElement, oldIndex, newIndex){
            changeRealThumb(pager, newIndex);

        }
    });

    var pager = $('#bx-pager').bxSlider({
        slideWidth: 100,
        minSlides: 1,
        maxSlides: 5,
        moveSlides: 1,
        slideMargin: 28,
        pager: false,
        wrapperClass: 'page-wrapper',
        controls: false,
        infiniteLoop: false
    });
    function changeRealThumb(slider,newIndex){

        var $thumbS=$("#bx-pager");

        $thumbS.find(".active").next().addClass("active");
        $thumbS.find(".active").removeClass("active");

        if( slider.getSlideCount() - newIndex >= 4 ) {
            slider.goToSlide(newIndex);
        } else {
            slider.goToSlide(slider.getSlideCount()-4);
        }

    }
});
