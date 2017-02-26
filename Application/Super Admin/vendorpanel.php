<!DOCTYPE html>
<html>
<head>
  <title>Vendor||SuperAdmin||Food</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

  <link type="text/css" rel="stylesheet" href="../css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../images/logo.png" type="image/png">
</head>
<body>

  <div id="spAdminContainer">


    <div class="navbar-fixed">
      <nav class="white">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo right"><img  style=" float:right; margin-top :.75%; margin-right :1%; width: 10%; height: 10%;" src="../images/logo.png"></a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
          <a style="color:#be1e2d;">Super Admin Panel</a>
          </ul>
        </div>
      </nav>
    </div>
    

    <div class="row" style="margin-top: 2%;" >
      <div class="col s12 m4 l4 center">
        <div class="card">
          <div class="card-content" style ="background-color: #b71c1c">
            <h2 style="color:#ffffff">Akonor</h2>
          </div>
          <div class="card-image">
            <a class="btn-floating halfway-fab btn-large click-to-toggle red"><i class="material-icons" style="font-size: 2em;">menu</i></a>
          </div>
        </div>
      </div>
      <div class="col s12 m4 l4 center">
        <div class="card">
          <div class="card-content" style ="background-color: #b71c1c">
            <h2 style="color:#ffffff">Big Ben</h2>
          </div>
          <div class="card-image">
            <!-- <img src="images/sample-1.jpg"> -->
            <a class="btn-floating halfway-fab btn-large click-to-toggle red"><i class="material-icons" style="font-size: 2em;">menu</i></a>
          </div>
        </div>
      </div>

    </div>

    <div class="fixed-action-btn horizontal">
     <a href="#" class="btn-floating btn-large" id = "hbtn">
      <i class="large material-icons" style="font-size: 3rem;">add</i>
    </a>
  </div>

</div>

<ul class="side-nav fixed ">
  <li><div class="userView">
    <div class="background">
      <img style="width: 30vw; height: 30vh;" src="../images/sidImage.jpeg">
    </div>
    <a href="#!user"><img class="circle" src="../images/admin.jpg"></a>
    <a href="#!name"><span class="white-text name">Admin Name</span></a>
    <a href="#!email"><span class="white-text email">aname@food.com</span></a>
  </div ></li>
  <li><a href="superadmin.php" style="color:#be1e2d;"><i class="material-icons" style="color:#be1e2d;">dashboard</i>Dashboard</a></li>
  <li><div class="divider"></div></li>
  <li class="active"><a href="vendorpanel.php" style="color:#be1e2d;"><i class="material-icons" style="color:#be1e2d;">payment</i>Vendors</a></li>
  <li><div class="divider"></div></li>
  <li><a href="reseller.php" style="color:#be1e2d;"><i class="material-icons" style="color:#be1e2d;">payment</i >Voucher Resellers</a></li>

  <div id="logBTN">
    <li><div class="divider"></div></li>
    <li><a href="#!" style="background-color:#9d1e2d; color:#ffffff;"><i class="material-icons" style="color:#ffffff;">lock</i>Log Out</a></li>

  </div>
</ul>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>


</body>
</html>