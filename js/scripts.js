jQuery(document).ready(function ($){
    var slider = $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        auto: true,
        pause: 6000,
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

    var prevIndex = 0;

    function changeRealThumb(slider,newIndex){

        var $thumbS=$("#bx-pager");
        var slideCount = slider.getSlideCount();
        var lastThreeSlides = slideCount - 2;

        $thumbS.find(".active").next().addClass("active");
        $thumbS.find(".active").removeClass("active");

        if ( $( window ).width() < 710 ) {
            if ( (newIndex == 0) && (newIndex < prevIndex) ){
                slider.reloadSlider();
                prevIndex = newIndex;
            }
            else if( newIndex < prevIndex) {
                slider.goToSlide(newIndex);
                prevIndex = newIndex;
            }
            else if( newIndex > prevIndex) {
                slider.goToSlide(newIndex);
                prevIndex = newIndex;
            }

        } else {
            if ( (newIndex == 0) && (newIndex < prevIndex) ){
                slider.goToSlide(0);
                prevIndex = newIndex;
            }
            else if( newIndex < 3 ) {
                slider.goToSlide(0);
                prevIndex = newIndex;
            }
            else if( newIndex + 1 == slideCount ) {
                slider.goToSlide(newIndex - 4);
                prevIndex = newIndex;
            }
            else if( newIndex < prevIndex && newIndex < lastThreeSlides ) {
                slider.goToSlide(newIndex - 2);
                prevIndex = newIndex;
            }
            else if( newIndex > prevIndex && newIndex < lastThreeSlides ) {
                slider.goToSlide(newIndex - 2);
                prevIndex = newIndex;
            }
        }
    }
});