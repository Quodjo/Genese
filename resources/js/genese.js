$(document).ready(function() {

    var sliderContainer = $('.slideShowBack');
    sliderContainer.ready(function() {
        startSlide();
    });

    /* $(".nano").nanoScroller();*/

    $('.cartBtn').click(function() {
        showCheckout();
    });


});


/*Slider function*/
function startSlide() {

    $(".rslides").responsiveSlides({
        speed: 2000, // Integer: Speed of the transition, in milliseconds
        timeout: 6000
    });
}

/*end of slider function*/
function showCheckout() {
    var elem = $('.rightSide');
    elem.toggle(200);

}