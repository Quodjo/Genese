/*Author Ronald Nettey*/

//Contains the row which all food cards are displayed
var foodBoard = $('#foodBoard');
var foodBoardCategories = $('#foodCategories');
var foodLordName = $('#foodLord');
var foodCart = $('#foodCart');
var navBar_username = $('#username');
var mealObject;

$(document).ready(function() {

    //Initiation of the application
    init();

    //Setting Food Lord
    foodLordName.html(mealObject.vendor.vendorName);

    //SEtting the food cart
    console.log(mealObject.user);


    //Setting up the user details
    //-Username
    navBar_username.html(mealObject.user.firstName);




});

function init() {
    prepareMealBoard();
}

//Prepares the meal board on initiation
function prepareMealBoard() {
    console.log(document.location);
    var localHost = document.location.origin + '/Genese%20-%20FoodApp/Application/Application/';
    console.log(localHost);
    mealObject = $.getAjaxData('', localHost + 'controller/control_FoodApp.php');
    console.log(mealObject.vendor.vendorFoodBoard);

    //Populating the Food Board Grid
    for (var i = 0; i < mealObject.vendor.vendorFoodBoard.length; i++) {
        foodBoard.append(bindMealCardData(mealObject.vendor.vendorFoodBoard[i]));
        //console.log(mealObject.vendor.vendorFoodBoard[i]);
    }

    //Setting main categories
    var mainCat = setCategories(mealObject.mealCategories, 'mainCat');
    foodBoardCategories.append(mainCat);


}


//Binds the data to the html
function bindMealCardData(mealData) {
    if (mealData.type == 'Fod')
        modalLink = '#extrasModal';

    else modalLink = '#';

    return "<div class='card mealCard medium col m3 s12' data-itemType ='" + mealData.type + "'>" +
        "<div class='card-image waves-effect waves-block waves-light'>" +
        " <img class='activator' src='http://www.landingsumo.com/demos/Theme%2009/assets/img/food/2.png'>" +
        "</div>" +
        "<div class='card-content'>" +
        " <span class='card-title activator grey-text text-darken-4'>" + mealData.food_name + "<i class='material-icons right'>more_vert</i></span>" +
        "<p>GHC" + mealData.price + "</p>" +
        " </div>" +
        "<div class='card-reveal'>" +
        " <span class='card-title grey-text text-darken-4'>" + mealData.food_name + "<i class='material-icons right'>close</i></span>" +
        "<p>" + mealData.food_id + "</p>" +
        "<form action='#'>" +
        "<p>" + "</p>" +
        "</form>" +
        " <h3>GHC" + mealData.price + "</h3>" +
        "<a class='waves-effect waves-light btn addCartBtn' data-foodid = '" + mealData.food_id + "' data-foodName = '" + mealData.food_name + "' href = '" + modalLink + "'>" +
        "<i class='fa fa-cart-plus' aria-hidden='true'></i>" +
        "<span> Add to Cart</span>" +
        " </a>" +
        "</div>" +
        "</div>"
}


function addItemToCart(itemID, itemName) {
    var cart = $('#orderedItems');
    var numItems = 0;

    var preparedItem = "<div class='chip orderedItem' data-foodID = '" + itemID + "'>" +
        "<img src='https://lh3.googleusercontent.com/dB3Dvgf3VIglusoGJAfpNUAANhTXW8K9mvIsiIPkhJUAbAKGKJcEMPTf0mkSexzLM5o=w300' alt='Food'>" +
        "<span id='cart_ItemName'>" + itemName + "</span>" +
        "<i class='close material-icons'>close</i>" +
        "</div>";


    if (itemID != null && itemName != null) {
        cart.append(preparedItem);

        foodCart.html(cart.children().length);
    }
}






function setCategories(categories, catType) {
    if (categories != null) {
        var subCat = '';
        for (var i in categories) {
            if (categories.hasOwnProperty(i)) {
                subCat += "<p>" +
                    "<input name='" + catType + "' value = '" + i + "' type='radio' id='" + i + "' />" +
                    "<label for='" + i + "'>" + categories[i] + "</label>" +
                    "</p>";
            }
        }
        return subCat;
    }
}

function setMainCategories(categories) {

}


//Calling jquery's ajax method
jQuery.extend({
    getAjaxData: function(myData, myUrl) {
        var requestedData = null;
        $.ajax({
            //Location to the processing file.
            url: myUrl,

            //Type is the method, whether its a POST or GET
            type: 'POST',

            //Data refers to the data that is to be sent via the server
            /*Im passing an arrary to server which can then be accessed by
            the key of the array. Eg. In php we can access and store a particular value
            from the array using the key. If the key in the array was 'J', in order to 
            get and store it in a variable in php, it goes like this $_POST['J'].
            It took sometime to figure it out but I did by Gods grace. All thanks to Him.*/
            data: myData,

            dataType: 'json',
            async: false,

            //The below callback function is called once the communication is successful
            success: function(response) {

                requestedData = response;


            },

            //Or else when theres an error, this callbackfunction is called.
            error: function() {
                console.log("Couldnt transfer data.");
                resquestedData = '';

            }
        });

        return requestedData;
    }
});