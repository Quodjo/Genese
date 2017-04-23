<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../database/dbconnection.php');

class LogIn extends dbconnection {
  //function for login
  function verifylogin($sql, $paramTypes, $params) {

    $exec = $this->preparedSqlStatementFetch($sql, $paramTypes, $params);
    if(!empty($exec)){
      return $exec;
    }
    else{
      return false;
    }

  }
}
?>
