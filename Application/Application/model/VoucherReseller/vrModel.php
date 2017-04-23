<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@author Selasi Afi Gborglah
*@version 0.0.0.1
**/


require_once(dirname(__FILE__).'/../database/dbconnection.php');

class VoucherReseller extends dbconnection {

  function getUserDetails($sql, $paramTypes, $params){
    $exec = $this->preparedSqlStatementFetch($sql, $paramTypes, $params);
    if($exec){
      return $exec;
    }
    else{
      return false;
    }
  }

  function updateAmount($sql, $paramTypes, $params){
    $exec = $this->preparedSqlStatement($sql, $paramTypes, $params);

    if($exec){
      return true;
    }
    else{
      return false;
    }
  }

  function getTransFetch($sqlOldBal){
    $result = $this->query($sqlOldBal);
    $bal = "0";
    if($result)
    {
    $bal = $this->fetch();

      return $bal;
    }
  }
}
?>
