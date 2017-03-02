<!DOCTYPE html>
<html>
<head>
  <title>Homepage||Food</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link type="text/css" rel="stylesheet" href="../css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../images/logo.png" type="image/png">
</head>
<body>

  <div id="container">
    <nav class = "transparent">
      <div class="nav-wrapper ">
        <a href="#!" class="center brand-logo"><img class="responsive-img" style ="padding-top:4%; height:45%; width:45%" src="../images/logo.png"> </a>
        <a href="../homepage/homepage.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="color:#be1e2d; font-size: 2rem;">keyboard_arrow_left</i></a>
      </div>
    </nav>


    <div class="nav-wrapper" id="searchBar">
      <form>
        <div class="input-field">
          <input class="white" id="search" type="search" placeholder="Search Menu" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div> 

    <div class="row " id= "tabsPane">
      <div class="col s12 " id="menu">
        <ul id="tabs-swipe-demo" class="tabs transparent">
          <li class="tab col s3"><a class="active" style="color: #be1e2d;" href="#test1">Meal</a></li>
          <li class="tab col s3"><a href="#test2" style="color: #be1e2d;">Drinks</a></li>
          <li class="tab col s3 "><a style="color: #be1e2d; "href="#test3">Snacks</a></li>
          <li class="tab col s3"><a style="color: #be1e2d;" href="#test4">Extras</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12">
        <?php

        $dataInDB = 12;
        $row = $dataInDB/2;
        for ($x = 0; $x < $row; $x++)
        {
          echo '<div class="row">';
          for ($i=0; $i < 6; $i++){
            echo '<div class="col s6 center"><div class="card">
            <div class="card-image foodSel">
              <a href="#modal1"><a href="#modal3"><img src="../images/foodimage.jpg"></a>
              <span class="card-title">Food</span>
              <a class="btn-floating large halfway-fab waves-effect waves-light red">10.00</a>
            </div>

          </div>
        </div>';
      }
      echo '</div>';
    }
    ?>
  </div>
  <div id="test2" class="col s12">

</div>
<div id="test3" class="col s12">

</div>
<div id="test4" class="col s12">

</div>
</div>


<div class="fixed-action-btn">
  <a class="btn-floating btn-large #33691e light-green darken-4">
    <i class="large material-icons" style="font-size: 2rem;">shopping_basket</i>
  </a>
</div>

</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>

  $(document).ready(function(){
    $('ul.tabs').tabs();
  });

  $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });

  $( document ).ready(function(){});
</script>

</body>
</html>