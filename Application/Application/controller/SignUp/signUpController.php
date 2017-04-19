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

  $username = $_POST['username'];
  $password = $_POST['password'];
  $cfpassword = $_POST['cfpassword'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
  };

  $email = $_POST['email'];

  if(isset($_POST['major'])){
    $major = $_POST['major'];
  } else{
    $major = 0;
  };


  $regexJustAlpha = '/^[a-zA-Z]+$/';
  $regexPassword = '/^(?=.*\d+)(?=.*[a-zA-Z])[0-9a-zA-Z!@#$%]{6,}$/';
  $regexEmail = '/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/';

  if(empty($username) && !preg_match($regexJustAlpha, $username)){
    $alertString .= "Invalid Username, ";
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
  if(empty($gender)){
    $alertString .= "Kindly Select Gender, ";
  }
  if(empty($email) && !preg_match($regexEmail, $email)){
    $alertString .= "Invalid Email, ";
  }
  if($major == 0){
    $alertString .= "Select A Major, ";
  }

  if(empty($alertString)){
    checkusername();
  } else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"".$alertString."\")";
    echo "</script>";
  }

}


//function to check if username already taken
function checkusername() {
  $username = $_POST['username'];
  //code to check if username already exist
  //if username does not exist run the register function
  $dbconnInstance = new dbconnection;

  $sql = "SELECT * FROM useraccount WHERE username = '$username'";
  $querySql = $dbconnInstance->query($sql);

  if($querySql){
    registernewuser();
  }
}


function registernewuser(){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $major = $_POST['major'];

  $register = new dbconnection;

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

  $realEscape = $register->preparedStatementRegister($username, $password, $firstname, $lastname, $email, $gender, $major);
  if($realEscape){
    echo '<p>User Added.</p>';
  } else {
    echo '<p>User Not Added.</p>';
  }
}

?>
