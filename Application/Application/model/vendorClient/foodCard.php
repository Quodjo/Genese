<?php 
require_once('../../model/database/dbconnectionclass.php');

class foodCard{
public $id;
public $name;
public $price;
public $status;
public $icon;


function __construct($foodid,$foodname,$price,$status,$icon){
$this->id=$foodid;
$this->name=$foodname;
$this->price=$price;
$this->status=$status;
$this->icon=$icon;
    }



}

?>