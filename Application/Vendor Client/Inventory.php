<!DOCTYPE HTML>
<html>
<head>

	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

	<link type="text/css" rel="stylesheet" href="../css/style.css"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="icon" href="../images/logo.png" type="image/png">



</head>


<body style="background-image:url(../images/background_Head.jpg);background-repeat: no-repeat;">
	<!--Container-->
	<div id="container" style="overflow-y: scroll;">
		<!--First Row-->
		<div class="row" >
			<div class="col l0" >

				<ul id="slide-out" class="side-nav">
					<li><div class="userView">
						<div class="background">
							<div class="card-panel" style="background: rgba(100, 0, 0, 0.7);height:100%"></div>
						</div>
						<a href="#!user"><img class="circle" src="../images/admin.jpg"></a>
						<a href="#!name"><span class="white-text name">John Doe</span></a>
						<a href="#!email"><span class="white-text email">john doe@gmail.com</span></a>
					</div></li>
					<br><br><br><br><br><br><br><br><br>
					<br>

					<li><a href="Vendor.php"><i class="material-icons" style="font-size: 4rem; padding-left: 35%">toll</i><br><h6 align =center>Orders</h3></a></li><br>
					<li><div class="divider"></div></li>
					<li><a href="Inventory.php"><i class="material-icons" style="font-size: 4rem;padding-left: 35%">view_module</i> <br><h6 align =center>Inventory</h3></a></li>

				</ul>
				<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="font-size: 3rem;color:white; padding-top: 50%">menu</i></a>
			</div>

			<div class="col l3" style="margin-top:1%%">
				<img style=" margin: 0 auto; width: 30%; height: 30%;" class="responsive-img" src="../images/whiteLogo.png">
			</div>

			<div class="col l5" align =center style="font-family: ‘Courier New’, Courier, monospace; padding-top: 2.5% ">
				<h4 style="color: white">INVENTORY</h4>
			</div>

			<div align=right class="col l3" style="padding-top: 1% ">
				<img class="circle responsive-img" src="../images/admin.jpg" style="width:15%;height: 15%;border: 0.25rem solid #be1e2d;"> <h6 style="color:white;">Kojo Doe</h6>
			</div>

		</div>


		<!--Second row-->
		<div class="row" align=center class="valign-wrapper" >
			<div class="valign" style="width:100%;">
				<div class="container">

					<div class="col s12 m6 offset-m3">


						<div class="col" >


							<ul class="tabs" style="width:560px" >
								<li class="tab col s3"><a class="active" href="#test1">All</a></li>
								<li class="tab col s3"><a href="#test2">Available</a></li>

								<li class="tab col s3"><a href="#test3">Unavailable</a></li>

							</ul>




						</div>



					</div>
				</div>
			</div>



		</div>

		<!--Third row-->
		<div class="row" class="valign-wrapper">

			<div class="valign">
				<div class="container">

					<div class="col s12 m6 offset-m3">


						<nav style="background-color:rgba(110,0,0,0.7);margin-left: 1.5%" >
							<div class="nav-wrapper">
								<form>
									<div class="input-field">
										<input id="search" type="search" required>
										<label class="label-icon" for="search"><i class="material-icons">search</i></label>
										<i class="material-icons" >close</i>
									</div>
								</form>
							</div>
						</nav>





					</div>
				</div>
			</div>



			

		</div>		

		<!--Fourth row-->
		<div class="row" style="padding-top: 2%">

			<div id="test1" class="col s12">

				<div class="center-align" style="padding-top: 10px">

					<div class="col s12 m4 disable">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Jollof</h5>
								</div>
								<div onclick="textChange2()" id="backColor2" class="card-action waves-effect waves-green" style="background-color:rgba(0,110,0,0.7);">
									<a id="avail" href="#" style="color:white">Available</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>

					<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<h5>Jollof</h5>
								</div>
								<div onclick="textChange2()" id="backColor2" class="card-action waves-effect waves-green" style="background-color:rgba(0,110,0,0.7);">
									<a id="avail" href="#" style="color:white">Available</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>














				</div>

		<div id="test2" class="col s12 ">
					<div class="center-align" style="padding-top: 10px">

										<div class="col s12 m4 disable">

											<div class="card horizontal">
												<div class="card-image">
													<img src="../images/jollof.jpg">
												</div>
												<div class="card-stacked">
													<div class="card-content">
														<h5>Jollof</h5>
													</div>
													<div onclick="textChange2()" id="backColor2" class="card-action waves-effect waves-green" style="background-color:rgba(0,110,0,0.7);">
														<a id="avail" href="#" style="color:white">Available</a>
													</div>
												</div>
											</div>
										</div>
					</div>
				
				<div class="center-align" style="padding-top: 10px">

										<div class="col s12 m4 disable">

											<div class="card horizontal">
												<div class="card-image">
													<img src="../images/jollof.jpg">
												</div>
												<div class="card-stacked">
													<div class="card-content">
														<h5>Jollof</h5>
													</div>
													<div onclick="textChange2()" id="backColor2" class="card-action waves-effect waves-green" style="background-color:rgba(0,110,0,0.7);">
														<a id="avail" href="#" style="color:white">Available</a>
													</div>
												</div>
											</div>
										</div>
					</div>
					<div class="center-align" style="padding-top: 10px">

										<div class="col s12 m4 disable">

											<div class="card horizontal">
												<div class="card-image">
													<img src="../images/jollof.jpg">
												</div>
												<div class="card-stacked">
													<div class="card-content">
														<h5>Jollof</h5>
													</div>
													<div onclick="textChange2()" id="backColor2" class="card-action waves-effect waves-green" style="background-color:rgba(0,110,0,0.7);">
														<a id="avail" href="#" style="color:white">Available</a>
													</div>
												</div>
											</div>
										</div>
					</div>
					<div class="center-align" style="padding-top: 10px">

										<div class="col s12 m4 disable">

											<div class="card horizontal">
												<div class="card-image">
													<img src="../images/jollof.jpg">
												</div>
												<div class="card-stacked">
													<div class="card-content">
														<h5>Jollof</h5>
													</div>
													<div onclick="textChange2()" id="backColor2" class="card-action waves-effect waves-green" style="background-color:rgba(0,110,0,0.7);">
														<a id="avail" href="#" style="color:white">Available</a>
													</div>
												</div>
											</div>
										</div>
					</div>
					<div class="center-align" style="padding-top: 10px">

										<div class="col s12 m4 disable">

											<div class="card horizontal">
												<div class="card-image">
													<img src="../images/jollof.jpg">
												</div>
												<div class="card-stacked">
													<div class="card-content">
														<h5>Jollof</h5>
													</div>
													<div onclick="textChange2()" id="backColor2" class="card-action waves-effect waves-green" style="background-color:rgba(0,110,0,0.7);">
														<a id="avail" href="#" style="color:white">Available</a>
													</div>
												</div>
											</div>
										</div>
					</div>
					<div class="center-align" style="padding-top: 10px">

										<div class="col s12 m4 disable">

											<div class="card horizontal">
												<div class="card-image">
													<img src="../images/jollof.jpg">
												</div>
												<div class="card-stacked">
													<div class="card-content">
														<h5>Jollof</h5>
													</div>
													<div onclick="textChange2()" id="backColor2" class="card-action waves-effect waves-green" style="background-color:rgba(0,110,0,0.7);">
														<a id="avail" href="#" style="color:white">Available</a>
													</div>
												</div>
											</div>
										</div>
					</div>






		</div>


			<div id="test3" class="col s12">

			<div class="center-align" style="padding-top: 10px">

										
					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>
					</div>

					<div class="center-align" style="padding-top: 10px">

										
					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>
					</div>

					<div class="center-align" style="padding-top: 10px">

										
					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>
					</div>

					<div class="center-align" style="padding-top: 10px">

										
					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>
					</div>

					<div class="center-align" style="padding-top: 10px">

										
					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>
					</div>

					<div class="col s12 m4">

						<div class="card horizontal">
							<div class="card-image">
								<img src="../images/jollof.jpg">
							</div>
							<div class="card-stacked">
								<div align=center class="card-content">
									<p>Jollof</p>
								</div>
								<div onclick="textChange()" class=" card-action waves-effect waves-red" id ="backColor" style="background-color:rgba(110,0,0,0.7);">
									<a href="#" id="unavail" style="color:white">Unavailable</a>
								</div>
							</div>
						</div>
					</div>
					</div>









			</div>


			</div>
			
		



		</div>





	</div>
	




	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>

	<script>
// Initialize collapse button
$(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  // $('.collapsible').collapsible();
  $('.button-collapse').sideNav({
      menuWidth: 90, // Default is 300
      edge: 'left', // Choose the horizontal origin
     closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
  }
  ); 

  
// Initialize collapse button
$(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  // $('.collapsible').collapsible();
  $('.button-collapse').sideNav({
      menuWidth: 290, // Default is 300
      edge: 'left', // Choose the horizontal origin
     closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
  }
  ); 

  $(document).ready(function() {
  	$("#order2, #order1").on('click', function() {
  		$(this).removeClass("waves-effect waves-light submit").addClass('disabled');
  	});
  });

  function textChange(){
  	var notAvailable = document.getElementById("unavail");
  	var backgrndColor = document.getElementById("backColor");

  	if(notAvailable.innerHTML == "Available"){
  		notAvailable.innerHTML= "Unvailable";
  		backgrndColor.style.backgroundColor = "rgba(110,0,0,0.7)";

  	} else {
  		notAvailable.innerHTML= "Available";
  		backgrndColor.style.backgroundColor = "rgba(0,110,0,0.7)";
  	}
  }


function textChange2(){
  	var notAvailable = document.getElementById("avail");
  	var backgrndColor = document.getElementById("backColor2");

  	if(notAvailable.innerHTML == "Available"){
  		notAvailable.innerHTML= "Unvailable";
  		backgrndColor.style.backgroundColor = "rgba(110,0,0,0.7)";

  	} else {
  		notAvailable.innerHTML= "Available";
  		backgrndColor.style.backgroundColor = "rgba(0,110,0,0.7)";
  	}
  }


</script>







</body>


</html>