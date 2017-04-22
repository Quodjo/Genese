<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>

	<!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

  <link type="text/css" rel="stylesheet" href="../css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../images/logo.png" type="image/png">

  <!--style to make footer stick to the bottom-->
<style>
 body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

</style>



</head>
<body style="background-image:url(../images/background_Head.jpg); background-repeat: repeat;overflow-y: scroll;
border-bottom: 2.5vh;
	border-style: solid;               /*footer red color*/
	border-bottom-color: #be1e2d;


">
         <div class="row" >
    <div class="col s2" style="margin-top: 0.5%">
    	
 <span >
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
		    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="font-size: 3.7rem;color:white;">menu</i></a>
</span>
		
	<span style="padding-left:9%">
		<img  class="responsive-img" src="../images/whiteLogo.png" style="width:55%;height: 55%">
	</span>

    </div>

    <!-- <div class="col s1" style="border: 1px solid blue"><p>



    </div> -->

    <div align= center class="col s8" style=" font-family: ‘Courier New’, Courier, monospace; padding-top: 1.6% ">

    	<h4 style="color: white">INVENTORY</h4>

    </div>
    <div class="col s2">
    	<div align=right style="color: white">
    	<img class="circle responsive-img" src="../images/admin.jpg" style="width:35%;height: 35%;border: 0.25rem solid #be1e2d;">KOJO DOE
    	</div>
    </div>
</div>


<!-- mid section row -->
<div class="row" >

<!-- tab row -->
    <div class="row" align="center" >

        <ul class="tabs" style="width:50%" >
                <li class="tab col s3"><a class="active" href="#tab1">All</a></li>
                <li class="tab col s3"><a href="#tab2">Available</a></li>

                <li class="tab col s3"><a href="#tab3">Unavailable</a></li>

        </ul>

     </div>

<!-- search bar row -->
 <div class="row" align="center" >
    <nav style="background-color:rgba(110,0,0,0.7);margin-left: 1.5%">
    <form>
                  <div class="input-field">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons" >close</i>
                  </div>
                </form>


    </nav>
    
 </div>


<!-- tab content row -->
 <div class="row" align="center" >
        <div class="col s12 m12 l12" >

          <!-- 
          food availiability cards for tab1-->

      <div id="tab1">
          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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


       <!-- 
          food availiability cards for tab2-->
      <div id="tab2"> 

          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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



          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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


          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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



          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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


          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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


          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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


          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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


          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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



          <div class="col s12 m4 disable">

            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/jollof.jpg" style="width:100%">
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


      <!-- 
          food availiability cards for tab3-->
      <div id="tab3"> 

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


      </div> <!-- end of tab 3 contents -->


        </div> 
     </div> <!-- close of tab content display space div -->

  </div> <!-- close of midsection row -->


<!-- row for footer -->
  <div align=center class="row" style="padding-top: 2%">
  
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