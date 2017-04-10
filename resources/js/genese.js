$(document).ready(function() {

    startSlide();






    $('.cartBtn').click(function() {
        showCheckout();
    });

    $('#homeSearch').mousewheel(function(event) {
        if (event.deltaY == -1) {
            $('#foodFeature').css('top', '0%');
        } else if (event.deltaY == 0) {
            console.log('Only scoll down');
        }
        console.log(event.deltaY);


    });

    $('.mealAd').mousewheel(function(event) {
        if (event.deltaY == -1) {
            var winHeight = $('.mealAd').outerHeight();
            $('#foodFeature').animate({ scrollTop: winHeight });
        } else if (event.deltaY == 1) {
            $('#foodFeature').css('top', '100%');
            $('#foodFeature').scrollTop(0);
        }
        console.log(event.deltaY);


    });



    $('.itemHolder').mousewheel(function(event) {
        if (event.deltaY == -1) {
            var page = $('#foodMenu').outerHeight();
            $('#foodMenu').scrollTop(page * 2);
            // $('#foodFeature').scrollTop(0);

        }


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