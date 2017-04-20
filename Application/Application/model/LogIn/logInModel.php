<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../database/dbconnection.php');

class LogIn extends dbconnection {
  //function for login
  function verifylogin() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = new dbconnection;

    $sql = "SELECT * FROM useraccount WHERE username = '$username' AND userstatus = 'ACTIVE'";
    $querySql = $login->query($sql);
    $data = $login->fetch();

    if($querySql && password_verify($password, $data["pwd"])){

    }
    else{

    }

  }
}
?>
