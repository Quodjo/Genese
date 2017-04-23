
<?php
require_once('../../model/database/dbconnectionclass.php');

class drinkCard{
public $id;
public $name;
public $price;
public $status;
public $icon;


function __construct($id,$name,$price,$status,$icon){
$this->id=$id;
$this->name=$name;
$this->price=$price;
$this->status=$status;
$this->icon=$icon;

}

  

}


?>


