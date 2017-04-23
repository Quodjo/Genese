<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@author Selasi Afi Gborglah
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../../model/VoucherReseller/vrModel.php');
require_once(dirname(__FILE__).'/../../init.php');


if(isset($_POST['idEnter'])){
  proceedToTrans();
}

if(isset($_POST['transBtn'])){
  transAmt();
}

function proceedToTrans(){
  $idNumber = $_POST['idNumber'];

  $sql = "SELECT firstname, lastname FROM user WHERE idNumber = ?";

  $vrModel = new VoucherReseller;
  $params = array($idNumber);

  $data = $vrModel->getUserDetails($sql, "i", $params);

  if(!empty($data)){
     session_start();
     $_SESSION['transName'] = $data[0][0].' '.$data[0][1];
     $_SESSION['transID'] = $idNumber;

      header('Location: '.BASEURL.'view/VoucherReseller/transamount.php');
  }
  else{

  }
}

  function transDetails(){
    session_start();
    echo "<h3 class=\"center\" id=\"transName\"><strong>".$_SESSION['transName']."</strong></h3>";
    echo "<h5 class=\"center\" style=\"margin-top: -5%;\" id=\"transID\">".$_SESSION['transID']."</h5>";
  }

  function verifytransDetails(){
    echo "<h4 style=\"margin-top: 2.5%;\">".$_SESSION['transName']."</h4>";
    echo "<h5 style=\"margin-top: -1%;\">".$_SESSION['transID']."</h5>";
  }

  function transAmt(){
    session_start();
    $_SESSION['transAmt'] = $_POST['transAmt'];
      header('Location: '.BASEURL.'view/VoucherReseller/verifytrans.php');
  }

  function amt(){
    session_start();
    echo "<h1 style=\"margin-top: -6%; font-size: 6rem;\"><strong>GHS".$_SESSION['transAmt']."</strong></h1>";
  }
?>
