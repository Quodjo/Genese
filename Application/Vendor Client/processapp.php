<?php
$sqlquery= "SELECT * FROM menu_order_table WHERE total_amount = 20.00"

//create a new instance of the database class
$verdb = new dbconnection;
$dbexec =   $verdb->query($sqlsquery);

if($dbexec){
  $row = $verdb->fetch();
  echo "SUCCESS!"
?>
