<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

require_once(dirname(__FILE__).'/../../model/LogIn/logInModel.php');
require_once(dirname(__FILE__).'/../../init.php');
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
    login();
  } else {
    echo "<script type=\"text/javascript\">";
    echo "alert(\"".$alertString."\")";
    echo "</script>";
  }
}

function login(){
  $idNumber = $_POST['idNumber'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user WHERE idNumber = ?";

  $logInModel = new LogIn;
  $params = array($idNumber);

  $data = $logInModel->verifylogin($sql, "i", $params);

  if(!empty($data) && password_verify($password, $data[0][6])){
      session_start();
      $_SESSION['userID'] = $data[0][0];
      $_SESSION['firstname'] = $data[0][1];
      $_SESSION['perID'] = $data[0][8];
      //
      // header('Location: ../index.php');
      //var_dump($data);
      require_once(dirname(__FILE__).'/../settings/sessionManagement.php');

      if($_SESSION['perID']=="1"){

      } else if($_SESSION['perID']=="2"){

      } else if($_SESSION['perID']=="3"){
        header('Location: '.BASEURL.'view/Vendor%20Client/vendor.php');
      } else if($_SESSION['perID']=="4"){
        header('Location: '.BASEURL.'view/VoucherReseller/hompage.php');
      } else if($_SESSION['perID']=="5"){

      } else if($_SESSION['perID']=="6"){
        header('Location: '.BASEURL.'view/UserApplication/mainPage.php');
      }
      //  echo $data[0][2];
      echo '<p>login</p>';
  }
  else{
    echo '<p>Not Login</p>';
  }
}
?>
