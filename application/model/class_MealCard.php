<?php

class MealCard{
	public $itemType;
	public $itemName;
	public $itemPrice;
	public $itemQuantity;
    public $itemImage;
	public $itemStatus;

	
	function __construct(){
        $this->itemType = [];
		$this->itemName = 'Jollof';
		$this->itemPrice = 0;
		$this->itemQuantity = 0;
		$this->itemStatus = 'Available';
        $this->itemImage = 'http://www.landingsumo.com/demos/Theme%2009/assets/img/food/2.png';
      
		
	}

    public function getItemType(){
        return $this->itemType;
    }

     public function getItemName(){
        return $this->itemName;
    }

     public function getItemPrice(){
        return $this->itemPrice;
    }

     public function getItemQuantity(){
        return $this->itemQuantity;
    }

     public function getitemStatus(){
        return $this->itemStatus;
    }

    public function getItemImage(){
        return $this->itemImage;
    }

   

//Mutator methods
     public function setItemType($par){
        $this->itemType = $par;
    }

     public function setItemName($par){
        $this->itemName = $par;
    }

     public function setItemPrice($par){
        $this->itemPrice = $par;
    }

     public function setItemQuantity($par){
       $this->itemQuantity = $par;
    }

     public function setitemStatus($par){
       $this->itemStatus = $par;
    }

    public function setItemImage($par){
       $this->itemStatus = $par;
    }

    
}


?>