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
<body  style="background-image:url(../images/background_Head.jpg); background-repeat: no-repeat;overflow-y: scroll;
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

 		<div  class="row" align="center" >
 		<div id="orderContainer">
 		
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
				<!--<div align=center id="modal1" class="modal" style="width:500px">
					<div class="modal-content">
						<h4 style="font-size:350%;"><  #BB-ORDER NO.</h4><br>
            <div class="divider red darken-4" style="height:10px"></div>
						<p1 style ="font-size:170%">20202018:John Doe </p1><br>
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
				</div>-->

  <div align=center class="row" style="padding-top: 5%">
 
    
  </div>

<button onclick="createButtons()" id="demo">Click me</button> //test button
<button data-target="modal1">Modal test</button> //test button


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>


<script>
//to test parsing data values as json
function checked(){



}




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
      complete: function() { alert('ORDER MOVES TO KITCHEN'); } // Callback for Modal close
  }
  );




  function createButtons() {

   var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			myObj = JSON.parse(this.responseText);

			//foreach chunk that converts each item in the response array into json object
			//and creates buttons that hold their details
			myObj.forEach(function(currentValue, index, arr){
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
				

//create and append modal details
			var modal = document.createElement("div");
			modal.id="modal1";                                //create modal parent div
			modal.className="modal";
			modal.style.width="500px";

			var case0 =document.createElement("div");
			case0.className="modal-content";             //    create div to hold modal content

			var header = document.createElement("h4");
			header.style.font="350%";                                  //header for order number
			header.innerHTML="#BB-ORDER NO."+jsonOrder.orderNum;

			case0.appendChild(header);//add a space after             //append to modal content div
			
			var divider1 = document.createElement("div");
			divider1.className="divider red darken-4"                  //create divider
			divider1.style.height="10px";

			
			case0.appendChild(divider1);//add a space after        //append to modal content div



			var username = document.createElement("p1");
			username.font="170%";                                 //create username field also holds user id
			username.innerHTML='jsonOrder.userFname+jsonOrder.userLname';
			
			case0.appendChild(username);//add a space after        //append to modal content div



			var case1 = document.createElement("div");
			case1.className="grey";                            //create grey div

			var foodname = document.createElement("pre")
			foodname.style.font="180%";                         //create food field
			foodname.innerHTML= jsonOrder.foodname;

			case1.appendChild(foodname);                      //append to grey div case

			case0.appendChild(case1);//add a space after        //append entire case1 to modal content div

			





$(this).removeClass("waves-effect waves-light submit").addClass('disabled');
			alert ("worked"+index);

}; //end of button onclick anonymous function

				container.appendChild(btn);



			}); //end of for each item in json array/ or in order database
	
		} //end of if readystate==4 check
	}; //end of ajax on readystatecheck anonymous funciton 


	xmlhttp.open("POST", 
	"processapp.php", true);

	xmlhttp.send();
    } //end of create button method


function loadButton() {

//how to achieve updating buttons
/*
everytime you click on a button it would be greyed out then write a script
that removes the clicked order from the order table so on the next ajax
call you recreate all the buttons but the already clicked ones wont be there
you put them in a new table called inKitchen table */

/*call this on every button, get button id which would be order item id and use that to 
exxecute a query to populate values of a modal you create here, after remove that button 
from the order table in the database and put in the kitchen table*/

}






	/*		
   $(".champion-card").click(function() {
    var champion = $(this).find(".card-title").html();
    var champion_id = champion_id = champion.replace(/ /g,"-").replace('.', "")+'Modal';
    $.ajax({
        type: 'POST',
        url: 'getdata.php',
        data: { scripts: champion },
        success: function(data) {
            $("body").append('<div id="'+champion_id+'" class="modal"><div class="modal-content"><h4>Scripts - '+champion+'</h4><div class="row"><ul class="list">'+data+'</ul></div></div></div>');
        }
    });
    $('#'+champion_id).modal('open');
    $('#'+champion_id).modal({
        complete: function() { 
            $(this).remove();
        }
    });
});

//works when you use 
$('#'+champion_id).modal();
		*/
	
</script>


</body>
</html>

