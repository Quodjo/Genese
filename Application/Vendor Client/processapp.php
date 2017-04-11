<?php

require_once('../Vendor Client/orderItemClass.php');
require_once('../database/dbconnectionclass.php');
$orderArray=array();

//$result=json_decode(export());
$result=json_decode(export());
//echo $result;



foreach($result as $order){
    echo($order=new orderItem);
    echo"<br>";
    }


function initialize(){
    $orderNum;
    $userId;
    $foodId;  
    $drinkID;
    $staffID; 
    //$orderArray = array();


$dbcon = new dbconnection;
$sql="SELECT * FROM menu_order_table";
$dbexec = $dbcon->query($sql);

 if($dbexec){
     while($row=mysqli_fetch_array($dbcon->dboutcomes)){
        $orderNum= $row['menu_order_id'];
        $userId= $row['user_id'];
        $foodId=$row['food_id'];
        $drinkId=$row['drink_id'];
        $staffId=$row['staff_id'];

        $order = new orderItem($orderNum,$userId,$foodId,$drinkId,$staffId);
        array_push($GLOBALS['orderArray'],$order);
     }

    }

   // foreach($GLOBALS['orderArray'] as $order){
   // echo($order->exportOrder());
  //  echo"<br>";
  //  }
   
}

 
function export(){
    initialize();
$JSONArray = json_encode($GLOBALS['orderArray']);
//return $JSONArray;

return ($JSONArray);

/*
 foreach($GLOBALS['orderArray'] as $order){
    echo($order->exportOrder());
    echo"<br>";
    }*/

}





?>