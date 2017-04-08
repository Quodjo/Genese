<?php
require_once($_SERVER['DOCUMENT_ROOT']."/classproject2017/database/dbconnectionclass.php");
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
