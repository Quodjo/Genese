<?php
require_once('../../model/logIn/logInModel.php');

if(isset($_POST['login'])){
  validlogin();
}

//function to validate login
function validlogin() {
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
    verifylogin();
  } else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"".$alertString."\")";
    echo "</script>";
  }

}
?>
