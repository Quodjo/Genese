<?php 
require_once('../../model/database/dbconnectionclass.php');
require_once('../../model/vendorClient/foodCard.php');
require_once('../../model/vendorClient/drinkCard.php');

$cardArray=array();

export();


function initializeFood(){

    $dbcon = new dbconnection;
$sql="SELECT * FROM food_menu";
$dbexec = $dbcon->query($sql);

if($dbexec){
     while($row=mysqli_fetch_array($dbcon->dboutcomes)){
        $foodid= $row['food_id'];
        $foodname=$row['food_name'];
      $price=$row['price'];
      $status=$row['status'];
      $icon=$row['icon'];

        $foodcard = new foodCard($foodid,$foodname,$price,$status,$icon);
        array_push($GLOBALS['cardArray'],$foodcard);
     }
    }
}


function initializeDrink(){
    
    $dbcon1 = new dbconnection;
$sql="SELECT * FROM drink_menu";
$dbexec = $dbcon1->query($sql);

if($dbexec){
     while($row=mysqli_fetch_array($dbcon1->dboutcomes)){
        $drinkid= $row['drink_id'];
        $drinkname=$row['drink_name'];
      $price=$row['price'];
      $status=$row['status'];
      $icon=$row['icon'];

        $drinkcard = new drinkCard($drinkid,$drinkname,$price,$status,$icon);
        array_push($GLOBALS['cardArray'],$drinkcard);
     } 
}
}


function export(){
    initializeFood();
    initializeDrink();

    $jsonArray = json_encode($GLOBALS['cardArray']);
    echo $jsonArray ;

}





?>