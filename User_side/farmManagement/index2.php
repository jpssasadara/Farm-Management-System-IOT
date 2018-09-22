<?php

    session_start();
//global $registerData;
//$this->registerData = $registerData;
//global  $loginData;
//$this->loginData = $loginData;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <title>Register Login Script using PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <style>
    .form_style{

        width: 600px;
        margin: 0 auto;
    }
    </style>
</head>
<body>
     <br />
         <h3 align="center">Register Login Script

         </h3>
     <br />

     <div ng-app="login_register_app" ng-controller="login_register_controller" class="container form_style">
         <?php
            if(isset($_SESSION["name"]))
            {
         ?>
         ?>
         <div class="alert{{alertClass}} alert-dismissible" ng-show="alertMsg">
             <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
             {{alertMessage}}
         </div>------>




         <div class="panel panel-default" ng-show="login_form">
             <div class="panel-heading">
                 <h3 class="panel-title">Login</h3>
             </div>
             <div class="panel-body">
                 <form method="post" ng-submit="submitLogin()">
                     <div class="form_group">
                         <label>Enter Your Email</label>
                         <input type="text" name="email" ng-model="loginData.email" class="form-control"/>
                     </div>
                     <div class="form_group">
                         <label>Enter Your Password</label>
                         <input type="password" name="password" ng-model="loginData.password" class="form-control"/>
                     </div>
                     <div class="form_group" align="center">

                         <input type="submit" name="login" class="btn btn-primary" value="Login"/>
                         <input type="button" name="register_link" class="btn btn-primary btn-link"
                                ng-click="showRegister()" value="Register"/>
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
                         <input type="text" name="name" ng-model="registerData.name" class="form-control"/>
                     </div>
                     <div class="form-group">
                         <label>Enter Your Email</label>
                         <input type="text" name="email" ng-model="registerData.email" class="form-control"/>
                     </div>
                     <div class="form-group">
                         <label>Enter Your Password</label>
                         <input type="password" name="password" ng-model="registerData.password" class="form-control"/>
                     </div>
                     <div class="form_group" align="center">

                         <input type="submit" name="register" class="btn btn-primary" value="Register"/>
                         <input type="button" name="login_link" class="btn btn-primary btn-link" ng-click="showLogin()"
                                value="Login"/>
                     </div>
                 </form>
             </div>
         </div>
         <?php
         }
          else {
              ?>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel+title">Welcome to system</h3>
                  </div>
                  <div class="panel-body">
                     <h1>Welcome -<?php echo $_SESSION["name"];?></h1>
                      <a href="logout.php">Logout</a>
                  </div>
              </div>
              <?php
          }
         ?>
     </div>

</body>
</html>
<script>
var app=angular.module('login_register_app',[]);
app.controller('login_register_controller',function ($scope,$http) {
    $scope.closeMsg=function () {
        $scope.alertMsg=false;

    };
    $scope.login_form=true;

   $scope.showRegister=function () {
        $scope.login_form=false;
        $scope.register_form=true;
        $scope.alertMsg=false;
    };

    $scope.showLogin=function () {
        $scope.register_form=false;
        $scope.login_form=true;
        $scope.alertMsg=false;
    };
    
    $scope.submitRegister=function () {

        $http({
            method:"POST",
            url:"register.php",
            data:$scope.registerData
        }).success(function (data) {
            $scope.alertMsg=true;
            if(data.error !=='')
            {
              $scope.alertClass='alert-danger';
              $scope.alertMessage=data.error;
            }
            else{
               $scope.alertClass='alert-success';
               $scope.alertMessage='data.message';
               $scope.registerData={};
            }
        });

    };
    $scope.submitLogin=function () {
        $http({
            method:"POST",
            url:"login.php",
            data:$scope.loginData
        }).success(function (data) {
            if(data.error !=='')
            {
               $scope.alertMsg=true;
               $scope.alertClass='alert-danger';
               $scope.alertMessage=data.error;
            }
            else
            {
                location.reload();
            }

        });
   };
});
</script>