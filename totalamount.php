<!DOCTYPE html>
<html lang="en">
<head>
  <title>Farm Management System Analysis</title>
  
  <link rel="icon" type="image/png" href="img/title.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- //web-fonts -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
  <!-- //time -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.all.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="js/jquery.min.js"></script>

	<!-- date-->
  <link rel="stylesheet" href="css/jquery-ui.css" />
  <!-- time -->
	<script src="js/wickedpicker.js"></script>
  <script src="js/jquery-ui.js"></script>

  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
  
  <link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
  <!-- //time -->
  

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<script src="angular.min.js"></script>
<script src="angular-route.js"></script>
<script src ="controller.js"></script> 

<!--angularjs cookies.js lib --> 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-cookies.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.all.min.js"></script>
<style>

  .blog .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
}

.blog .carousel-indicators .active {
background: #707070;
}


    .abc-cc {
        background-color: black;
        padding: 16px;
        text-align: center;
    }
    .abc-ccc {
        background-color: #f0f0f0;
        padding: 1px;
        text-align: center;
    }
    .abc-c {
        
        text-shadow: 1px 1px #ccc;
    }
    .footer {
  background: rgb(0,0,0);
  padding: 10px 0;
}
.footer a {
  color: #70726F;
  font-size: 20px;
  padding: 10px;
  border-right: 1px solid #70726F;
  transition: all .5s ease;
}
.footer a:first-child {
  border-left: 1px solid #70726F;
}
.footer a:hover {
  color: white;
}
    </style>
    <link rel="stylesheet" href="w3.css">
</head>
<body ng-app="mainapp">
  <div class="container">
<div class="text-white">


<div ng-controller="nav"  ng-init = "setNameLogin()">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#/home">FMS</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href='#/'><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href='#/login'>
          <span class="glyphicon glyphicon-file"></span>About</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a ng-click="logoutA()" ><span class="glyphicon glyphicon-log-in"></span>{{adminname}}</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a ng-click="logoutS()" ><span class="glyphicon glyphicon-log-in"></span>{{shopname}}</a></li>
      </ul>

      
    </div>
  </nav>
</div>
  


  

<div class="row"></div>

<!--
<img src="img\logo.png" alt="Logo" class="img-thumbnail" style="width:20%">
-->

<div id="myCarousel" class="carousel slide" data-interval="6000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
    <!-- Carousel items -->
    <div class="carousel-inner" role="listbox" style=" width:100%; height:250px !important;">
        <div class="item active">
            <img src="img/y.jpg" alt="First Slide" width="100%">
            <div class="carousel-caption">
                <h3>Vegetables and Fruits</h3>
                <p>There are fresh vegetables and fruits</p>
            </div>
        </div>
        <div class="item">
            <img src="img/z.jpg" alt="Second Slide" width="100%" >
            <div class="carousel-caption">
                <h3>Clean Milk Products</h3>
                <p>Fresh Milk Products with good condition</p>
            </div>
        </div>
        <div class="item">
            <img src="img/zz.jpg" alt="Third Slide" width="100%">
            <div class="carousel-caption">
                <h3>Farm House</h3>
                <p>Vegetables , fruits & beans from farm house</p>
            </div>
        </div>
    </div>

  
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>




      <div class="w3-animate-fading"><center><b class="abc-c">Labuduwa Farm Akmeemana, Galle.</b></center></div></div>
  </h1>
</div>
</div>
<hr>

<div class="container container-fluid">
<?php
$con=mysqli_connect("localhost","root","","fmsmy");
$query="SELECT * FROM pricelist";
$result= mysqli_query($con,$query);
$data=array();
$i=0;

?>
<?php
$i=0;
while($row = mysqli_fetch_array($result)){
	$dataPoints[$i] =array("label"=>$row["productName"], "y"=>$row["price"]);
	$i++;
}
	
?>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Price Comparison"
	},
	axisY: {
		title: "Price of a Unit(Rs.)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</div>

<div class="footer">
  <div class="container text-center">
    <a href=""><i class="fa fa-facebook"></i></a>
    <a href=""><i class="fa fa-twitter"></i></a>
    <a href=""><i class="fa fa-linkedin"></i></a>
    <a href=""><i class="fa fa-google-plus"></i></a>
    <a href=""><i class="fa fa-skype"></i></a>
  </div>
  
<div class="abc-cc" style="width:100%">
  
  &copy Farm Management<br/>
Contact : 011 2 541 214<br/>
farmmanagement@gmail.com
</div>
</div></div>



</body>
</html>

  
