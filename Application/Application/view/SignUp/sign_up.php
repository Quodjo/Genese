<!DOCTYPE html>
<html>
<head>
  <title>Sign Up||Food</title>

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
  require_once('../../controller/SignUp/signUpController.php');
  ?>
  <div id="container">
    <img class="responsive-img" src="../../resources/images/bk1.jpg">

    <div class="card bordered z-depth-2 " style="margin-right: 5%; width:35%; float: right;" id="signupCard" >

      <div class="card-header" style=" margin: 0 auto; margin-top:5%; width: 30%; height: 30%">

        <img class="responsive-img" src="../../resources/images/logo.png">
      </div>

      <div class="card-content ">
        <form id ="signupForm" method="POST">
         <div class="row">
          <div class="input-field col s6">
            <input id="first_name" name="firstname" type="text" class="validate" autofocus>
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" name="lastname" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
          <div class="input-field col s12">
            <input id="id_number" name="idNumber" type="text" class="validate" >
            <label for="id_number">ID Number</label>
          </div>
          <div class="input-field col s12">
            <input id="email" type="email" name="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
           <input id="password" type="password" name="password" class="validate">
           <label for="password">Password</label>
         </div>
         <div class="input-field col s6">
           <input id="cfpassword" type="password" name="cfpassword" class="validate">
           <label for="cfpassword">Confirm Password</label>
         </div>
       </div>
       <div class="center">
        <div class="input-field col s12">
          <button class="waves-effect waves-light btn-large #be1e2d red darken-4" type="submit" name="signup" style="width: 100%; font-size: 30px" >Sign Up</button>
        </div>
      </div>
    </form>
  </div>
  <div class="row">
    <div class="card-action clearfix">
      <div class="center">
        <div class="col s12 text-p">
        <a href="login.php" style="font-size: 1em" >Log In!</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
</body>
</html>
