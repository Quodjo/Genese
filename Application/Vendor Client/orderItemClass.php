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

public $userName;
public $foodName;
public $drinkName;
public $staffOnDuty;


function __construct($order,$user,$food,$drink,$staff){
$this->$orderNum=$order;
$this->$userId=$user;
$this->$foodId=$food;
$this->$drinkId=$drink;
$this->$staffId=$staff;
$this->$dbcon=new dbconnection;
}

function foodDetails(){
    $sql="SELECT food_name FROM food_menu WHERE food_id = $foodId";
    $dbexec = $dbcon->query($sql);

}

function drinkDetails(){}

function staffDetails(){}

function userDetails(){}

function exportOrder(){}




}










?>