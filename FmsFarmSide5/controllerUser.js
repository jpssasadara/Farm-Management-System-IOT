var app = angular.module("mainapp", ["ngRoute"]);
app.config(function($routeProvider) {
   $routeProvider
    .when("/Regfarmer/order", {
        templateUrl : "ViewUser/regfarmerOderItems.html"
    })
    .when("/", {
        templateUrl : "ViewUser/UserWebSiteHome.html"
    })

    });

//$scope.idFarmer=$rootScope.loggedFarmerId;
app.controller("AddOrderView",function($scope,$location){
    $scope.AddOrderView=function(){
    	$rootScope.loggedFarmerId="sasa";
        $location.path('/Regfarmer/order');
    };
    
     
    
    

});