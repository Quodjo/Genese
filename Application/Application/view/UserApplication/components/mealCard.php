<?php

//Test data, will connet this to the data base

$isBottle = true;
$price = 0.0;
$itemName = 'Name Holder';
$itemType = 'Water';
$waterCatarr = [
    'waterId2122' => 'Big Bottle'
];
$itemDescription = 'A short description of the food item.';

//MealCard object 
$mealCard = [
'itemType' => 'Meal',
'itemName' => 'Jollof',
'itemPrice' => 40,
'itemQuantity' => 200,
'itemCategories' => ['fullPID' => 'Full Portion', 'halfPID' => 'Half Portion'],
'itemDescription' => 'A short description of the food item.'
];

//end of test data

prepareMealBoard($mealCard);

//Sets the sub categories for the meal item
function setSubCategory($arr){
	$categories = '';
	foreach($arr as $key => $value){
		
		$categories .= "<p>
                <input name='". $key . "' type='radio' id='" .$key. "' />
                <label for='". $key ."'>". $value."</label>
            </p>";
		
		
	}
	
	return $categories;
}

//Prepares data that would populate the food board
function prepareMealBoard($mealCardObject){
	
    
bindFoodData($mealCardObject);


    
	
	
}


//Binds the food item data from the database to the html tags for export
function bindFoodData($mealData){
    if($mealData['itemType'] == 'Meal')
    $modalLink = '#extrasModal';

    else $modalLink = '#';

	echo "<div class='card mealCard medium col m3 s12' data-itemType ='". $mealData['itemType'] . "'>
    <div class='card-image waves-effect waves-block waves-light'>
        <img class='activator' src='http://www.landingsumo.com/demos/Theme%2009/assets/img/food/2.png'>
    </div>
    <div class='card-content'>
        <span class='card-title activator grey-text text-darken-4'>" . $mealData['itemName'] . "<i class='material-icons right'>more_vert</i></span>
        <p>GHC" . $mealData['itemPrice'] . "</p>
    </div>
    <div class='card-reveal'>
        <span class='card-title grey-text text-darken-4'>" . $mealData['itemName'] . "<i class='material-icons right'>close</i></span>
        <p>" . $mealData['itemDescription']  . "</p>
        <form action='#'>".
	            setSubCategory($mealData['itemCategories'])
	        ."</form>
        <h3>GHC". $mealData['itemPrice'] ."</h3>
        <a class='waves-effect waves-light btn addCartBtn' href = '" .$modalLink . "'>
            <i class='fa fa-cart-plus' aria-hidden='true'></i>
            <span> Add to Cart</span>
        </a>
    </div>
</div>";
}







?>