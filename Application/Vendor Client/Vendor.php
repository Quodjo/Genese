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

<body>
<!--Container-->
<div id=container>
<!--First Row-->
	<div class="row" style="border:1px solid red">
		<div class="col l0" style="border:1px solid green">
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
		    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="font-size: 3rem;color:black">menu</i></a>
		</div>


		<div class="col l3" style="border:1px solid green">
			<img style=" margin: 0 auto; width: 30%; height: 30%" class="responsive-img" src="../images/logo.png"> 
		</div>

		<div class="col l5" align =center style="border:1px solid yellow;font-family: ‘Courier New’, Courier, monospace; ">
			<h4 >ORDERS</h4>
		</div>

		<div align=right class="col l3" style="border:1px solid yellow"> 
			<img class="circle responsive-img" src="../images/admin.jpg" style="width:12%;height: 12%;border: 0.25rem solid #be1e2d"> Admin
		</div>

	</div>
<!--Second row-->
	<div class="row" style="border:1px solid red">

		<div class="col l8" style="border:1px solid green">
			Order Buttons go here
		</div>


		<div align=center class="col l4" style="border:1px solid yellow; font-family: ‘Courier New’, Courier, monospace;" > 
			<div class="card grey darken-1" style="height:40px"><span style="color:white" class="card-title" >IN KITCHEN</span>
			
			</div>


				<div class="card blue-grey darken-1">
	            <div class="card-content white-text">
	              <span class="card-title"></span>
	              <p>Processed orders go here<br><br>

	              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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

  </script>


<script>
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

  </script>
</div>

	



</body>


</html>