<?php
/*
Order item class
@author: Benedict Quartey
*/

require_once('../Vendor Client/orderItemClass.php');
require_once('../database/dbconnectionclass.php');

//Array to hold collective order objects created from data in database
$orderArray=array();

export();
//    initialize();
//  foreach($GLOBALS['orderArray'] as $order){
//     echo $order;
//     echo"<br>";
//     }

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
        array_push($GLOBALS['orderArray'],$order->exportOrder());
     }

    }

   
   
}

 
function export(){
    initialize();
$JSONArray = json_encode($GLOBALS['orderArray']);
//echo $GLOBALS['orderArray'][0];

echo $JSONArray;
 //foreach($GLOBALS['orderArray'] as $order){
 //    echo $order;
//    }


//echo ($JSONArray);
//echo '{ "name":"John", "age":30, "city":"New York"}';
}





?>