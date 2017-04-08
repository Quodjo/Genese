<?php
require_once('../database/dbconnectionclass.php');
$sqlquery= "SELECT * FROM menu_order_table";

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


