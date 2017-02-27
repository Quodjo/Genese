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

  <link rel="icon" href="../images/whiteLogo.png" type="image/png">



</head>


<body style="background-image:url(../images/background_Head.jpg)">
<!--Container-->
<div id=container>

<!--First Row-->
	<div class="row" >
		<div class="col l0">

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
			<h4 style="color: white">ORDERS</h4>
		</div>

		<div align=right class="col l3" style="padding-top: 1% ">
			<img class="circle responsive-img" src="../images/admin.jpg" style="width:15%;height: 15%;border: 0.25rem solid #be1e2d;"> <h6 style="color:white;">Kojo Doe</h6>
		</div>

	</div>

<!--Second row-->
	<div class="row" style="height:80%;padding-top: 3%">
<!-- First Column -->
		<div class="col l9" style="height:680px">

<!--modal to create the pop ups-->
				<div align=center id="modal1" class="modal">
					<div class="modal-content">
						<h4 style="font-size:350%;"><  #BB-ORDER NO.</h4><br>
            <div class="divider red darken-4" style="height:10px"></div>
						<p1 style ="font-size:170%">20202018:John Doe </p1><br>
            <div class="divider"></div>

            <div class="divider"></div>
            <div class="grey">
            <p2 style ="font-size:180%">Jollof + Fish  1/2P</p2><br><br>
          </div>
              <div class="divider grey lighten-5" style="height:8px" ></div>
            <div class="grey">
            <p3>Khebab Sausage style  2</p3><br>
            <p4>Vita Milk  2</p4><br>
            <p5>Bottled Water  2</p5><br>
            </div>
					</div>
					<div class="modal-footer">
						<a href="#!" class=" modal-action modal-close orange waves-effect waves- btn-flat ">Add to Kitchen</a>

					</div>
				</div>





			<div class="row" style="height:80%;padding-top: 17%">
				<div class="center-align" style="padding-top: 10px">

				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1" >Order #1</button>

				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #2</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #3</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #4</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #5</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #6</button>
				</div>

			     <div class="center-align" style="padding-top: 10px">


			     <button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #7</button>
			     <button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #8</button>
			     <button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #9</button>
			     <button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #10</button>
			     <button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #11</button>
			     <button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #12</button>

			      </div>




			</div>



		</div>


		<div align=center class="col l3" style=" font-family: ‘Courier New’, Courier, monospace;width:25%" >
			<div class="card grey darken-1" style="height:40px"><span style="color:white" class="card-title" >IN KITCHEN</span>

			</div>


				<div class="card blue-grey darken-1" style="height:600px">
	            <div class="card-content white-text">
	              <span class="card-title"></span>
	              <p>Processed orders go here<br><br>
	              </p>

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


  $('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
      	//alert("MOVES TO KITCHEN");
      	//console.log(modal, trigger);
      },
      complete: function() { alert('ORDER MOVES TO KITCHEN'); } // Callback for Modal close
  }
  );




</script>








</body>


</html>
