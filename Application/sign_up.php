<!DOCTYPE html>
<html>
<head>
  <title>Sign Up||Food</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <link type="text/css" rel="stylesheet" href="css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>

  <img class="responsive-img" src="images/login_background.jpg"> 


  <div class="card bordered z-depth-2 " style="margin-right: 5%; width:35%; float: right;" id="loginCard" >

    <div class="card-header" style=" margin: 0 auto; width: 40%; height: 40%">

      <img class="responsive-img" src="images/logo.png"> 
    </div>

    <div class="card-content ">
      <form id ="signupForm" method="POST" action="">
       <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" autofocus>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s12">
          <input id="id_number" type="text" class="validate" >
          <label for="id_number">ID Number</label>
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
        <button class="waves-effect waves-light btn-large #be1e2d red darken-4" type="submit" name="action" style="width: 100%; font-size: 30px" >Sign Up</button>
      </div>
    </div>
  </form>
</div>
<div class="row">
  <div class="card-action clearfix">
    <div class="center">
      <div class="col s12 text-p">
        <a href="login.php" style="font-size: 12px" >Log In!</a>
      </div>
    </div>
  </div>
</div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>