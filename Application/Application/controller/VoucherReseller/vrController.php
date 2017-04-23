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
    session_destroy();
  }
?>
