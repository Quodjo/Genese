<?php 

class foodCard{
public $foodid;
public $foodname;
public $price;
public $status;
public $icon;


function __construct($foodid){

$this->foodid=$foodid;
$this->dbcon=new dbconnection;
foodDetails();
    }

  function foodDetails(){
    $sql="SELECT * FROM food_menu WHERE food_id = $this->foodid";
    $dbexec = $this->dbcon->query($sql);

    if($dbexec){
      $row = $this->dbcon->fetch();
      $this->foodname=$row['food_name'];
      $this->price=$row['price'];
      $this->status=$row['status'];
      $this->icon=$row['icon'];
    }
}


}

?>