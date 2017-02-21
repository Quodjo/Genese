<!DOCTYPE html>
<html>
<head>
  <title>Application||Food</title>

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
  <div id = "container">
   <!--  <div class="parallax-container" >
      <div class="card-header" id ="menLog" style=" margin: 0 auto; width: 10%; height: 10%">
        <img class="responsive-img" src="../images/logo.png"> 
      </div>
      <div id ="searchDiv" >
        <form id ="search" method="POST" action="">
          <div class="input-field col s12">
            <input id="idSearch" type="text" class="validate" placeholder="Search Menu" autofocus>
          </div>
        </form>
      </div>
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      width="100vw" height="95vh" viewBox="0 0 1920 268.715" enable-background="new 0 0 1920 268.715" xml:space="preserve">
      <path display="none" fill="#BE202E" d="M0-625.658c0,0,111.434,80.104,498.081,37.074c386.647-43.03,607.971-19,827.96,2.515
      S1920-567.883,1920-567.883v-243.402H0V-625.658z"/>
      <path fill="#BE202E" d="M-24.522,79.327c0,0,203.319-103.153,600.456-67.3s534.058,91.088,760.015,73.162S1946,0,1946,0v272.715
      H-26.043L-24.522,79.327z"/>
      <div class="parallax"><img src="../images/trans.jpg"></div>

    </div> -->

    <div class="section white">
      <div class="row container">
        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="100vw" height="auto" viewBox="0 0 1920 245.228" enable-background="new 0 0 1920 245.228" xml:space="preserve">
        <path fill="#BE202E" d="M-15,186.351c0,0,113.108,81.371,505.867,37.66s617.45-19.3,840.917,2.555S1935,245.039,1935,245.039V-2.285
        H-15V186.351z"/></path>
        <path display="none" fill="#BE202E" d="M-24.522,79.327c0,0,203.319-103.153,600.456-67.3s534.058,91.088,760.015,73.162
        S1946,0,1946,0v272.715H-26.043L-24.522,79.327z"/></path>
        <g>
          <text text-anchor="middle" x="50%" y="50%" font-size="4em" fill="#f2f2f2">Menu</text>
        </g>
      </svg>
    </div>
  </div>

  <div class="section white">

    <!-- <?php

    $dataInDB = 36;
    $row = $dataInDB/6;
    for ($x = 0; $x < $row; $x++)
    {
      echo '<div class="row">';
        for ($i=0; $i < 6; $i++){
          echo '<div class="col s12 m4 l2 center"><p>s12 m4</p></div>';
        }
      echo '</div>';
    }
    ?> -->

  </div>
</div>
</div>

<ul id="slide-out" class="side-nav">
  <li><a href="transaction.php"><i class="material-icons">store</i></a></li>
  <li><a href="hompage.php"><i class="material-icons">credit_card</i></a></li>
  <li><a href="#!" id="logOut" class="center"><i class="material-icons">lock</i></a></li>
</ul>

<a href="#slide-out" data-activates="slide-out" class="button-collapse show-on-large" ><i class="material-icons" style="font-size: 3rem; color:#000000;" id ="menuBtn">menu</i></a>

<div class="row valign-wrapper" id="nameDisplay" style="top:6%;">
  <p style="padding-right: 1em ; color:#000000;">Admin Name</p><img class="circle responsive-img" src="../images/admin.jpg" style="width:8%; height: 8%; border:0.25rem solid #be1e2d;">
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  // $('.collapsible').collapsible();
  $('.button-collapse').sideNav({
      menuWidth: 90, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
    );

  $(document).ready(function(){
    $('.parallax').parallax();
  });
  

</script>

</body>
</html>