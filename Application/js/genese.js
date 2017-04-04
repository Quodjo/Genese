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
          $('.cartNumberOfItems').text('5');
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


  function fireDRDialogue() {
      var $toastContent = $("<a class='waves-effect waves-light btn' onclick = \"testFunct()\">Make a request</a>");
      Materialize.toast('Want your food delivered?', 4000)
      setTimeout(function() {
          Materialize.toast($toastContent, 5000)

      }, 3000);
  };


  function testFunct() {
      alert("This callback function will do something.");
  }




  var x = 0;
  var siteNavBar = $('.siteNav');

  $(document).on('scroll', function() {

      var s = $(document).scrollTop();

      if (s > 500) {
          siteNavBar.removeClass('siteNav_hide');
          siteNavBar.addClass('siteNav_reveal');
          $('.siteNav .brand-logo').show();
          console.log(s);
      } else if (s <= 50) {
          siteNavBar.removeClass('siteNav_reveal');
          siteNavBar.addClass('siteNav_hide');
          $('.siteNav .brand-logo').hide();
          console.log(s);
      }



  });




  /*$(function() {
     
  });*/


  /*Checkout Interactions*/
  var paymentSection = $('.payementDetails');
  var orderSection = $('.orderDetails');
  var checkoutSect = $('.checkOutSection')
  var progressBar = document.getElementsByClassName('progressPointer');
  var proceedBtn = $('.proceed');
  var checkOutPage = $('.checkOutPage');
  var checkOutButton = $('.fin');

  $(document).ready(function() {
      orderSection.show();
      console.log(progressBar[0]);

      proceedBtn.click(function() {
          orderSection.hide(200);
          paymentSection.show(200);
          progressBar[0].classList.add('completed');
          console.log(progressBar[0]);



      });

      checkOutButton.click(function() {
          paymentSection.hide(200);
          checkoutSect.show(200);
          console.log(progressBar[1]);
          progressBar[1].classList.add('completed');
          setTimeout(function() {
              fireDRDialogue();
          }, 1000);



      });
  });


  /*end of checkout interactions*/