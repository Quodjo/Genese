<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@author Selasi Afi Gborglah
*@version 0.0.0.1
**/

require_once('../../init.php');
require_once(BASEURL.'model/VoucherReseller/vrModel.php');

session_start();

if(isset($_POST['idEnter'])){
  proceedToTrans();
}

if(isset($_POST['transBtn'])){
  transAmt();
}

if(isset($_POST['proceedBTN'])){
  verifyTrans();
}

function proceedToTrans(){
  $idNumber = $_POST['idNumber'];

  $sql = "SELECT user_id, firstname, lastname FROM user WHERE idNumber = ?";

  $vrModel = new VoucherReseller;
  $params = array($idNumber);

  $data = $vrModel->getUserDetails($sql, "i", $params);

  if(!empty($data)){
    $_SESSION['transName'] = $data[0][1].' '.$data[0][2];
    $_SESSION['transID'] = $idNumber;
    $_SESSION['userIDTrans'] = $data[0][0];


    header('Location: '.BASE.'view/VoucherReseller/transamount.php');
  }
  else{

  }
}

function transDetails(){
  echo "<h3 class=\"center\" id=\"transName\"><strong>".$_SESSION['transName']."</strong></h3>";
  echo "<h5 class=\"center\" style=\"margin-top: -5%;\" id=\"transID\">".$_SESSION['transID']."</h5>";
}

function verifytransDetails(){
  echo "<h4 style=\"margin-top: 2.5%;\">".$_SESSION['transName']."</h4>";
  echo "<h5 style=\"margin-top: -1%;\">".$_SESSION['transID']."</h5>";
}

function transAmt(){
  $_SESSION['transAmt'] = $_POST['transAmt'];
  header('Location: '.BASE.'view/VoucherReseller/verifytrans.php');
}

function amt(){
  echo "<h1 style=\"margin-top: -6%; font-size: 6rem;\"><strong>GHS".$_SESSION['transAmt']."</strong></h1>";
}

function verifyTrans(){
  $vr = new VoucherReseller;

  $vendorID = $_SESSION['userID'];
  $userID = $_SESSION['userIDTrans'];
  $oldBal = "0";

  $sqlOldBal = "SELECT balance FROM foodPay WHERE user_id = '$userID'";
  $data = $vr->getTransFetch($sqlOldBal);

  if(!empty($data)){
    $oldBal = $data['balance'];
  }

  $amt = $_SESSION['transAmt'];
  $newBal = $oldBal + $amt;

  // $sqlRT = "INSERT INTO resellertransaction(vendor_id, user_id, old_balance, new_balance, amount) VALUES('$vendorID', '$userID', '$oldBal', '$newBal', '$amt')";
  // $execRT = $vr->insertQ($sqlRT);


  $sqlRT = "INSERT INTO resellertransaction(vendor_id, user_id, old_balance, new_balance, amount)".
"VALUES($vendorID, $userID, $oldBal, $newBal, $amt)";

  $paramsRT = array($vendorID, $userID, $oldBal, $newBal, $amt);
  $execRT = $vr->updateAmount($sqlRT, "iiddd", $paramsRT);

  $sqlFoodPay = "UPDATE foodPay SET balance = '$newBal' WHERE user_id = '$userID'";

  $execFP = $vr->insertQ($sqlFoodPay);

  if($execRT && $execFP){
    header('Location: '.BASE.'view/VoucherReseller/transsuccess.php');
  }
  else{

  }
}

function transSuccessDetails() {
  echo  "<div class=\"input-field col s12\">";
  echo    "<div style=\"text-align: center;\">";
  echo      "<h2 style=\"font-size: 4rem; color: #be1e2d;\"><strong>GHS".$_SESSION['transAmt']."</strong><h4 style=\"padding-left: 0.15em;\">transfered to</h4></h2>";
  echo    "</div>";
  echo    "<div class=\"input-field col s12\">";
  echo      "<h3 class = \"center\" style=\"margin-top: 0%; color: #000000;\">".$_SESSION['transName']."</h3>";
  echo      "<h5 class = \"center\" style=\"margin-top: -5%; color: #000000;\">".$_SESSION['transID']."</h5>";
  echo    "</div>";
  echo  "</div>";
}
function userName(){
  echo "<p style=\"padding-right: 1em ;\">".$_SESSION['firstname']."</p><img class=\"circle responsive-img\" src=\"../../resources/images/admin.jpg\" style=\"width:8%; height: 8%; border:0.25rem solid #be1e2d;\">";
}
?>
