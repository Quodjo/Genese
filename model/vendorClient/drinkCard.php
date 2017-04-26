
<?php
require_once('../../model/database/dbconnectionclass.php');

class drinkCard{
public $id;
public $name;
public $price;
public $status;
public $icon;
public $type;


function __construct($id,$name,$price,$status,$icon,$type){
$this->id=$id;
$this->name=$name;
$this->price=$price;
$this->status=$status;
$this->icon=$icon;
$this->type=$type;

}

  

}


?>


