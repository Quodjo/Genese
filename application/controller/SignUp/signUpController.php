<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/
require_once('../../init.php');
require_once(BASEURL.'model/SignUp/signUpModel.php');

if(isset($_POST['signup'])){
  validRegister();
}

function validRegister() {
  //code for validation
  //if validation is successful run the function to check if username already exist
  $alertString = "";

  $idNumber = $_POST['idNumber'];
  $password = $_POST['password'];
  $cfpassword = $_POST['cfpassword'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];

  $regexNum = '/^\d{8}+$/';
  $regexJustAlpha = '/^[a-zA-Z]+$/';
  $regexPassword = '/^(?=.*\d+)(?=.*[a-zA-Z])[0-9a-zA-Z!@#$%]{6,}$/';
  $regexEmail = '/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/';

  if(empty($idNumber) && !preg_match($regexNum, $idNumber)){
    $alertString .= "Invalid Id Number, ";
  }

  if(empty($password) && !preg_match($regexPassword, $password)){
    $alertString .= "Invalid Password, ";
  }

  if(empty($cfpassword) && $cfpassword != $password){
    $alertString .= "Confirm Password Does Not Match, ";
  }

  if(empty($firstname) && !preg_match($regexJustAlpha, $firstname)){
    $alertString .= "Invalid Firstname, ";
  }
  if(empty($lastname) && !preg_match($regexJustAlpha, $lastname)){
    $alertString .= "Invalid Lastname, ";
  }
  if(empty($email) && !preg_match($regexEmail, $email)){
    $alertString .= "Invalid Email, ";
  }


  if(empty($alertString)){
    registerNewUser();
  } else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"".$alertString."\")";
    echo "</script>";
  }

}


function registerNewUser(){
  $idNumber = $_POST['idNumber'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  //Hashing password
  $password = password_hash($password, PASSWORD_DEFAULT);
  //Preparing Sql Statement
  $signUpModel = new SignUp;

  // $sql = "INSERT INTO user(firstname, lastname, idNumber, email, password, status, role_id)".
  //       "VALUES(?, ?, ?, ?, ?,'active','6')";
  // $params = array($firstname, $lastname, $idNumber, $email, $password);
  // $exec = $signUpModel->signUpUser($sql, "ssiss", $params);

  $sql = "INSERT INTO user(firstname, lastname, idNumber, email, password, status, role_id) VALUES('$firstname', '$lastname', '$idNumber', '$email', '$password', 'active','6')";
  $exec = $signUpModel->insertUser($sql);

  if($exec){
    header('Location: '.BASE.'view/LogIn/');
  }
  else{
    echo "<script type=\"text/javascript\">";
    echo "alert(\"User Not Added\")";
    echo "</script>";
  }
}

?>
