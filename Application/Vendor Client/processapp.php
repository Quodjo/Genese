<?php
<<<<<<< HEAD
require_once('../database/dbconnectionclass.php');
$sqlquery= "SELECT total_amount FROM menu_order_table where menu_order_id='34'";
=======
require_once($_SERVER['DOCUMENT_ROOT']."/classproject2017/database/dbconnectionclass.php");
$sqlquery= "SELECT * FROM menu_order_table";
>>>>>>> 0325a4c91c1233f0778f3e60d5ab386d4b555483

//create a new instance of the database class
$verdb = new dbconnection;
$dbexec =   $verdb->query($sqlquery);

if($dbexec){
  $row = $verdb->fetch();
  echo ($row['total_amount']);
}
  else{
    echo "Fail";
  }

?>
