<?php

//This class controls all data in the food app
require_once 'class_FoodVendor.php';
require_once 'class_MealCard.php';
require_once 'class_User.php';
require_once 'database/rDB_Conn.php';
$foodDBConnection = new DB_Connection;

/*session_start();
$_SESSION['userID'] = '97642018';
$_SESSION['firstname'] = 'Mavric';*/

class FoodApp{
	
	public $user;
	public $vendor;
	
	
	
	function __construct(){
		$this->user = new User;
		$this->vendor = new FoodVendor;
		
	}


	
	function getUserInfo(){
		$user = $this->user;
		session_start();
		if(isset($_SESSION['userID']) || !empty($_SESSION['userID'])){
			$user->setFirstName($_SESSION['firstname']);
			
		}

        else{
            $user->setFirstName('Ronald');
        }
		
		return $user;
	}
	
	function getAllAvailableFood($vendorName){
		global $foodDBConnection;
         $this->vendor->vendorName= $vendorName;
		
		if($foodDBConnection){
			$sql = "SELECT * FROM food_menu WHERE status = 'Available'";
			$foodDBConnection->dbQuery($sql);
			
			$foodDBConnection->dbFetch(1);
            $all = $foodDBConnection->getDB_records();
			
            $this->vendor->setVendorFoodBoard($all);

            
            
			return $all;
			
			
		}
	}
	
	function getAllCategories(){
		global $foodDBConnection;
        ;
		if($foodDBConnection){
			$sql = "SELECT DISTINCT type FROM food_menu";
			$foodDBConnection->dbQuery($sql);
			
			$foodDBConnection->dbFetch(1);
			
			
			$allCategories = $foodDBConnection->getDB_records();

             $this->vendor->setCategories($allCategories);
			
			
		}
		
		
	}


    


	
	
	
}














?>