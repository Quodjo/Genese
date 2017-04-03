  $(".addCartBtn").click(function() {
      $(".fcontainer").show(200);

      setTimeout(function() {
          Materialize.toast('Thought you might need something extra', 3000, 'rounded');
      }, 1000);
  });

  $(".mAddToCart").click(function() {
      $(".fcontainer").hide(200);

      setTimeout(function() {
          Materialize.toast('Your meal has been added to the cart.', 3000, 'rounded');
          $('.cartNumber').css('visibility', 'visible');
      }, 1000);
  });


  $(".fCls").click(function() {
      $(".fcontainer").hide(200);
  });

  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  // $('.collapsible').collapsible();
  $('.button-collapse').sideNav({
      menuWidth: 400, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
  });

  $(document).ready(function() {
      $('.parallax').parallax();
      $('.cartNumber').css('visibility', 'hidden');
  });

  $(document).ready(function() {
      $('select').material_select();
  });

  $(document).ready(function() {
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
  });

  $('.receipt').sideNav({
      menuWidth: 450, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: false // Choose whether you can drag to open on touch screens
  });


  $(document).ready(function() {
      var $toastContent = $("<a class='waves-effect waves-light btn' onclick = \"testFunct()\">Make a request</a>");
      Materialize.toast('Want your food delivered?', 4000)
      setTimeout(function() {
          Materialize.toast($toastContent, 55000)

      }, 4000);
  });

  function testFunct() {
      alert("This callback function will do something.");
  }

  /*Scrol fire - Display nav bar after scrolling an entire page*/
  $('.siteNav').hide();
  var displayNav = [

      {
          selector: '.menuHead',
          offset: 500,
          callback: function(el) {
              $('.siteNav').show(200);
          }
      }
  ];
  Materialize.scrollFire(displayNav);

  var hideNav = [

      {
          selector: '.parallax-container',
          offset: 0,
          callback: function(el) {
              $('.siteNav').hide(200);
          }
      }
  ];
  Materialize.scrollFire(hideNav);