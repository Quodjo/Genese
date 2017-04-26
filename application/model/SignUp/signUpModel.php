<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../database/dbconnection.php');

class SignUp extends dbconnection {
  //function for login
  function signUpUser($sql, $paramTypes, $params) {

    $exec = $this->preparedSqlStatement($sql, $paramTypes, $params);

    if($exec){
      return true;
    }
    else{
      return false;
    }

    // $sql = "SELECT * FROM user WHERE idNumber = '$id'";
    // $querySql = $signUp->query($sql);
    // $data = $signUp->fetch();
    //
    // session_start();
    // $_SESSION['user_id'] = $data['user_id'];
    // $_SESSION['idNumber'] = $data['idNumber'];
    // $_SESSION['role_id'] = $data['role_id'];

    // header('Location: ../index.php');


  }
}
?>
