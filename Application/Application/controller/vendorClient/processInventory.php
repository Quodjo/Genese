<?php 
require_once('../../model/database/dbconnectionclass.php');
require_once('../../model/vendorClient/foodCard.php');
require_once('../../model/vendorClient/drinkCard.php');

$cardArray=array();
$unavailable=array();
$available=array();



/* These conditions allows multiple ajax calls to be made from front end*/
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    if($action=='tab1Cards'){
       exportAll();
    }

    if($action=='tab2Cards'){
        exportAvailable();
    }  

  if($action=='tab3Cards'){
        exportUnavailable();
    }

 if($action=='changeStatus'){
        changeStatus();
    }
   
    }


function changeStatus(){
    $status = $_POST["status"];
    $cardid = $_POST["cardid"];
    $type=$_POST["type"];

    if($status=="Available"){
 if($type=="Drink"){
     
$dbcon3 = new dbconnection;
$value="Unavailable";

$sql3="UPDATE drink_menu SET status=\"$value\" WHERE drink_id=\"$cardid\"" ;

$dbexec3 = $dbcon3->query($sql3);
if($dbexec3){echo "worked";}

 }
 if($type=="Food"){
    
$dbcon3 = new dbconnection;
$value="Unavailable";

$sql3="UPDATE food_menu SET status=\"$value\" WHERE food_id=\"$cardid\"" ;

$dbexec3 = $dbcon3->query($sql3);


 }


    }
     if($status=="Unavailable"){
 if($type=="Drink"){
     
$dbcon3 = new dbconnection;
$value="Available";

$sql3="UPDATE drink_menu SET status=\"$value\" WHERE drink_id=\"$cardid\"" ;

$dbexec3 = $dbcon3->query($sql3);
if($dbexec3){echo "worked";}

 }
 if($type=="Food"){
    
$dbcon3 = new dbconnection;
$value="Available";

$sql3="UPDATE food_menu SET status=\"$value\" WHERE food_id=\"$cardid\"" ;

$dbexec3 = $dbcon3->query($sql3);


 }



     }
}

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
$type=$row['type'];
        $foodcard = new foodCard($foodid,$foodname,$price,$status,$icon,$type);
        if($status=="Available"){
            array_push($GLOBALS['available'],$foodcard);
        }
        if($status=="Unavailable"){
             array_push($GLOBALS['unavailable'],$foodcard);
        }
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
      $type=$row['type'];

        $drinkcard = new drinkCard($drinkid,$drinkname,$price,$status,$icon,$type);
         if($status=="Available"){
            array_push($GLOBALS['available'],$drinkcard);
        }
        if($status=="Unavailable"){
             array_push($GLOBALS['unavailable'],$drinkcard);
        }
        array_push($GLOBALS['cardArray'],$drinkcard);
     } 
}
}


function exportAll(){
    initializeFood();
    initializeDrink();

    $jsonArray = json_encode($GLOBALS['cardArray']);
    echo $jsonArray ;

}


function exportAvailable(){
    initializeFood();
    initializeDrink();

    $jsonArray = json_encode($GLOBALS['available']);
    echo $jsonArray ;

}

function exportUnavailable(){
    initializeFood();
    initializeDrink();

    $jsonArray = json_encode($GLOBALS['unavailable']);
    echo $jsonArray ;

}



?>