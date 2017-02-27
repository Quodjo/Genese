<!DOCTYPE html>
<html>
<head>
  <title>DashBoard||SuperAdmin||Food</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

  <link type="text/css" rel="stylesheet" href="../css/style.css"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <link rel="icon" href="../images/logo.png" type="image/png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
</head>
<body>

  <div id="spAdminContainer">


    <div class="navbar-fixed">
      <nav class="white">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo right"><img  style=" float:right; margin-top :.75%; margin-right :1%; width: 10%; height: 10%;" src="../images/logo.png"></a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <a style="color:#be1e2d;">Super Admin Panel</a>
          </ul>
        </div>
      </nav>
    </div>
    <div class="row" style="margin-top: 1%;">
      <div class="col s12 m4 l3 center " >
        <div class="card-panel white" >
          <div class="valign-wrapper" style="height: 0.005vh;">
            <h4 style="color: #be1e2b;">1000</h4><p style="padding-left:0.5rem">USERS</p>
          </div>
        </div>
      </div>
      <div class="col s12 m4 l3 center">
        <div class="card-panel white">
         <div class="valign-wrapper" style="height: 0.005vh;">
          <h4 style="color: #be1e2b;">2</h4><p style="padding-left:0.5rem">VENDORS</p>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l3 center">
      <div class="card-panel white">
       <div class="valign-wrapper" style="height: 0.005vh;">
        <h4 style="color: #be1e2b;">2</h4><p style="padding-left:0.5rem">VOUCHER RESELLERS</p>
      </div>
    </div>
  </div>
  <div class="col s12 m4 l3 center">
    <div class="card-panel white">
     <div class="valign-wrapper" style="height: 0.005vh;">
      <h4 style="color: #be1e2b;">50</h4><p style="padding-left:0.5rem">DELIEVERY GUYS</p>
    </div>
  </div>
</div>
</div>


<div class="row"  style="margin-top: -50%;">
  <div class="col s12 m4 l4 center">
    <div class="card-panel white">
      <span class="card-title">Application Users</span>
      <canvas id="myChart"></canvas>
    </div>
  </div>
  <div class="col s12 m4 l4 center">
    <div class="card-panel white">
      <span class="card-title">Delivery Stops</span>
      <canvas id="myChart2"></canvas>
    </div>
  </div>
  <div class="col s12 m4 l4 center">
    <div class="card-panel white">
    <span class="card-title">Reseller Sales</span>
      <canvas id="myChart3"></canvas>
    </div>
  </div>
</div>

<div class="row" style="margin-top: -100%;" >
  <div class="col s12 m4 l6 center">
    <div class="card-panel white">
      <span class="card-title">Daily Sales Of Cafeterias</span>
      <canvas id="sales"></canvas>
    </div>
  </div>
  <div class="col s12 m4 l6 center">
    <div class="card-panel white">
      <span class="card-title">Application Usage</span>
      <canvas id="appUsage"></canvas>
    </div>
  </div>
</div>


</div>

<ul class="side-nav fixed ">
  <li><div class="userView">
    <div class="background">
      <img style="width: 30vw; height: 30vh;" src="../images/sidImage.jpeg">
    </div>
    <a href="#!user"><img class="circle" src="../images/admin.jpg"></a>
    <a href="#!name"><span class="white-text name">Admin Name</span></a>
    <a href="#!email"><span class="white-text email">aname@food.com</span></a>
  </div ></li>
  <li class="active"><a href="superadmin.php" style="color:#be1e2d;"><i class="material-icons" style="color:#be1e2d;">dashboard</i>Dashboard</a></li>
  <li><div class="divider"></div></li>
  <li><a href="vendorpanel.php" style="color:#be1e2d;"><i class="material-icons" style="color:#be1e2d;">payment</i>Vendors</a></li>
  <li><div class="divider"></div></li>
  <li><a href="reseller.php" style="color:#be1e2d;"><i class="material-icons" style="color:#be1e2d;">payment</i >Voucher Resellers</a></li>

  <div id="logBTN">
    <li><div class="divider"></div></li>
    <li><a href="#!" style="background-color:#9d1e2d; color:#ffffff;"><i class="material-icons" style="color:#ffffff;">lock</i>Log Out</a></li>

  </div>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>

<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Stufulty", "Students"],
      datasets: [{
        backgroundColor: [
        "#52bf8a",
        "#35404f",
        ],
        data: [30, 70]
      }]
    }
  });

  var ctx = document.getElementById("myChart2").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Stufulty", "Students"],
      datasets: [{
        backgroundColor: [
        "#52bf8a",
        "#35404f",
        ],
        data: [30, 70]
      }]
    }
  });

  var ctx = document.getElementById("myChart3").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Stufulty", "Students"],
      datasets: [{
        backgroundColor: [
        "#52bf8a",
        "#35404f",
        ],
        data: [30, 70]
      }]
    }
  });

  var ctx = document.getElementById('sales').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
      datasets: [{
        label: 'Big Ben',
        data: [12, 19, 3, 17, 6, 3, 7],
        backgroundColor: "rgba(53,64,79,0.4)"
      }, {
        label: 'Akonor',
        data: [2, 29, 5, 5, 2, 3, 10],
        backgroundColor: "rgba(82,191,138,0.4)"
      }]
    }
  });

  var ctx = document.getElementById('appUsage').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
      datasets: [{
        label: 'Usage',
        data: [12, 19, 45, 17, 36, 75, 27],
        backgroundColor: "#be1e2d"
      }]
    }
  });

  var ctx = document.getElementById("myChart3").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["M", "T", "W", "T", "F", "S", "S"],
      datasets: [{
        label: 'Essentials',
        data: [12, 19, 3, 17, 28, 24, 7],
        backgroundColor: "rgba(153,255,51,1)"
      }, {
        label: 'Bens Spot',
        data: [30, 29, 5, 5, 20, 3, 10],
        backgroundColor: "rgba(255,153,0,1)"
      }]
    }
  });

  var ctx = document.getElementById("myChart2");
var myChart = new Chart(ctx, {
  type: 'radar',
  data: {
    labels: ["On Campus", "Dufie", "Charlotte", "Hosanna", "Masere", "Colombiana", "Queen Star"],
    datasets: [{
      label: 'Delievery',
      backgroundColor: "rgba(153,255,51,0.4)",
      borderColor: "rgba(153,255,51,1)",
      data: [12, 19, 3, 17, 28, 24, 7]
    }]
  }
});

</script>

</body>
</html>