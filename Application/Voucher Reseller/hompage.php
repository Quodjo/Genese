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

  <img class="responsive-img" src="../images/bk.jpg"> 

  <!--  <img class="responsive-img" src="../images/logo.png" id ="pgLogo"> -->

  <div class="card bordered z-depth-2 " style="margin-right: 5%; width:35%; float: left;" id="indexCard" >

   

    <div class="card-content ">
      <form id ="indexPage" method="POST" action="">
       <div class="row">
        <div class="input-field col s12">
          <input id="id_numberIndex" type="text" class="validate" placeholder="ID Number" >
        </div>
      </div>
       <a class="btn-floating btn-large waves-effect waves-light #43a047 green darken-1" id = "numberIndexSend"><i class="material-icons right">send</i></a>
    </form>
  </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>