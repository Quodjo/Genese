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
      <div style ="position: static;"  class="col s12 m4 l4 center ">
        <div class="card">
          <div class="card-content" style ="background-color: #b71c1c">
            <h2 style="color:#ffffff">Akonor</h2>
          </div>
          <div class="card-image fixed-action-btn horizontal">
            <!-- <img src="images/sample-1.jpg"> -->
            <a style=" margin-right:-8.5%; margin-bottom: -7%;" class="btn-floating halfway-fab btn-large click-to-toggle red"><i class="material-icons" style="font-size: 2em;">menu</i></a>
            <ul style=" margin-right:-7%;">
             <li><a href = "#delVendor" class="btn-floating red"><i class="material-icons">delete</i></a></li>
             <li><a href = "#inactiveVendor" class="btn-floating yellow darken-1"><i class="material-icons">not_interested</i></a></li>
             <li><a href = "#editVendor" class="btn-floating green"><i class="material-icons">mode_edit</i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div style ="position: static;"  class="col s12 m4 l4 center ">
        <div class="card">
          <div class="card-content" style ="background-color: #b71c1c">
            <h2 style="color:#ffffff">Big Ben</h2>
          </div>
          <div class="card-image fixed-action-btn horizontal">
            <!-- <img src="images/sample-1.jpg"> -->
            <a style=" margin-right:-8.5%; margin-bottom: -7%;" class="btn-floating halfway-fab btn-large click-to-toggle red"><i class="material-icons" style="font-size: 2em;">menu</i></a>
            <ul style=" margin-right:-7%;">
             <li><a href = "#delVendor" class="btn-floating red"><i class="material-icons">delete</i></a></li>
             <li><a href = "#inactiveVendor" class="btn-floating yellow darken-1"><i class="material-icons">not_interested</i></a></li>
             <li><a href = "#editVendor" class="btn-floating green"><i class="material-icons">mode_edit</i></a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>

   <!-- Modal Structure -->
    <div id="editVendor" class="modal" style="width: 35%; height: auto;">
    <div class="modal-content">
     <form id ="editVendorForm" method="POST" action="">
       <div class="row">
        <div class="input-field col s12">
          <input id="vNameEdit" type="text" class="validate" >
          <label for="vNameEdit">Vendor Name</label>
        </div>
        <div class="input-field col s6">
          <input id="managerNameEdit" type="text" class="validate" >
          <label for="managerNameEdit">Manager's Name</label>
        </div>
        <div class="input-field col s6">
          <input id="managerNumberEdit" type="text" class="validate" >
          <label for="managerNumberEdit">Manager's Number</label>
        </div>
        <div class="input-field col s12">
          <input id="emailEdit" type="email" class="validate">
          <label for="emailEdit">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
         <input id="passwordEdit" type="password" class="validate">
         <label for="passwordEdit">Create Password</label>
       </div>
       <div class="input-field col s6">
         <input id="repasswordEdit" type="password" class="validate">
         <label for="repasswordEdit">Retype Password</label>
       </div>
     </div>
         <div class="center">
      <div class="input-field col s12">
        <button class="waves-effect waves-light btn-large #be1e2d red darken-4" type="submit" name="action" style="width: 100%; font-size: 30px" >Apply Changes</button>
      </div>
    </div>
  </form>
</div>
</div>


   <div id="inactiveVendor" class="modal" style="margin-top:15%; width: 35%; height: auto;">
    <div class="modal-content">
      <h5 class = "center">Are You Sure You Want To Render Vendor Inactive?</h5>
    </div>

    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">No</a>
    </div>
  </div>

  <div id="delVendor" class="modal" style="margin-top:15%; width: 35%; height: auto;">
    <div class="modal-content">
      <h5 class = "center">Are You Sure You Want To Delete Vendor?</h5>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">No</a>
    </div>
  </div>

  <div id="addVendor" class="modal" style="width: 35%; height: auto;">
    <div class="modal-content">
     <form id ="addVendorForm" method="POST" action="">
       <div class="row">
        <div class="input-field col s12">
          <input id="vName" type="text" class="validate" >
          <label for="vName">Vendor Name</label>
        </div>
        <div class="input-field col s6">
          <input id="managerName" type="text" class="validate" >
          <label for="managerName">Manager's Name</label>
        </div>
        <div class="input-field col s6">
          <input id="managerNumber" type="text" class="validate" >
          <label for="managerNumber">Manager's Number</label>
        </div>
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
         <input id="password" type="password" class="validate">
         <label for="password">Create Password</label>
       </div>
       <div class="input-field col s6">
         <input id="password" type="password" class="validate">
         <label for="password">Retype Password</label>
       </div>
     </div>

     <div class="center">
      <div class="input-field col s12">
        <button class="waves-effect waves-light btn-large #be1e2d red darken-4" type="submit" name="action" style="width: 100%; font-size: 30px" >Add Vendor</button>
      </div>
    </div>
  </form>
</div>
</div>

<div class="fixed-action-btn horizontal">
 <a href="#addVendor" class="btn-floating btn-large" id = "hbtn">
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
<script>
  $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        alert("Ready");
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
    }
    );

  </script>

</body>
</html>