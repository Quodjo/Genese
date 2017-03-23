<!DOCTYPE html>
<html>

<head>
    <title>Application||Food</title>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Animation css-->
    <link type="text/css" rel="stylesheet" href="../css/animate.css" />

    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="../images/logo.png" type="image/png">


</head>

<body>

    <!--This menu pops up once the user clicks on a food item-->
    <section class="fcontainer ">
        <div class='wrapper foodMenu'>
            <div class='wrapper foodSect'>
                <i class="fCls fa fa-times" aria-hidden="true"></i>
                <div class='fmenu'>
                    <div class='fmenutop'>
                        <div class="fleft">

                            <div class='fDesc'>
                                <div class="details">
                                    <div>

                                        <h1><span>GHC</span><span>100</span></h1>
                                        <h4>Jollof</h4>
                                    </div>
                                </div>
                            </div>

                            <a title="add to cart" class="checkoutBtn btn-floating btn-large waves-effect waves-light lawngreen"><i class="fa fa-cart-plus" aria-hidden="true"></i>
</a>

                        </div>
                        <div class="fright">
                            <div class='flist'>
                                <h2>Extras</h2>
                                <div class="chip">
                                    <span>Fish</span>
                                    <i class="close material-icons">close</i>
                                </div>
                                <div class="chip">
                                    <span>Plantain</span>
                                    <i class="close material-icons">close</i>
                                </div>
                                <div class="chip">
                                    <span>Chicken</span>
                                    <i class="close material-icons">close</i>
                                </div>
                                <div class="chip">
                                    <span>Beef</span>
                                    <i class="close material-icons">close</i>
                                </div>
                                <div class="chip">
                                    <span>Plantain</span>
                                    <i class="close material-icons">close</i>
                                </div>
                                <div class="chip">
                                    <span>Chicken</span>
                                    <i class="close material-icons">close</i>
                                </div>
                                <div class="chip">
                                    <span>Beef</span>
                                    <i class="close material-icons">close</i>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>
                <div class='fCat'>

                    <div class='fCatB'>

                        <!--Item 1-->
                        <ul id="dropdown2" class="dropdown-content">
                            <li><a href="#!">one<span class="badge">1</span></a></li>
                            <li><a href="#!">two<span class="new badge">1</span></a></li>
                            <li><a href="#!">three</a></li>
                        </ul>
                        <a class="btn dropdown-button itemBtn" href="#!" data-activates="dropdown2">
                            <div id="soda" class="fItem"></div><i class="mdi-navigation-arrow-drop-down right"></i>
                        </a>

                        <!--Item 2-->
                        <ul id="dropdown3" class="dropdown-content">
                            <li><a href="#1">one<span class="badge">1</span></a></li>
                            <li><a href="#1">two<span class="new badge">1</span></a></li>
                            <li><a href="#1">three</a></li>
                        </ul>
                        <a class="btn dropdown-button itemBtn" href="#1" data-activates="dropdown3">
                            <div id="water" class="fItem"></div><i class="mdi-navigation-arrow-drop-down right"></i>
                        </a>

                        <!--Item 3-->
                        <ul id="dropdown4" class="dropdown-content">
                            <li><a href="#1">one<span class="badge">1</span></a></li>
                            <li><a href="#1">two<span class="new badge">1</span></a></li>
                            <li><a href="#1">three</a></li>
                        </ul>
                        <a class="btn dropdown-button itemBtn" href="#1" data-activates="dropdown4">
                            <div id="pastry" class="fItem"></div><i class="mdi-navigation-arrow-drop-down right"></i>
                        </a>

                        <!--Item 4-->
                        <ul id="dropdown5" class="dropdown-content">
                            <li><a href="#1">one<span class="badge">1</span></a></li>
                            <li><a href="#1">two<span class="new badge">1</span></a></li>
                            <li><a href="#1">three</a></li>
                        </ul>
                        <a class="btn dropdown-button itemBtn" href="#1" data-activates="dropdown5">
                            <div id="protein" class="fItem"></div><i class="mdi-navigation-arrow-drop-down right"></i>
                        </a>

                    </div>

                </div>
            </div>


        </div>



    </section>
    <!--End of food item pop up-->

    <div>
        <!--Fixed button on the page that acts as the checkout button-->
        <div class="fixed-action-btn">
            <a class="button-collapse btn-floating btn-large lawngreen" data-activates="checkout_slide-out">
                <i class="large material-icons">shopping_basket</i>
            </a>
            <ul>
            </ul>
        </div>
        <!--End of checkout button-->

        <!--Checkout side nav-->
        <ul id="checkout_slide-out" class="side-nav">
            <li>
                <div class="userView">
                    <div id="userProf" class="background">
                        <!--<img src="../images/admin.jpg">-->
                    </div>
                    <a href="#!user"><img class="circle" src="../images/admin.jpg"></a>
                    <a href="#!name"><span class="white-text name">John Doe</span></a>
                    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
            <li><a href="#!"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>GHC500</a></li>
            <li><a href="#!"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
GHC9</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a class="subheader">Items In Cart</a></li>
            <div class="chekNav">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="chip">
                                <span>Short name</span>
                                <i class="close material-icons">close</i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="chip">
                                <span>Longest name of..</span>
                                <i class="close material-icons">close</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </ul>
        <!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>-->

        <!--End of checkout side nav-->

        <div class="parallax-container">

            <div class="card-header" id="menLog" style=" margin: 0 auto; width: 10%; height: 10%">
                <img class="responsive-img" src="../images/logo.png">
            </div>
            <div id="searchDiv">
                <form id="search" method="POST" action="">
                    <div class="input-field col s12">
                        <input id="idSearch" type="text" class="validate" placeholder="Search Menu" autofocus>
                    </div>
                </form>
            </div>
            <!--Scroll down icon-->
            <div class="row  idc">
                <div class="animated jello infinite container">
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </div>
            </div>




            <!--<div class="round-button">
        <img src="http://example.com">
        </div>
      </div>-->



            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100vw" height="95vh" viewBox="0 0 1920 268.715" enable-background="new 0 0 1920 268.715" xml:space="preserve">
      <path display="none" fill="#BE202E" d="M0-625.658c0,0,111.434,80.104,498.081,37.074c386.647-43.03,607.971-19,827.96,2.515
      S1920-567.883,1920-567.883v-243.402H0V-625.658z"/>
      <path fill="#BE202E" d="M-24.522,79.327c0,0,203.319-103.153,600.456-67.3s534.058,91.088,760.015,73.162S1946,0,1946,0v272.715
      H-26.043L-24.522,79.327z"/>
    </svg>
            <div class="parallax"><img src="../images/trans.jpg"></div>

        </div id="#headerPain">
        <div>
            <div class="card-header" id="menLog" style="margin: 0 auto; color:#f2f2f2;">
                <h3>Menu</h3>
            </div>
            <img style="" src="../images/header.png">
        </div>
        <div class="row">
            <div class="container">
                <!-- Dropdown Trigger -->
                <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Drop Me!</a>

                <!-- Dropdown Structure -->
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!">one</a></li>
                    <li><a href="#!">two</a></li>
                    <li class="divider"></li>
                    <li><a href="#!">three</a></li>
                    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
                    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
                </ul>
            </div>
        </div>
        <div class="section white">


            <div class="row">
                <div class="col s12">
                    <div class="pagebtn">
                        <ul class="pagination tabs">
                            <li class="tab col s3"><a href="#test1">Meal</a></li>
                            <li class="tab col s3"><a class="active" href="#test2">Soda</a></li>
                            <li class="tab col s3"><a href="#test3">Protein</a></li>
                            <li class="tab col s3"><a href="#test4">Pastry</a></li>
                        </ul>
                    </div>

                </div>
                <div id="test1" class="col s12">
                    <?php

 $dataInDB = 36;
 $row = $dataInDB/6;
 for ($x = 0; $x < $row; $x++)
 {
  echo '<div class="row">';
  for ($i=0; $i < 6; $i++){
    echo '<div class="col s12 m4 l2 center"><div class="card">
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
                    <?php

 $dataInDB = 36;
 $row = $dataInDB/6;
 for ($x = 0; $x < $row; $x++)
 {
  echo '<div class="row">';
  for ($i=0; $i < 6; $i++){
    echo '<div class="col s12 m4 l2 center"><div class="card">
    <div class="card-image foodSel">
      <a href="#modal1"><a href="#modal3"><img src="../images/soda.png"></a>
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

                <div id="test3" class="col s12">
                    <?php

 $dataInDB = 36;
 $row = $dataInDB/6;
 for ($x = 0; $x < $row; $x++)
 {
  echo '<div class="row">';
  for ($i=0; $i < 6; $i++){
    echo '<div class="col s12 m4 l2 center"><div class="card">
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

                <div id="test4" class="col s12">
                    <?php

 $dataInDB = 36;
 $row = $dataInDB/6;
 for ($x = 0; $x < $row; $x++)
 {
  echo '<div class="row">';
  for ($i=0; $i < 6; $i++){
    echo '<div class="col s12 m4 l2 center"><div class="card">
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
            </div>





        </div>
    </div>


    <!-- <ul id="slide-out" class="side-nav">
        <li><a href="transaction.php"><i class="material-icons">store</i></a></li>
        <li><a href="hompage.php"><i class="material-icons">credit_card</i></a></li>
        <li><a href="#!" id="logOut" class="center"><i class="material-icons">lock</i></a></li>
    </ul>
    -->

    <a href="#slide-out" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons" style="font-size: 3rem; color:#f2f2f2;" id ="menuBtn">menu</i></a>

    <div class="row valign-wrapper" id="nameDisplay" style="top:6%;">
        <p style="padding-right: 1em ; color:#f2f2f2;">Admin Name</p><img class="circle responsive-img" src="../images/admin.jpg" style="width:8%; height: 8%; border:0.25rem solid #be1e2d;">
    </div>



    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

    <script>
        $(".foodSel").click(function() {
            $(".fcontainer").show(200);
        });

        $(".fCls").click(function() {
            $(".fcontainer").hide(200);
        });

        // Initialize collapse button
        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        // $('.collapsible').collapsible();
        $('.button-collapse').sideNav({
            menuWidth: 300, // Default is 300
            edge: 'right', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });

        $(document).ready(function() {
            $('.parallax').parallax();
        });
    </script>



</body>

</html>