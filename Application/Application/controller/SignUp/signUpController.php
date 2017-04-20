<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../../model/SignUp/signUpModel.php');

if(isset($_POST['signup'])){
  validlogin();
}

function validregister() {
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

  if(empty($idNumber) && !preg_match($regexNum, $username)){
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


function registernewuser(){
  $idNumber = $_POST['idNumber'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];

  $password = password_hash($password, PASSWORD_DEFAULT);
  // $sql = "INSERT INTO useraccount(username, pwd, fname, lname, email, gender, major_id, userstatus, per_id) VALUES('$username','$password','$firstname','$lastname','$email','$gender','$major','ACTIVE','1')";
  //
  // $querySql = $register->query($sql);
  // if($querySql){
  //
  // }
  // else{
  //
  // }

  $sql = "INSERT INTO users(firstname, lastname, idNumber, email, password, status, role_id)".
        "VALUES(?, ?, ?, ?, ?,'active','6', now())";



  $realEscape = $register->preparedStatementRegister($username, $password, $firstname, $lastname, $email, $gender, $major);
  if($realEscape){
    echo '<p>User Added.</p>';
  } else {
    echo '<p>User Not Added.</p>';
  }
}

?>
