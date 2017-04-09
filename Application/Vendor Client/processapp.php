<?php

require_once('../Vendor Client/orderItemClass.php');
// $sqlquery= "SELECT total_amount FROM menu_order_table where menu_order_id='34'";
//
//
// //create a new instance of the database class
// $verdb = new dbconnection;
// $dbexec =   $verdb->query($sqlquery);
//
// if($dbexec){
//   $row = $verdb->fetch();
//   echo ($row['total_amount']);
// }
//   else{
//     echo "Fail";
//   }





$order = new orderItem("3","4","5","6","7");
$order->foodDetails();
$order->staffDetails();
$order->userDetails();
$order->drinkDetails();

?>
