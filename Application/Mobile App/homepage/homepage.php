<!DOCTYPE html>
<html>
<head>
  <title>Homepage||Food</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link type="text/css" rel="stylesheet" href="../css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../images/logo.png" type="image/png">
</head>
<body>

  <div id="container">
    <nav class = "transparent">
      <div class="nav-wrapper ">
        <a href="#!" class="center brand-logo"><img class="responsive-img" style ="padding-top:4%; height:45%; width:45%" src="../images/logo.png"> </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="color:#be1e2d; font-size: 2rem;">menu</i></a>
        <ul class="side-nav" id="mobile-demo">
          <li><div class="userView">
            <div class="background">
              <img class="responsive-img" src="../images/bk1.png">
            </div>
            <a href="#!user"><img style="border:0.25rem solid #be1e2d;"class="responsive-img circle" src="../images/admin.jpg"></a>
            <a href="#!name"><span class="text name" style="color:#be1e2d">Kojo Nyamekye Anyinam-Boateng</span></a>
            <a href="#!email"><span class="text email" style="color:#be1e2d">bkojo21@gmail.com</span></a>
          </div></li>
          <li><a style="color: #9d1e2d;" href="homepage.php"><i class="material-icons" style="color: #9d1e2d;">dashboard</i>Dashboard</a></li><li><div class="divider"></div></li>
          <li><a href="#!"><i class="material-icons">redeem</i>Delivery</a></li><li><div class="divider"></div></li>
          <li><a href="#!"><i class="material-icons">receipt</i>Drawer</a></li><li><div class="divider"></div></li>
          <li><a href="#!"><i class="material-icons">credit_card</i>Wallet</a></li><li><div class="divider"></div></li>
          <li><a href="#!"><i class="material-icons">settings</i>Settings</a></li><li><div class="divider"></div></li>
          <li><a href="#!"><i class="material-icons">info</i>About Us</a></li>
          <li><div class="divider"></div></li>

          <li><a id="logOutBtn" href="../index.php" style="background-color:#9d1e2d; color:#ffffff; bottom:0%;"><i class="material-icons" style="color:#ffffff;">lock</i>Log Out</a>
          </li>


        </ul>
      </div>
    </nav>


    <div style="margin-top:5%;" class="col s12">
     <div class="row">
       <a href ="../menu/menu.php">
         <div style ="position: static;"  class="col s12  center ">
          <div class="card">
            <div class="card-content" style ="background-color: #b71c1c">
              <h2 style="color:#ffffff">Akonor</h2>
            </div>
          </div>
        </div>
      </a>
      <a href ="../menu/menu.php">
        <div style ="position: static;"  class="col s12  center ">
          <div class="card">
            <div class="card-content" style ="background-color: #b71c1c">
              <h2 style="color:#ffffff">Big Ben</h2>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>


  <div class="fixed-action-btn">
    <a href="#cartModal" class="btn-floating btn-large #64dd17 light-green accent-4">
      <i class="large material-icons" style="font-size: 2rem;">shopping_basket</i>
    </a>
  </div>
</div>

<!-- Modal Structure -->
<div id="cartModal" class="modal">
  <h4 class="center" style="margin-top: 5%; color: #ffffff;">Cart</h4>
  <div class="modal-content" style="margin-top:-8%;">
    <div class="card-content ">
      <p class="center white" style="margin-top: 5%; color: #9d1e2d;">Akonor</p>
      <table >
        <thead>
          <tr>
            <th data-field="item">Item</th>
            <th data-field="uprice">Unit Price</th>
            <th data-field="qty">Quantity</th>
            <th data-field="sum">Sum</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Jollof</td>
            <td>8.50</td>
            <td>1</td>
            <td>8.50</td>
          </tr>
          <td>Plantain</td>
          <td>1.50</td>
          <td>1</td>
          <td>1.50</td>
        </tr>
        <tr>
          <td>Water</td>
          <td>1.20</td>
          <td>2</td>
          <td>2.40</td>
        </tr>
      </tbody>
    </table>
    <p class="center white" style="margin-top: 5%; color: #9d1e2d;">Big Ben</p>
    <table >
      <thead>
        <tr>
          <th data-field="item">Item</th>
          <th data-field="uprice">Unit Price</th>
          <th data-field="qty">Quantity</th>
          <th data-field="sum">Sum</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>Khebab</td>
          <td>3.50</td>
          <td>2</td>
          <td>7.00</td>
        </tr>
      </tbody>
    </table>
    <h4 style="text-align: right; color: #000000;"><strong>GHS19.40</strong></h4>
    <form id = "checkOutForm" method="POST" action="">
      <div class="center">
        <div class="input-field col s12">
        <button class="waves-effect waves-light btn-large #64dd17 light-green accent-4" type="submit" name="action" style="width: 100%; font-size: 30px;" >Checkout</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
  $(".button-collapse").sideNav();
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
    );

  $(document).ready(function(){
    $('ul.tabs').tabs();
  });

  $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });

  $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.

        console.log(modal, trigger);
      },
      complete: function() { } // Callback for Modal close
    }
    );

  $( document ).ready(function(){});
</script>

</body>
</html>