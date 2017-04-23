<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Vendor</title>

	<!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css"  media="screen,projection"/>

  <link type="text/css" rel="stylesheet" href="../../resources/css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../../resources/images/logo.png" type="image/png">

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
<body  style="background-image:url(../../resources/images/background_Head.jpg); background-repeat: repeat;overflow-y: scroll;
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
		        <a href="#!user"><img class="circle" src="../../resources/images/admin.jpg"></a>
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
		<img  class="responsive-img" src="../../resources/images/whiteLogo.png" style="width:55%;height: 55%">
	</span>

    </div>

    <!-- <div class="col s1" style="border: 1px solid blue"><p>



    </div> -->

    <div align= center class="col s8" style="font-family: ‘Courier New’, Courier, monospace; padding-top: 1.6% ">

    	<h4 style="color: white">ORDERS</h4>

    </div>
    <div class="col s2" >
    	<div align=right style="color: white">
    	<img class="circle responsive-img" src="../../resources/images/admin.jpg" style="width:35%;height: 35%;border: 0.25rem solid #be1e2d;">KOJO DOE
    	</div>
    </div>
</div>

<div class="row" >
    <div class="col s12 m6 l8" style="padding-top:8%">

 		<div  class="row" align="center" >
 		<div id="orderContainer">
 		
 			</div>
 		</div>
     

    </div>
	<!-- 
in kitchen and processed order column -->
    <div class="col s12 m6 l4" >
<div style="padding-right: 35px">
	    <div align="center" class="row" style=" padding-top: 10%;font-family: ‘Courier New’, Courier, monospace;" >

	    	<div class="card grey darken-1" style="height:40px"><span style="color:white" class="card-title">IN KITCHEN</span>

				</div>

			<div class="card blue-grey darken-1" > <!-- optimal card height:550px-->
				            <div class="card-content white-text">
				              
				              <p>Processed orders go here<br><br>
				              </p>
							  <div id="kitchen">
							  
	
				            </div>

			 </div>


	    </div>

    </div>

</div>



  </div> 



  <!-- row for footer -->
  <div align=center class="row" style="padding-top: 2.8%">
  
  </div>

<div id="modalcontainer"></div>
<!--modal to create the pop ups-->
				<div align=center id="modal1" class="modal" style="width:480px">
					<div class="modal-content">
					<div style="border:solid grey 3px">
						<h4 id="ordernum" style="font-size:350%;"><  #BB-ORDER NO.</h4><br>
         <div class="divider red darken-4" style="height:5px"></div>
						<p1 id="username"style ="font-size:170%;color:red">20202018:John Doe </p1><br>
						</div>


		  <div><p1 id="username"style ="font-size:170%">Food</p1></div>
            <div class="grey">
            <p2 style ="font-size:180%" id="foodid">Jollof + Fish  1/2P</p2><br><br>
          </div>
		  <p1 id="username"style ="font-size:170%">Drinks</p1>
		  <div class="divider red darken-4" style="height:5px"></div>
              <div class="divider grey lighten-5" style="height:8px" ></div>
            <div class="grey" >
            <pre id="drinkid" style ="font-size:150%">Khebab Sausage style  2
            Vita Milk  2
            Bottled Water  2</pre>
            </div>
					</div>
					<div id="btnholder" class="modal-footer">
						

					</div>
				</div>

  <div align=center class="row" style="padding-top: 5%">
 
    
  </div>



<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../../resources/js/materialize.min.js"></script>


<script>
//to test parsing data values as json

var myObj; // js variable that holds array of json orders
var kitchenArray;

/*before each refresh make sure to remove clicked buttons from order table to kitchen table to ensure t
they arent reloaded*/
createButtons();
createKitchenCards();

//generate a unique modal containing details of button that calls it. Called in create button method
function modalGen(index){
	jsonOrder = JSON.parse(myObj[index]);


var username=document.getElementById('username');
	var fullname = jsonOrder.userFname+" "+jsonOrder.userLname;
					username.innerHTML="Username : " +fullname;

var orderid=document.getElementById('ordernum');
orderid.innerHTML="#BB-ORDER NO. "+jsonOrder.orderNum;

var foodid=document.getElementById('foodid');
foodid.innerHTML=jsonOrder.foodname;

var drinkid=document.getElementById('drinkid');
drinkid.innerHTML=jsonOrder.drinkname;

var btnHolder = document.getElementById("btnholder" );
var kitchenBtn = document.createElement("button");
kitchenBtn.className="modal-action modal-close orange waves-effect waves- btn-flat ";
kitchenBtn.innerHTML="Add to kitchen";
kitchenBtn.id=index;


kitchenBtn.onclick= function(){
	$.post("../../controller/vendorClient/processapp.php", //Required URL of the page on server
	{ // Data Sending With Request To Server
	name:fullname,
	orderNum:jsonOrder.orderNum,
	foodname:jsonOrder.foodname,
	drinkname:jsonOrder.drinkname,
	foodid:jsonOrder.foodid,
	action: 'kitchen'
	},
	function(response,status){ // Required Callback Function
	
	});
	createKitchenCards();
}

btnHolder.appendChild(kitchenBtn);

 $('#modal1').modal('open');
        
 
}

// function moveKitchen(){
// 	alert("sucess");
// $dbcon = new dbconnection;
// $sql="INSERT INTO in_kitchen(orderNum,username,foodname,drinkname) VALUES() ";
//  $sql="INSERT INTO webtechtable(username,gender,color) VALUES (\"$username\",\"$gender\",\"$color\")" ; 

// $dbexec = $dbcon->query($sql);



// }




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
      complete: function() { 
		  
/*
		   var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {

		if (this.readyState == 4 && this.status == 200) {
				alert(this.responstText);

		} 
		xmlhttp.open("POST", "processapp.php?action=addToKitchen", true);

	xmlhttp.send();
    } //end of create button method

*/
 
	$( '#btnholder' ).empty();
	
	} // Callback for Modal close
	//var btnHolder = document.getElementById("btnholder" );
  }
  );




  function createButtons() {
	  $( '#orderContainer' ).empty(); //clear space to avoid duplication of buttons

	$.post("../../controller/vendorClient/processapp.php", //Required URL of the page on server
{ // Data Sending With Request To Server
action: 'createBtn'
},
function(response,status){ // Required Callback Function
myObj = JSON.parse(response);

			//foreach chunk that converts each item in the response array into json object
			//and creates buttons that hold their details
			myObj.forEach(function(currentValue, index, arr){
				if(myObj[index])
				jsonOrder = JSON.parse(myObj[index]);



				var container=document.getElementById('orderContainer');
				var btn = document.createElement("button");
				btn.className="btn waves-effect waves-light";
				btn.id=jsonOrder.orderNum;
					btn.style.width = "160px";
					btn.style.height = "120px";
					btn.style.background = "rgba(110,0,0,0.7)";
					btn.style.color = "white";
					ordercount =index+1; 
					btn.innerHTML = "Order 0"+ordercount;
					
				btn.onclick= function(){
					modalGen(index);
					$(this).removeClass("waves-effect waves-light submit").addClass('disabled');

}; //end of button onclick anonymous function

				container.appendChild(btn);



			}); //end of for each item in json array/ or in order database
//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.

});


  


	
    } //end of create button method


function loadkitchen() {

}

function createKitchenCards() {
	 $( '#kitchen' ).empty(); //clear space to avoid duplication of buttons

	$.post("../../controller/vendorClient/processapp.php", //Required URL of the page on server
{ // Data Sending With Request To Server
action: 'createkitchenCards'
},
function(response,status){ // Required Callback Function
kitchenArray = JSON.parse(response);

			//foreach chunk that converts each item in the response array into json object
			//and creates buttons that hold their details
			kitchenArray.forEach(function(currentValue, index, arr){
				
		
	var container=document.getElementById('kitchen');


	var caseHorizontal = document.createElement("div");
				caseHorizontal.className="card horizontal";

				var case0 = document.createElement("div");
				case0.className="class-image";

				var img = document.createElement("img");
				img.src="../../resources/images/jollof.jpg";
				img.style.width="60%"
				img.style.height="60%"

				case0.appendChild(img);
				caseHorizontal.appendChild(case0);

				var case1 = document.createElement("div");
				case1.className="card-stacked";

				var case2 = document.createElement("div");
				case2.className="card-content";

				var name =document.createElement("h5");
				name.innerHTML="Order No."+kitchenArray[index].orderNum+"<br> "+kitchenArray[index].foodname;

				case2.appendChild(name);
				case1.appendChild(case2);

				var btn3 = document.createElement("div");
				btn3.className=" waves-effect waves-green";
				btn3.style.background="rgba(0,110,0,0.7)";
				btn3.style.height="28px";
				btn3.innerHTML="Deliver";

				btn3.onclick= function(){
					
				$.post("../../controller/vendorClient/processapp.php", //Required URL of the page on server
	{ // Data Sending With Request To Server
	orderNum:kitchenArray[index].orderNum,
	action: 'deleteCard'
	},
	function(response,status){ // Required Callback Function
	alert(response);
	});






	alert("Pickup notification for ORDER NO. "+kitchenArray[index].orderNum+" sent to customer.");
	//send email to user
				case1.removeChild(btn3);


				}

		
				case1.appendChild(btn3);

				caseHorizontal.appendChild(case1);
				
				
				container.appendChild(caseHorizontal);









			}); //end of for each item in json array/ or in order database
//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.

});


  


	
    } //end of create button method

	setInterval(createButtons, 6000 ); // make creation of buttons automatic
setInterval(createKitchenCards, 7000 ); // make creation of buttons automatic


</script>


</body>
</html>


          