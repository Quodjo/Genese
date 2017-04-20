<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@author Selasi Afi Gborglah
*@version 0.0.0.1
**/


require_once(dirname(__FILE__).'/../database/dbconnection.php');

class VoucherReseller extends dbconnection {

  function getUserDetails($sql, $paramTypes, $params){
    $exec = $this->preparedSqlStatement($sql, $paramTypes, $params);
    $res = $this->dboutcomes;
    if($exec){
      return $res;
    }
    else{
      return $res;
    }
  }

  function updateAmount(){

  }

  function getTransactions(){

  }
}
?>
