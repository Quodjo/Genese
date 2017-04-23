<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>

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
<body style="background-image:url(../../resources/images/background_Head.jpg); background-repeat: repeat;overflow-y: scroll;
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

    <div align= center class="col s8" style=" font-family: ‘Courier New’, Courier, monospace; padding-top: 1.6% ">

    	<h4 style="color: white">INVENTORY</h4>

    </div>
    <div class="col s2">
    	<div align=right style="color: white">
    	<img class="circle responsive-img" src="../../resources/images/admin.jpg" style="width:35%;height: 35%;border: 0.25rem solid #be1e2d;">KOJO DOE
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
	<button onclick = "doall()"> Press ME</button>
      <div id="tab1">
          
 



      </div>


       <!-- 
          food availiability cards for tab2-->
      <div id="tab2"> 

          


          


          

      </div>


      <!-- 
          food availiability cards for tab3-->
      <div id="tab3"> 




      </div> <!-- end of tab 3 contents -->


        </div> 
     </div> <!-- close of tab content display space div -->

  </div> <!-- close of midsection row -->


<!-- row for footer -->
  <div align=center class="row" style="padding-top: 2%">
  
  </div>











<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
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


/*
*Akosua Adobea Adin-Darko
*Creating food cards for all foods(available and unavailable)
*/
function foodCardsTab1(){
 $( '#tab1' ).empty(); //clear space to avoid duplication of buttons
  	$.post("../../controller/vendorClient/processInventory.php", //Required URL of the page on server
{ // Data Sending With Request To Server
action: 'tab1Cards'
},
function(response,status){ // Required Callback Function
var myObj = JSON.parse(response);

			//foreach chunk that converts each item in the response array into json object
			//and creates buttons that hold their details
			myObj.forEach(function(currentValue, index, arr){
			
		myObj[index];

	/*
		*Creating food cards for Available foods
		*/
	//getting the element from the html file
	 var container_available = document.getElementById("tab1");


	 //create div with class name col s12 m4 disable
   var case1 = document.createElement("div");
	 case1.className = "col s12 m4 disable";

	 //create div with class name card horizontal
	 var case2 = document.createElement("div");
	 case2.className = "card horizontal";


  //create div with class name card-image
	 var case3 = document.createElement("div");
	 case3.className = "card-image";

	 //creating an image element with width 100%
	 var image = document.createElement("img");
	 image.style.width = "100%";
	 image.src= "../../resources/images/"+myObj[index].icon;

		//appending the image to the div with class name card-image
	 case3.appendChild(image);

		//create div with class name card-stacked
		var case4 = document.createElement("div");
		case4.className = "card-stacked";

		//create div with class name card-content
		var case5 = document.createElement("div");
		case5.className = "card-content";

		//creating a header element
		var header = document.createElement("h5")
     	 header.innerHTML = myObj[index].name;
		//appending the header to div with class name card-content
		case5.appendChild(header);

		//creating a div with a class name card-action waves-effect waves-green
		var case6 = document.createElement("div");
	case6.className = "card-action waves-effect"
		 case6.id = "statusCol";
		 //case6.style.background = "rgba(0,110,0,0.7)";
     case6.style.color="white";
     case6.style.fontSize="20px";
     case6.innerHTML=myObj[index].status

     if(myObj[index].status=="Available"){
  $('#statusCol').addClass('waves-green');
  case6.style.background = "rgba(0,110,0,0.7)";
     }

     if(myObj[index].status=="Unavailable"){
        $('#statusCol').addClass('waves-red');
        case6.style.background = "rgba(110,0,0,0.7";
     }

 //change availability status 
     case6.onclick= function(){  

       //process status change ajax here

$.post("../../controller/vendorClient/processInventory.php", //Required URL of the page on server
{ // Data Sending With Request To Server
action: 'changeStatus',
status: myObj[index].status,
cardid: myObj[index].id,
type: myObj[index].type,
},
function(response,status){ // Required Callback Function

});

         if(myObj[index].status=="Available"){
  $('#statusCol').addClass('waves-green');
   case6.style.background = "rgba(110,0,0,0.7";
  case6.innerHTML="Unavailable"
     }

     if(myObj[index].status=="Unavailable"){


        $('#statusCol').addClass('waves-red');
        case6.style.background = "rgba(0,110,0,0.7)";
        case6.innerHTML="Available"

     }

     } 


		
		 case4.appendChild(case5);
		 case4.appendChild(case6);
		 case2.appendChild(case3);
		 case2.appendChild(case4);
		 case1.appendChild(case2);
		 container_available.appendChild(case1);
	

			









			}); //end of for each item in json array/ or in order database
//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.

});


}


function foodCardsTab2(){
 $( '#tab2' ).empty(); //clear space to avoid duplication of buttons
 
  		$.post("../../controller/vendorClient/processInventory.php", //Required URL of the page on server
{ // Data Sending With Request To Server
action: 'tab2Cards'
},
function(response,status){ // Required Callback Function
var myObj = JSON.parse(response);

			//foreach chunk that converts each item in the response array into json object
			//and creates buttons that hold their details
			myObj.forEach(function(currentValue, index, arr){
			
		myObj[index];

	/*
		*Creating food cards for Available foods
		*/
	//getting the element from the html file
	 var container_available = document.getElementById("tab2");


	 //create div with class name col s12 m4 disable
   var case1 = document.createElement("div");
	 case1.className = "col s12 m4 disable";

	 //create div with class name card horizontal
	 var case2 = document.createElement("div");
	 case2.className = "card horizontal";


  //create div with class name card-image
	 var case3 = document.createElement("div");
	 case3.className = "card-image";

	 //creating an image element with width 100%
	 var image = document.createElement("img");
	 image.style.width = "100%";
	 image.src= "../../resources/images/"+myObj[index].icon;

		//appending the image to the div with class name card-image
	 case3.appendChild(image);

		//create div with class name card-stacked
		var case4 = document.createElement("div");
		case4.className = "card-stacked";

		//create div with class name card-content
		var case5 = document.createElement("div");
		case5.className = "card-content";

		//creating a header element
		var header = document.createElement("h5")
     	 header.innerHTML = myObj[index].name;
		//appending the header to div with class name card-content
		case5.appendChild(header);

		//creating a div with a class name card-action waves-effect waves-green
		var case6 = document.createElement("div");
	case6.className = "card-action waves-effect"
		 case6.id = "statusCol";
		 //case6.style.background = "rgba(0,110,0,0.7)";
     case6.style.color="white";
     case6.style.fontSize="20px";
     case6.innerHTML=myObj[index].status

     if(myObj[index].status=="Available"){
  $('#statusCol').addClass('waves-green');
  case6.style.background = "rgba(0,110,0,0.7)";
     }

     if(myObj[index].status=="Unavailable"){
        $('#statusCol').addClass('waves-red');
        case6.style.background = "rgba(110,0,0,0.7";
     }

 //change availability status 
     case6.onclick= function(){  

       //process status change ajax here

$.post("../../controller/vendorClient/processInventory.php", //Required URL of the page on server
{ // Data Sending With Request To Server
action: 'changeStatus',
status: myObj[index].status,
cardid: myObj[index].id,
type: myObj[index].type,
},
function(response,status){ // Required Callback Function

});

         if(myObj[index].status=="Available"){
  $('#statusCol').addClass('waves-green');
   case6.style.background = "rgba(110,0,0,0.7";
  case6.innerHTML="Unavailable"
     }

     if(myObj[index].status=="Unavailable"){


        $('#statusCol').addClass('waves-red');
        case6.style.background = "rgba(0,110,0,0.7)";
        case6.innerHTML="Available"

     }

     } 


		
		 case4.appendChild(case5);
		 case4.appendChild(case6);
		 case2.appendChild(case3);
		 case2.appendChild(case4);
		 case1.appendChild(case2);
		 container_available.appendChild(case1);


			}); //end of for each item in json array/ or in order database
//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.

});


 }

 function foodCardsTab3(){
 $( '#tab3' ).empty(); //clear space to avoid duplication of buttons
 	 
  		$.post("../../controller/vendorClient/processInventory.php", //Required URL of the page on server
{ // Data Sending With Request To Server
action: 'tab3Cards'
},
function(response,status){ // Required Callback Function
var myObj = JSON.parse(response);

			//foreach chunk that converts each item in the response array into json object
			//and creates buttons that hold their details
			myObj.forEach(function(currentValue, index, arr){
			
		myObj[index];

	/*
		*Creating food cards for Available foods
		*/
	//getting the element from the html file
	 var container_available = document.getElementById("tab3");


	 //create div with class name col s12 m4 disable
   var case1 = document.createElement("div");
	 case1.className = "col s12 m4 disable";

	 //create div with class name card horizontal
	 var case2 = document.createElement("div");
	 case2.className = "card horizontal";


  //create div with class name card-image
	 var case3 = document.createElement("div");
	 case3.className = "card-image";

	 //creating an image element with width 100%
	 var image = document.createElement("img");
	 image.style.width = "100%";
	 image.src= "../../resources/images/"+myObj[index].icon;

		//appending the image to the div with class name card-image
	 case3.appendChild(image);

		//create div with class name card-stacked
		var case4 = document.createElement("div");
		case4.className = "card-stacked";

		//create div with class name card-content
		var case5 = document.createElement("div");
		case5.className = "card-content";

		//creating a header element
		var header = document.createElement("h5")
     	 header.innerHTML = myObj[index].name;
		//appending the header to div with class name card-content
		case5.appendChild(header);

		//creating a div with a class name card-action waves-effect waves-green
		var case6 = document.createElement("div");
	case6.className = "card-action waves-effect"
		 case6.id = "statusCol";
		 //case6.style.background = "rgba(0,110,0,0.7)";
     case6.style.color="white";
     case6.style.fontSize="20px";
     case6.innerHTML=myObj[index].status

     if(myObj[index].status=="Available"){
  $('#statusCol').addClass('waves-green');
  case6.style.background = "rgba(0,110,0,0.7)";
     }

     if(myObj[index].status=="Unavailable"){
        $('#statusCol').addClass('waves-red');
        case6.style.background = "rgba(110,0,0,0.7";
     }

 //change availability status 
     case6.onclick= function(){  

       //process status change ajax here

$.post("../../controller/vendorClient/processInventory.php", //Required URL of the page on server
{ // Data Sending With Request To Server
action: 'changeStatus',
status: myObj[index].status,
cardid: myObj[index].id,
type: myObj[index].type,
},
function(response,status){ // Required Callback Function

});

         if(myObj[index].status=="Available"){
  $('#statusCol').addClass('waves-green');
   case6.style.background = "rgba(110,0,0,0.7";
  case6.innerHTML="Unavailable"
     }

     if(myObj[index].status=="Unavailable"){


        $('#statusCol').addClass('waves-red');
        case6.style.background = "rgba(0,110,0,0.7)";
        case6.innerHTML="Available"

     }

     } 


		
		 case4.appendChild(case5);
		 case4.appendChild(case6);
		 case2.appendChild(case3);
		 case2.appendChild(case4);
		 case1.appendChild(case2);
		 container_available.appendChild(case1);


			}); //end of for each item in json array/ or in order database
//alert("*----Received Data----*\n\nResponse : " + response+"\n\nStatus : " + status);//"response" receives - whatever written in echo of above PHP script.

});

 }

 function doall(){
foodCardsTab1();
foodCardsTab2();
foodCardsTab3();

 }


</script>







</body>
</html>