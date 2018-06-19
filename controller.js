var app = angular.module("mainapp", ["ngRoute"]);
app.config(function($routeProvider) {
   $routeProvider
    .when("/", {
        templateUrl : "home.html"
    })
    .when("/vegetable", {
        templateUrl : "vegetable.html"
    })
    .when("/fruit", {
        templateUrl : "fruit.html"
    })
    .when("/others", {
        templateUrl : "others.html"
    })
    .when("/courses", {
        templateUrl : "courses.html"
    })
     .when("/about", {
        templateUrl : "about.html"
    })
    .when("/login", {
        templateUrl : "login.html"
    })
    .when("/adminwelcome", {
        templateUrl : "adminwelcome.html"
    })
    .when("/farmshopwelcome", {
        templateUrl : "farmshopwelcome.html"
    })
    .when("/economycenterwelcome", {
        templateUrl : "economycenterwelcome.html"
    })
     .when("/registeredfarmerwelcome", {
        templateUrl : "registeredfarmerwelcome.html"
    })
     .when("/registeredshopwelcome", {
        templateUrl : "registeredshopwelcome.html"
    })
     .when("/admin",{
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "admin.html"
     })
     .otherwise({
        redirectTo:'/'
     })

    
    
});

app.controller("loginbuttonctrl",function($scope,$location){
    $scope.admin=function(){
        $location.path('/adminwelcome');
    };
     $scope.farmshop=function(){
        $location.path('/farmshopwelcome');
    };
     $scope.economycenter=function(){
        $location.path('/economycenterwelcome');
    };
     $scope.registeredfarmer=function(){
        $location.path('/registeredfarmerwelcome');
    };
     $scope.registeredshop=function(){
        $location.path('/registeredshopwelcome');
    };
    
    

});

app.controller('adminloginctrl',function($scope,$location,$rootScope){
    $scope.submit=function(){
        if($scope.username=="admin" && $scope.password=="abc"){
            $rootScope.loggedIn=true;
            $location.path('/admin');
        }else{
            alert("Wrong Stuff");
        }
    };
});

