<?php
/*
Order item class
@author: Benedict Quartey
*/
require_once('../database/dbconnectionclass.php');

class orderItem{
public $orderNum; public $userId;
public $foodId; public $drinkID;
public $staffID; public $dbcon;

public $userFname; public $userLname;
public $foodName; public $drinkName;
public $staffFname; public $staffLname;


function __construct($order,$user,$food,$drink,$staff){
$this->orderNum=$order;
$this->userId=$user;
$this->foodId=$food;
$this->drinkId=$drink;
$this->staffId=$staff;
$this->dbcon=new dbconnection;
}



function foodDetails(){
    $sql="SELECT food_name FROM food_menu WHERE food_id = $this->foodId";
    $dbexec = $this->dbcon->query($sql);

    if($dbexec){
      $row = $this->dbcon->fetch();
      $this->foodName=$row['food_name'];
    }

}
/*
Functions
@author: Akosua Adobea Adin-Darko
*/

function drinkDetails(){
      $sql="SELECT drink_name FROM drink_menu WHERE drink_id =  $this->drinkId";
      $dbexec = $this->dbcon->query($sql);

      if($dbexec){
        $row = $this->dbcon->fetch();
        $this->drinkName=$row['drink_name']; 
      }

}

function staffDetails(){
  $sql="SELECT * FROM staff_table WHERE staff_id =  $this->staffId";
  $dbexec = $this->dbcon->query($sql);

  if($dbexec){
    $row = $this->dbcon->fetch();
  $this->staffFname=$row['firstname'];
     $this->staffLname=$row['lastname'];
  }
}

function userDetails(){
  $sql="SELECT * FROM user WHERE user_id =  $this->userId";
  $dbexec = $this->dbcon->query($sql);

  if($dbexec){
    $row = $this->dbcon->fetch();
    $this->userFname=$row['firstname'];
    $this->userLname=$row['lastname'];
  }
}

/*
@author: Benedict export
This function runs all other methods to obtain order details from database
then creates a new fullOrder object and exports it as a json object*/
function exportOrder(){

  //run sql query methods of order object
 $this-> foodDetails();  $this-> drinkDetails(); $this->  userDetails();  $this-> staffDetails();

 $fullorder=new fullOrder($this->orderNum,$this->userFname,$this->userLname,$this->foodName,
 $this->drinkName,$this->staffFname,$this->staffLname);  //create new fullOrder object from retrieved info

 $myJSON = json_encode($fullorder);  //encode fullorder object in json format

  return $myJSON;  //return json object
 

  }

}

/*
Nested class to package full order drinkDetails for json parsing
@author:Benedict Quartey*/
class fullOrder{
public $staffFname; public $staffLname;
public $userFname; public $userLname;
public $foodname; public $drinkname;


function __construct($order,$userF,$userL,$food,$drink,$staffF,$staffL){
$this->orderNum=$order;
$this->userFname=$userF;
$this->userLname=$userL;
$this->foodname=$food;
$this->drinkname=$drink;
$this->staffFname=$staffF;
$this->staffLname=$staffL;
}

}

?>


