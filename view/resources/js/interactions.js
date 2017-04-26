$(document).ready(function() {
    //This script contains all forms of interactions with the application
    var addToCartBtn = $('.addCartBtn');
    var orderButton = $('orderBtn');

    addToCartBtn.click(function() {
        var itemName = $(this).attr('data-foodName');
        var itemID = $(this).attr('data-foodid');
        addItemToCart(itemID, itemName);

        var time = 1000;

        if ($('.rightSide').css('display') == 'none') {
            Materialize.toast('Item Added To Cart', time)

            setTimeout(function() {
                $('.rightSide').show(200);

            }, time);
        }





    });


    orderButton.click(function() {



    });

    $('#checkoutUsername').ready(function() {
        $('#checkoutUsername').html(mealObject.user.firstName);
    });



});