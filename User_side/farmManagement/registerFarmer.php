
<?php

//registerFarmer.php

session_start() ;

?>
<!DOCTYPE html>
<html>
<head>
    <title>labuduuwa Farm</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login Here!</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <style>
        body {
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
        }
        .navbar {
            margin-bottom: 0;
            background-color: #000000;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
        }
        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #000000 !important;
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        .dropbtn {
            background-color: #000000;
            color: #ffffff;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #000000;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #534d53;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #8a848a;}
        .carousel-inner img {

            width: 100%; /* Set width to 100% */
            height: 100%;
            margin: auto;
        }
        .container-fluid {
            padding: 60px 50px;
        }
        .bg-grey {
            background-color: #ffffff;
        }

        .logo {
            color: #51bf28;
            font-size: 200px;
        }
        h2 {
            font-size: 24px;
            text-transform: uppercase;
            color: #303030;
            font-weight: 600;
            margin-bottom: 30px;
        }
        h4 {
            font-size: 19px;
            line-height: 1.375em;
            color: #303030;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        .thumbnail img {
            width: 400px;
            height: 200px;
            margin-bottom: 10px;
        }
        footer {
            background-color: #000000;
            color: #ffffff;
            padding: 32px;
        }

        footer a {
            color: #ffffff;
        }

        footer a:hover {
            color: #777;
            text-decoration: none;
        }
        .form_style
        {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LABUDUWA FARM</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#services">SERVICES</a></li>
                    <li><a href="View_Course.html">COURSES</a></li>
                    <li><a href="pricing.html">PRICING</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <ul class="nav navbar-nav navbar-right">
                        <!--li><a href="Registration.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li-->
                        <li><div class="dropdown">
                                <a><button class="dropbtn"><span class="glyphicon glyphicon-log-in"></span> Sign in | Sign up</button></a>
                                <div class="dropdown-content">
                                    <div ng-controller="loginbuttonctrl">
                                        <a ng-click="farmshop()"    href="registerShops.php" >Registered Shop</a>
                                        <a href="registerFarmer.php">Registered Farmer</a>
                                        <a ng-click="farmshop1()"    href="FarmShopLoginForm.html" >Student</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--li><a href="FarmShopLoginForm.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li-->
                    </ul>
                </ul>
            </div>
        </div>

    </nav>
<br />
<h3 align="center">Login Here!</h3>
<br />

<div ng-app="login_register_app" ng-controller="login_register_controller" class="container form_style">
    <?php
    if(!isset($_SESSION["name"]))
    {
        ?>
        <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
            <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
            {{alertMessage}}
        </div>

        <div class="panel panel-default" ng-show="login_form">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <form method="post" ng-submit="submitLogin()">
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="text" name="email" ng-model="loginData.email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Password</label>
                        <input type="password" name="password" ng-model="loginData.password" class="form-control" />
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="login" class="btn btn-primary" value="Login" />
                        <br />
                        <input type="button" name="register_link" class="btn btn-primary btn-link" ng-click="showRegister()" value="Register" />
                    </div>
                </form>
            </div>
        </div>

        <div class="panel panel-default" ng-show="register_form">
            <div class="panel-heading">
                <h3 class="panel-title">Register</h3>
            </div>
            <div class="panel-body">
                <form method="post" ng-submit="submitRegister()">
                    <div class="form-group">
                        <label>Enter Your Name</label>
                        <input type="text" name="name" ng-model="registerData.name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Mobile Number</label>
                        <input type="text" name="mobile" ng-model="registerData.mobile" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Gender</label>
                        <input type="text" name="gender" ng-model="registerData.gender" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Address</label>
                        <input type="text" name="address" ng-model="registerData.address" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="text" name="email" ng-model="registerData.email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Your Password</label>
                        <input type="password" name="password" ng-model="registerData.password" class="form-control" />
                    </div>
                    <div class="form-group" align="center">
                        <input type="submit" name="register" class="btn btn-primary" value="Register" />
                        <br />
                        <input type="button" name="login_link" class="btn btn-primary btn-link" ng-click="showLogin()" value="Login" />
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
    else
    {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Welcome to system</h3>
            </div>
            <div class="panel-body">
                <h1>Welcome - <?php echo $_SESSION["name"];?></h1>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</div>

    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>

        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 py-5">
                    <div class="mb-5 flex-center">

                        <!-- Facebook -->
                        <div class="col-md-2 mb-md-1 mb-1">
                            <a class="fb-ic">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- Twitter -->
                        <div class="col-md-2 mb-md-1 mb-1">
                            <a class="tw-ic">
                                <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                        </div>
                        <!-- Google +-->
                        <div class="col-md-2 mb-md-1 mb-1">
                            <a class="gplus-ic">
                                <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                        </div>
                        <!--Linkedin -->
                        <div class="col-md-2 mb-md-1 mb-1">
                            <a class="li-ic">
                                <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                        </div>
                        <!--Instagram-->
                        <div class="col-md-2 mb-md-1 mb-1">
                            <a class="ins-ic">
                                <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                        </div>
                        <!--Pinterest-->
                        <div class="col-md-2 mb-md-1 mb-1">
                            <a class="pin-ic">
                                <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Elements -->


        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <!---<a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>>
        </div>
        <!-- Copyright -->
        </div>
    </footer>

    <script>
        $(document).ready(function(){
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>

</div>
</body>
</html>

<script>
    var app = angular.module('login_register_app', []);
    app.controller('login_register_controller', function($scope, $http){
        $scope.closeMsg = function(){
            $scope.alertMsg = false;
        };

        $scope.login_form = true;

        $scope.showRegister = function(){
            $scope.login_form = false;
            $scope.register_form = true;
            $scope.alertMsg = false;
        };

        $scope.showLogin = function(){
            $scope.register_form = false;
            $scope.login_form = true;
            $scope.alertMsg = false;
        };

        $scope.submitRegister = function(){
            $http({
                method:"POST",
                url:"register.php",
                data:$scope.registerData
            }).success(function(data){
                $scope.alertMsg = true;
                if(data.error != '')
                {
                    $scope.alertClass = 'alert-danger';
                    $scope.alertMessage = data.error;
                }
                else
                {
                    $scope.alertClass = 'alert-success';
                    $scope.alertMessage = data.message;
                    $scope.registerData = {};
                }
            });
        };

        $scope.submitLogin = function(){
            $http({
                method:"POST",
                url:"login.php",
                data:$scope.loginData
            }).success(function(data){
                if(data.error != '')
                {
                    $scope.alertMsg = true;
                    $scope.alertClass = 'alert-danger';
                    $scope.alertMessage = data.error;
                }
                else
                {
                    location.reload();
                }
            });
        };

    });
</script>
