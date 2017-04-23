<?php
/**
*@author Kojo Nyamekye Anyinam-Boateng
*@version 0.0.0.1
**/

session_start();

function verifyUserlogin(){
  //Check For Logiin And Permission
  if(isset($_SESSION['userID']) && !empty($_SESSION['userID'])){
    //Valid
    //Check For User Permission
    getView();
  } else{

    //No Valid
    header('Location: ../../view/login/');
  }
}

//get user specific header
function getView(){
  if($_SESSION['perID']=="1"){

  } else if($_SESSION['perID']=="2"){

  } else if($_SESSION['perID']=="3"){

  } else if($_SESSION['perID']=="4"){
    require_once(dirname(__FILE__).'/../../view/VoucherReseller/hompage.php');
  } else if($_SESSION['perID']=="5"){

  } else if($_SESSION['perID']=="6"){

  }

}
//Get Current Page
//Get Previous Page
//OB Start For Header
?>
