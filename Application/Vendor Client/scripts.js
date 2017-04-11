
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


  function createButtons() {
    
   
  	var container=document.getElementById('orderContainer');
    var btn = document.createElement("button");
    btn.className="btn waves-effect waves-light";

        btn.style.width = "160px";
        btn.style.height = "120px";
        btn.style.background = "rgba(110,0,0,0.7)";
        btn.style.color = "white";
        btn.innerHTML = "Order new";


    container.appendChild(btn);
  /*    
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var json_result=this.responseText;      //Response received in JSON format
      var result =JSON.parse(json_result);     //passed into javascript variable
     document.getElementById("myMessage").innerHTML = result;
    }    
  };
  xhttp.open('GET', 'processapp.php?', true);
  xhttp.send();*/
    }



