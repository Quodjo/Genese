<?php

require '../model/class_FoodApp.php';

$app1 = new FoodApp;

$app1->getUserInfo();
$app1->getAllAvailableFood('Super Ben');
$app1->getAllCategories();


echo json_encode($app1);

?>