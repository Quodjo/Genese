$(document).ready(function() {

    startSlide();

    $('#paymentModal').modal();

    $('.modal').modal();


    $('#extrasModal').modal();

    $('.cartBtn').click(function() {
        showCheckout();
    });

    $('#homeSearch').mousewheel(function(event) {
        if (event.deltaY == -1) {
            $('html, body').animate({
                scrollTop: ($('#foodFeature').offset().top)
            }, 500);
        } else if (event.deltaY == 1) {

        }



    });

    $('#foodFeature').mousewheel(function(event) {

        console.log('ad scrolled' + $('#foodFeature').offset().top);
        console.log('WIN HEIGHT :' + $('#foodFeature').height());

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

function scrollTrigger() {

    $('#homeSearch').mousewheel(function(event) {
        $('#foodFeature').css('top', '0%');
    });
}