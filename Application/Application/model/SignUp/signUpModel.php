<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../database/dbconnection.php');

class SignUp extends dbconnection {
  //function for login
  function signUpUser() {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $signUp = new dbconnection;

    $stmt = $conn->prepare("INSERT INTO user(firstname, lastname, idNumber, email, password, status, role_id) VALUES(?, ?, ?, ?, 'n/a', ?, 'active','6')");
    $stmt->bind_param("sssss", $fname, $lname, $idNum, $e_mail, $pass);

    // set parameters and execute
    $fname = $firstname;
    $lname = $lastname;
    $idNum = $id;
    $e_mail = $email;
    $pass = $password;

    if($stmt->execute()){
      $stmt->close();
      $conn->close();
      
      $sql = "SELECT * FROM user WHERE idNumber = '$id'";
      $querySql = $signUp->query($sql);
      $data = $signUp->fetch();

      session_start();
      $_SESSION['user_id'] = $data['user_id'];
      $_SESSION['firstname'] = $data['firstname'];
      $_SESSION['role_id'] = $data['role_id'];

      // header('Location: ../index.php');
      echo "registered";
      return true;
    } else {
      $stmt->close();
      $conn->close();
      return false;
    }



    if($querySql && password_verify($password, $data["pwd"])){

    }
    else{

    }
  }
}
?>
