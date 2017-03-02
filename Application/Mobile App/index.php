<!DOCTYPE html>
<html>
<head>
	<title>Log In||Food</title>

	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<link type="text/css" rel="stylesheet" href="css/style.css"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
	<div id="container">
		<div style="right: 0%; left:0%; width:100%; height: auto;"  id="loginCard" >
			<div class="card-header" style=" margin: 0 auto; width: 60%; height: 60%">
				<img class="responsive-img" src="images/logo.png"> 
			</div>
			<div class="card-content ">
				<form id = "loginFrom" method="POST" action="homepage/homepage.php">
					<div class="input-field col s12">
						<input id="id_number" type="text" class="validate" autofocus>
						<label for="id_number">ID Number</label>
					</div>
					<div class="input-field col s12">
						<input id="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
					<div class="input-field col s12 ">
						<input type="checkbox" class="filled-in" id="filled-in-box" style="background-color:#be1e2d"/>
						<label for="filled-in-box">Remember me</label>
					</div>
					<div class="center">
						<div class="input-field col s12">
						</br>
						<button class="waves-effect waves-light btn-large #be1e2d red darken-4" type="submit" name="action" style="width: 100%; font-size: 30px" >Log In</button>
					</div>
				</div>
			</form>
		</div>
		<div class="card-action clearfix" style="margin-top:5%;" >
			<div class="row">
				<div class="col s6 text-p">
					<a href="#forgotPasswordModal" style="font-size: 1.2rem; color: #e65100;" >Forgot Password?</a>
				</div>
				<div class="col s6 right-align text-p">
					<a href="signUp.php" style="font-size: 1.2rem; color: #e65100;">Sign Up!</a>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Modal Structure -->
	<div id="forgotPasswordModal" class="modal">
		<h4>Forgot Password</h4>
		<div class="modal-content">
			<div class="card-content ">
				<form id = "loginFrom" method="POST" action="">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate">
						<label for="email">Email</label>
					</div>
					<div class="center">
						<div class="input-field col s12">
						</br>
						<button class="waves-effect waves-light btn-large #be1e2d red darken-4" type="submit" name="action" style="width: 100%; font-size: 30px" >Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>  
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


</script>
</body>
</html>