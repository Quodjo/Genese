<?php


class drinkCard{
public $drinkid;
public $drinkname;
public $price;
public $status;
public $icon;


function __construct($drinkid){
$this->drinkid=$drinkid;
drinkDetails();

}

  function drinkDetails(){
    $sql="SELECT * FROM drink_menu WHERE drink_id = $this->drinkid";
    $dbexec = $this->dbcon->query($sql);

    if($dbexec){
      $row = $this->dbcon->fetch();
      $this->drinkname=$row['drink_name'];
      $this->price=$row['price'];
      $this->status=$row['status'];
      $this->icon=$row['icon'];
    }
}

}

?>


