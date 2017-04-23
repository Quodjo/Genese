<?php
/*
Order item class
@author: Benedict Quartey
*/

require_once('../Vendor Client/orderItemClass.php');
require_once('../database/dbconnectionclass.php');

//Array to hold collective order objects created from data in database
$orderArray=array();
$kitchenArray=array();

/* These conditions allows multiple ajax calls to be made from front end*/
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    if($action=='kitchen'){
        addToKitchen();
    }

    if($action=='createBtn'){
        export();
    }  

  if($action=='createkitchenCards'){
        kitchenCards();
    }

    if($action=='deleteCard'){
        deleteKitchenCard();
    }
    }

//function to delete delivered cards
    function deleteKitchenCard(){
      //  if($_POST["orderNum"]){
$orderNum=$_POST["orderNum"];

$sql="DELETE FROM in_kitchen Where orderNum=\"$orderNum\" ";

$dbcon4 = new dbconnection;
$exec3 = $dbcon4->query($sql);

$to = "benedict.quartey@ashesi.edu.gh";
$subject = "FOOD PICKUP!";
$txt = "Hi there, your order has been processed. Pass by for pickup.";
$headers = "From: Food@genese.io" ;
"CC: bigben@ashesi.edu.gh";

echo (mail($to,$subject,$txt,$headers));

  //      }
    }

//function to create kitchen card object and json parse to front end from items in kitchen table
    function kitchenCards(){
        $sql="SELECT * FROM in_kitchen ";

$dbcon3 = new dbconnection;
$exec1 = $dbcon3->query($sql);
if($exec1){
    
     while($row=mysqli_fetch_array($dbcon3->dboutcomes)){
        $orderNum= $row['orderNum'];
        $name= $row['username'];
        $foodname=$row['foodname'];
        $drinkname=$row['drinkname'];
      //$foodId=$row['$foodid'];

        $kitchenCard = new kitchenCard($name,$orderNum,$foodname,$drinkname);//,$foodId);
        array_push($GLOBALS['kitchenArray'],$kitchenCard);
     }
    }
else{echo "Error";}

echo json_encode($GLOBALS['kitchenArray']);
    }


//adds order entry to in_kitchen table and deletes entry from menu_order table
function addToKitchen(){

if($_POST["name"])
{
$name = $_POST["name"];
$orderNum=$_POST["orderNum"];
$foodname=$_POST["foodname"];
$drinkname=$_POST["drinkname"];
$foodid=$_POST["foodid"];
$icon;

//echo $foodid;
/*
 $sql = "SELECT  icon FROM food_menu WHERE food_id=\"$foodid\"";
 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array("food_id" => $foodid));
        $stmt->bindColumn(1, $icon, PDO::PARAM_LOB);
 
        $stmt->fetch(PDO::FETCH_BOUND);
 
        return array("food_id" => $icon);








$iconSql = "SELECT icon FROM food_menu WHERE food_id=\"$foodid\"";


$dbcon = new dbconnection;


$iconexec=$dbcon->query($iconSql);
if($iconexec){
    while($row=mysqli_fetch_array($dbcon->dboutcomes)){
        $icon= $row['icon'];}
}
else{echo "Fail";}
*/
$sql="INSERT INTO in_kitchen(orderNum,username,foodname,drinkname) VALUES (\"$orderNum\",\"$name\",\"$foodname\",\"$drinkname\") ";

$dbcon2 = new dbconnection;
$exec = $dbcon2->query($sql);
if($exec){
    
    
    echo"Order sent to Kitchen";}
else{echo "Order declined";}


$sql="DELETE FROM menu_order_table Where menu_order_id=\"$orderNum\" ";

$dbcon4 = new dbconnection;
$exec3 = $dbcon4->query($sql);
if($exec3){
    
    
    echo"Order Deleted";}
else{echo "Declined";}

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


class kitchenCard{
public $name;
public $orderNum;
public $foodname;
public $drinkname;
//public $foodid;


function __construct($name,$orderNum,$foodname,$drinkname){
$this->name=$name;
$this->orderNum=$orderNum;
$this->foodname=$foodname;
$this->drinkname=$drinkname;
//$this->foodid=$foodId;
}

}



?>











