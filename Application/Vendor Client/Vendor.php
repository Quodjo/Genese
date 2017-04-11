<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Vendor</title>

	<!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

  <link type="text/css" rel="stylesheet" href="../css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../images/logo.png" type="image/png">




</head>
<body onmouseover=createButtons() style="background-image:url(../images/background_Head.jpg); background-repeat: no-repeat;overflow-y: scroll;
border-bottom: 4.5vh;
	border-style: solid;
	border-bottom-color: #be1e2d;


">
         <div class="row">
    <div class="col s2" style=" margin-top: 0.5%">
    	
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

    <div align= center class="col s8" style="font-family: ‘Courier New’, Courier, monospace; padding-top: 1.6% ">

    	<h4 style="color: white">ORDERS</h4>

    </div>
    <div class="col s2" >
    	<div align=right style="color: white">
    	<img class="circle responsive-img" src="../images/admin.jpg" style="width:35%;height: 35%;border: 0.25rem solid #be1e2d;">KOJO DOE
    	</div>
    </div>
</div>

<div class="row" >
    <div class="col s12 m6 l8" style="padding-top:8%">

 		<div  class="row" align="center" style="border:1px solid red;">
 		<div id="orderContainer">
 		<!--	<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1" >Order #1</button>

				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #2</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #3</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #4</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #5</button>

				
 			<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1" >Order #1</button>

				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #6</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #7</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #8</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #9</button>

				
		
 			<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1" >Order #1</button>

				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #10</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #11</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #12</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #13</button>

				
 			<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1" >Order #14</button>

				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #15</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #16</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #17</button>
				<button id='order1' class="btn waves-effect waves-light " type="button" name="action" style="height:120px;width:160px;background-color:rgba(110,0,0,0.7);" data-target="modal1">Order #18</button>

				-->
 			</div>
 		</div>
     

    </div>
	<!-- 
in kitchen and processed order column -->
    <div class="col s12 m6 l4" >
<div style="padding-right: 35px">
	    <div align="center" class="row" style=" padding-top: 15%;font-family: ‘Courier New’, Courier, monospace;" >

	    	<div class="card grey darken-1" style="height:40px"><span style="color:white" class="card-title">IN KITCHEN</span>

				</div>

			<div class="card blue-grey darken-1" > <!-- optimal card height:550px-->
				            <div class="card-content white-text">
				              <span class="card-title"></span>
				              <p>Processed orders go here<br><br>
				              </p>
	
				            </div>

			 </div>


	    </div>

    </div>

</div>



  </div> 



  <!-- row for footer -->
  <div align=center class="row" style="padding-top: 2.8%">
  
  </div>

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

  <div align=center class="row" style="padding-top: 5%">
    
  </div>





<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="scripts.js"></script>






</body>
</html>