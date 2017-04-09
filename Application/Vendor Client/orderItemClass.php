<?php
/*
Order item class
@author: Benedict Quartey
*/
require_once('../database/dbconnectionclass.php');

class orderItem{
public $orderNum;
public $userId;
public $foodId;
public $drinkID;
public $staffID;
public $dbcon;

// public $userName;
// public $foodName;
// public $drinkName;
// public $staffOnDuty;


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
      echo ($row['food_name']);
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
        echo ($row['drink_name']);
      }

}

function staffDetails(){
  $sql="SELECT * FROM staff_table WHERE staff_id =  $this->staffId";
  $dbexec = $this->dbcon->query($sql);

  if($dbexec){
    $row = $this->dbcon->fetch();
    echo ($row['firstname']);
    echo ($row['lastname']);
  }
}

function userDetails(){
  $sql="SELECT * FROM user WHERE user_id =  $this->userId";
  $dbexec = $this->dbcon->query($sql);

  if($dbexec){
    $row = $this->dbcon->fetch();
    echo ($row['firstname']);
    echo ($row['lastname']);
  }
}

function exportOrder(){}





}










?>
