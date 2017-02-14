<!DOCTYPE html>
<html>
<head>
  <title>Homepage||Reseller||Food</title>

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
<!-- <div class = "center" id ="menLog">
  <img src="../images/logo.png"  >
</div> -->

<div class="card-header" id ="menLog" style=" margin: 0 auto; width: 15%; height: 15%">

  <img class="responsive-img" src="../images/logo.png"> 
</div>

<img class="responsive-img" src="../images/bk.jpg"> 

<div class="card bordered z-depth-2 " style="margin-right: 5%; width:45%; float: left;" id="indexCard" >

  <div class="card-content ">
    <form id ="indexPage" method="POST" action="">
     <div class="row">
      <div class="input-field col s12">
        <input id="id_numberIndex" type="text" class="validate" placeholder="ID Number" >
      </div>
    </div>
    <a class="btn-floating btn-large waves-effect waves-light #00ff00 " id = "numberIndexSend"><i class="material-icons right">send</i></a>
  </form>
</div>
</div>

<ul id="slide-out" class="side-nav">
  <li><div class="userView">
    <div class="background">
      <img src="#">
    </div>
    <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
    <a href="#!name"><span class="white-text name">John Doe</span></a>
    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
  </div></li>
  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<a href="#slide-out" data-activates="slide-out" class="button-collapse show-on-large" ><i class="material-icons" style="font-size: 50px;" id ="menuBtn">menu</i></a>


<div class="row" id="nameDisplay">
  <div >
    <h5>Admin Name</h5>
  </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
    );
  $('.collapsible').collapsible();

</script>
</body>
</html>