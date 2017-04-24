<?php

class FoodVendor{

public $vendorName;
public $vendorFoodBoard;
public $categories;


function __construct(){
    $this->vendorName = 'Big Ben';
    $this->vendorFoodBoard = [];
    $this->categories= [];
   
}

public function getVendorName(){
    return $this->vendorName;

}

public function getvendorFoodBoard(){
    return $this->vendorFoodBoard;
    
}

public function getVendorCategories(){
    return $this->categories;
    
}



//Mutator Methods
public function setVendorName($par){
   $this->vendorName = $par;

}

public function setVendorFoodBoard($par){
   $this->vendorFoodBoard = $par;

}

public function setCategories($par){
   $this->categories = $par;

}







}


?>