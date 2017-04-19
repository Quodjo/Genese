<!DOCTYPE html>
<html>
<head>
  <title>Verify Transfer||Reseller||Food</title>

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
  <div id="container">
    <div class="card-header" id ="menLog" style=" margin: 0 auto; width: 15%; height: 15%">

      <img class="responsive-img" src="../../resources/images/logo.png">
    </div>

    <img class="responsive-img" src="../../resources/images/trans.jpg">

    <div class="card bordered z-depth-2 " style="margin-right: 5%; width:40%; float: left;" id="transCard" >

      <div class="card-content ">
        <form id ="indexPage" method="POST" action="">
         <div class="row">
          <a href="transamount.php"><i class="material-icons" style="font-size: 3rem;" id ="backBtn">send</i></a>
          <div class="input-field col s12">
           <h5 class="center">You Are About To Transfer</h5>
         </div>
         <div class="input-field col s12">
           <div class="center">
             <h1 style="margin-top: -6%; font-size: 6rem;"><strong>GHS500</strong></h1>
           </div>
         </div>
         <div class="input-field col s12">
           <h5 class="center" style="margin-top: -12%;">To The Account:</h5>
         </div>
         <div class="input-field col s12">
           <h4 style="margin-top: 2.5%;">Full Name</h4>
           <h5 style="margin-top: -1%;">ID Number</h5>
         </div>
       </div>
       <a href = "transsuccess.php" class="btn-floating btn-large halfway-fab " type="submit" name="action" style="width: 35%; font-size: 30px">PROCEED
       </a>
     </form>
   </div>
 </div>
</div>

<ul id="slide-out" class="side-nav">
  <li><a href="transaction.php"><i class="material-icons">store</i></a></li>
  <li><a href="hompage.php"><i class="material-icons">credit_card</i></a></li>
  <li><a href="#!" id="logOut" class="center"><i class="material-icons">lock</i></a></li>
</ul>

<a href="#slide-out" data-activates="slide-out" class="button-collapse show-on-large" ><i class="material-icons" style="font-size: 3rem;" id ="menuBtn">menu</i></a>

<div class="row valign-wrapper" id="nameDisplay" style="top:6%;">
  <p style="padding-right: 1em ;">Admin Name</p><img class="circle responsive-img" src="../../resources/images/admin.jpg" style="width:8%; height: 8%; border:0.25rem solid #be1e2d;">
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
