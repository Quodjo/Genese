<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../../model/LogIn/logInModel.php');

if(isset($_POST['login'])){
  validlogin();
}

//function to validate login
function validlogin() {
  $dbconn = new LogIn;
  //code for validation
  //if validation is successful, run the verifylogin function
  $idNumber = $_POST['idNumber'];
  $password = $_POST['password'];
  $alertString = "";

  if(empty($idNumber)){
    $alertString .= "Enter Username, ";
  }

  if(empty($password)){
    $alertString .= "Enter Password, ";
  }

  if(empty($alertString)){
    $dbconn->verifylogin();
  } else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"".$alertString."\")";
    echo "</script>";
  }

}
?>
