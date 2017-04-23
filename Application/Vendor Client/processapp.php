<?php
/*
Order item class
@author: Benedict Quartey
*/

require_once('../Vendor Client/orderItemClass.php');
require_once('../database/dbconnectionclass.php');

//Array to hold collective order objects created from data in database
$orderArray=array();

/* These conditions allows multiple ajax calls to be made from front end*/
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    if($action=='kitchen'){
        addToKitchen();
    }

    if($action=='createBtn'){
        export();
    }  

    }



function addToKitchen(){

if($_POST["name"])
{
$name = $_POST["name"];
$orderNum=$_POST["orderNum"];
$foodname=$_POST["foodname"];
$drinkname=$_POST["drinkname"];
$foodid=$_POST["foodid"];

echo $foodid;
/*
//get foodicon from food table using foodid

//putting into in_kitchen table of database
    $dbcon = new dbconnection;
    $sql="INSERT INTO in_kitchen(orderNum,username,foodname,drinkname) VALUES (\"$orderNum\",\"$name\",\"$foodname\",\"$drinkname\")" ;  //sql query for insertion
    $dbexec = $dbcon->query($sql);
    if($dbexec){return "success";}
    else{return "failed";}
    */
}
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











