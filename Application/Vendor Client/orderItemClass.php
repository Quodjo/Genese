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
}

function foodDetails(){


}

function drinkDetails(){}

function staffDetails(){}

function userDetails(){}

function exportOrder(){}




}










?>