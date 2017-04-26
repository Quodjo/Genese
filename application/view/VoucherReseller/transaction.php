<!DOCTYPE html>
<html>
<head>
  <title>Transactions||Reseller||Food</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css"  media="screen,projection"/>

  <link type="text/css" rel="stylesheet" href="../../resources/css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../../resources/images/logo.png" type="image/png">
</head>
<body>
  <?php
  // require_once(dirname(__FILE__).'/../../controller/settings/sessionManagement.php');
  // verifyUserlogin();
  require_once('../../controller/VoucherReseller/vrController.php');
  ?>
  <div id="container">
    <div class="card-header" id ="menLog" style=" margin: 0 auto; width: 15%; height: 15%">
      <img class="responsive-img" src="../../resources/images/logo.png">
    </div>

    <div id="pageTitle" >
      <h2><strong>TRANSACTIONS</strong></h2>
    </div>

    <div class="fixed-action-btn horizontal">
     <a href="hompage.php" class="btn-floating btn-large" id = "hbtn">
      <i class="large material-icons" style="font-size: 3rem;">add</i>
    </a>
  </div>

  <ul id="slide-out" class="side-nav">
    <li><a href="transaction.php"><i class="material-icons">store</i></a></li>
    <li><a href="hompage.php"><i class="material-icons">credit_card</i></a></li>
    <li><a href="../LogIn/logout.php" id="logOut" class="center"><i class="material-icons">lock</i></a></li>
  </ul>
  <a href="#slide-out" data-activates="slide-out" class="button-collapse show-on-large" ><i class="material-icons" style="font-size: 3rem;" id ="menuBtn">menu</i></a>

  <div class="row valign-wrapper" id="nameDisplay" style="top:6%;">
<?php userName(); ?>
  </div>



  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
  <script>
// Initialize collapse button
$(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  // $('.collapsible').collapsible();
  $('.button-collapse').sideNav({
      menuWidth: 90, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
    );

  </script>

</body>
</html>
