<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@author Selasi Afi Gborglah
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../../model/VoucherReseller/vrModel.php');

if(isset($_POST['idEnter'])){
  proceedToTrans();
}


function proceedToTrans(){
  $idNumber = $_POST['idNumber'];

  $sql = "SELECT firstname, lastname FROM user WHERE idNumber = '?'";

  $vrModel = new VoucherReseller;
  $params = array($idNumber);

  $exec = $vrModel->getUserDetails($sql, "i", $params);

  if($exec){
    var_dump($exec);
  }
  else{
    var_dump($exec);
  }
}
?>
