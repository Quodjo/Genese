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


$mealGrid = [];
$mealCategories = [];
$mealCard = [
'itemType' => 'bc',
'itemName' => 'Jollof',
'itemPrice' => 40,
'itemQuantity' => 200,
'itemCategories' => ['fullPID' => 'Full Portion', 'halfPID' => 'Half Portion'],
'itemDescription' => 'A short description of the food item.'
];

$mealCard1 = [
'itemType' => 'cx',
'itemName' => 'Fries',
'itemPrice' => 60,
'itemQuantity' => 200,
'itemCategories' => ['fullPID2' => 'Full Portion', 'halfPID2' => 'Half Portion'],
'itemDescription' => 'Fried ships yall'
];



//Major Food meta data
$cart = [];
$foodBoard = [
    'foodUserDetails' => ['username' => 'Ronald'],
    'mealGrid' => $mealGrid,
    'mealCategories' => ['allID' => 'All','pastryID' => 'Pastry','drinkID' => 'Drink','juiceID' => 'Juice'],
    'foodLord' => 'Big Ben',
    'cart' => $cart
];

//STorign data in the mealGrid array;
array_push($foodBoard['mealGrid'],$mealCard,$mealCard1);

$cartObject = ["itemID" => 'Item Object'];
array_push($foodBoard['cart'],$cartObject);

//Now storing in the foodBoard
//array_push($foodBoard['mealCategories'],'All');

//end of test data

echo json_encode($foodBoard);











?>