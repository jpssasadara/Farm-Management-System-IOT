var app = angular.module("mainapp", ["ngRoute"]);
app.config(function($routeProvider) {
   $routeProvider
    .when("/", {
        templateUrl : "view/login.html"
    })
    
    .when("/adminwelcome", {
        templateUrl : "view/adminwelcome.html"
    })
    .when("/farmshopwelcome", {
        templateUrl : "view/farmshopwelcome.html"
    })
/*
    .when("/pos", {
        templateUrl : "view/invoice.php"
    })

    .when("/posAdd", {
        templateUrl : "view/invoice.php?add=1"
    })*/

    
     .when("/admin",{

        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/admin.html",
        
     })
      .when("/admin_register_Cashier",{
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/RegisterCashier.html"
     })
      .when("/admin_register",{
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/RegisterAdmin.html"
     })
      .when("/admin_register/view",{
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/ViewAdminDetails.html"
     })
      .when("/admin_register_Cashier/view",{                    
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/ViewEmployeeDetails.html"
     })
      .when("/admin_register/update",{                    
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/EditAdminDetails.html"
     })

      .when("/admin/AddItem/details",{                    
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/Items.html"
     })

     .when("/admin/location",{                    
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/map.html"
     })

      .when("/forPOS",{                    
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/farmshop.html"
     })

     .when("/forPOS/reports",{                    
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "view/reports.html"
     })

       .when("/get/tem/hum",{                    
        resolve:{
            "check":function($location,$rootScope){
                if(!$rootScope.loggedIn){
                    $location.path('/');
                }
            }
        },
        templateUrl: "https://sasadaramonker.000webhostapp.com/app/index.html"
     })

     .otherwise({
        redirectTo:'/'
     })



    
    
});


//Controller for Admin and Farmshop Login button
app.controller("loginbuttonctrl",function($scope,$location){
    $scope.admin=function(){
        $location.path('/adminwelcome');
    };
     $scope.farmshop=function(){
        $location.path('/farmshopwelcome');
    };
    
         

});

/*
app.controller("posCtrl",function($scope,$location){
    $scope.pos=function(){
        $location.path('/pos');
    }
    $scope.posAdd=function(){
        $location.path('/posAdd');
    }
});
*/

//Controller for Admin Login page
app.controller('adminloginctrl',function($scope,$location,$rootScope,$http){
    $scope.submit=function(){
        $http.post(  
                "module/getAdminUnPw.php",  
                {'username':$scope.username}  
           ).success(function(data){ 

                
                if($scope.password==data.value&&data.value!=null){
                     $rootScope.loggedIn=true;
                     $location.path('/admin');
                     swal({
                        position: 'top-end',
                        type: 'success',
                        title: 'Welcome '+$scope.username,
                        showConfirmButton: false,
                        timer: 5000
                      });
                }
                else{
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Wrong Stuff !',
                        footer: 'Please Enter Valid UserName & Password'
                      });
                     } 
           }); 

           } 

    });

//Controller for shop Login page
app.controller('shop',function($scope,$location,$rootScope,$http){
    $scope.loginshop=function(){

        $http.post(  
                "module/GetShopUnPw.php",  
                {'username':$scope.username}  
           ).success(function(data){ 

                
                if($scope.password==data.value&&data.value!=null){
                     $rootScope.loggedIn=true;
                     $location.path('/forPOS');
                     swal({
                        position: 'top-end',
                        type: 'success',
                        title: 'Welcome '+$scope.username,
                        showConfirmButton: false,
                        timer: 5000
                      });
                }
                else{
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Wrong Stuff !',
                        footer: 'Please Enter Valid UserName & Password'
                      });
                     } 
           }); 

           } 

    });




//After login Admin Dashboard Controllers
app.controller("Admincontroller",function($scope,$location){
     $scope.cashierReg=function(){
        $location.path('/admin_register_Cashier');
    };
    $scope.adminReg=function(){
        $location.path('/admin_register');
    };
    $scope.adminView=function(){
        $location.path('/admin_register/view');
    };
    $scope.cashierView=function(){
        $location.path('/admin_register_Cashier/view');
    };
    $scope.addItems=function(){
        $location.path('/admin/AddItem/details');
    };
    $scope.viewLocation=function(){
        $location.path('/admin/location');
    };
    $scope.temhum=function(){
        $location.path('/get/tem/hum');
    };

});


//FamrSHop Controller
app.controller("FarmShopController",function($scope,$http,$location){
    $scope.displayReport = function(){  
        $http.get("module/FarmShop/farmshop.php")  
        .success(function(data){  
             $scope.items = data;

            //alert($scope.total);  
        });  
   }
   $scope.viewReports=function(){
    $location.path('/forPOS/reports');
};

});


//EMPLOYEE Details Controller <<Add>> <<Update>> <<Delete>>
app.controller("RegisterCashierController",function($scope,$http){
     $scope.Reg=function(){
        $http.post(
            "module/Employee/Employee.php",
            {'id':$scope.id,'firstname':$scope.firstname,'lastname':$scope.lastname,'phonenumber':$scope.phonenumber,'email':$scope.email,'address':$scope.address,'salary':$scope.salary,'username':$scope.username,'password':$scope.password}
            ).success(function(data){
                 if(data.error)
                       {
                        $scope.errorid = data.error.id;
                        $scope.errorfirstname = data.error.firstname;
                        $scope.errorlastname = data.error.lastname;
                        $scope.errorphonenumber = data.error.phonenumber;
                        $scope.erroremail = data.error.email;
                        $scope.erroraddress = data.error.address;
                        $scope.errorsalary = data.error.salary;
                        $scope.errorusername = data.error.username;
                        $scope.errorpassword = data.error.password;
                        

                        $scope.successInsert = null;
                       }
                       else
                       {
                        $scope.errorid = null;
                        $scope.errorfirstname = null;
                        $scope.errorlastname = null;
                        $scope.errorphonenumber = null;
                        $scope.erroremail = null;
                        $scope.erroraddress = null;
                        $scope.errorsalary = null;
                        $scope.errorusername = null;
                        $scope.errorpassword = null;
                        $scope.successInsert = data.message;
                        
                        if($scope.username!=null){
                            swal({
                                position: 'top-end',
                                type: 'success',
                                title: 'Register Success! '+$scope.username,
                                showConfirmButton: false,
                                timer: 5000
                              });
                        }

                        $scope.displayData2();

                        $scope.id=null;
                        $scope.firstname=null;
                        $scope.lastname=null;
                        $scope.phonenumber=null;
                        $scope.email=null;
                        $scope.address=null;
                        $scope.salary=null;
                        $scope.username=null;
                        $scope.password=null;
                       }
                      });


    }
    $scope.displayData2 = function(){  
           $http.get("module/Employee/ViewEmployeeDetails.php")  
           .success(function(data){  
                $scope.names = data;
                
               //alert(data);  
           });  
      }

      

       $scope.updateData = function(){
             
           $http.post(  
                "module/Employee/ViewEmployeeDetailsEdit.php",  
                {'id':$scope.id,'firstname':$scope.firstname,'lastname':$scope.lastname,'phonenumber':$scope.phonenumber,'email':$scope.email,'address':$scope.address,'salary':$scope.salary,'username':$scope.username,'password':$scope.password}  
           ).success(function(data){
                 
                       if(data.error)
                       {
                        
                        $scope.errorid = data.error.id;
                        $scope.errorfirstname = data.error.firstname;
                        $scope.errorlastname = data.error.lastname;
                        $scope.errorphonenumber = data.error.phonenumber;
                        $scope.erroremail = data.error.email;
                        $scope.erroraddress = data.error.address;
                        $scope.errorsalary = data.error.salary;
                        $scope.errorusername = data.error.username;
                        $scope.errorpassword = data.error.password;
                        

                        $scope.successInsert = null;
                        swal({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Wrong Stuff !',
                            footer: 'Please Enter Details you want to Update'
                          });
                       }
                       else
                       {
                        
                        $scope.errorid = null;
                        $scope.errorfirstname = null;
                        $scope.errorlastname = null;
                        $scope.errorphonenumber = null;
                        $scope.erroremail = null;
                        $scope.erroraddress = null;
                        $scope.errorsalary = null;
                        $scope.errorusername = null;
                        $scope.errorpassword = null;
                        $scope.successInsert = data.message;

                        $scope.displayData2();

                        $scope.id=null;
                        $scope.firstname=null;
                        $scope.lastname=null;
                        $scope.phonenumber=null;
                        $scope.email=null;
                        $scope.address=null;
                        $scope.salary=null;
                        $scope.username=null;
                        $scope.password=null;
                        swal(
                            'Update Success!'
                        );
                       }
                      });
      }
      $scope.updateDataAdmin =function(i1,i2,i3,i4,i5,i6,i7,i8,i9){  
                        $scope.id=i1;
                        $scope.firstname=i2;
                        $scope.lastname=i3;
                        $scope.phonenumber=i4;
                        $scope.email=i5;
                        $scope.address=i6;
                        $scope.salary=i7;
                        $scope.username=i8;
                        $scope.password=i9;
            
      };

      $scope.deleteDataAdmin = function(idd){  
                      
           
           swal({
            title: 'Are you sure?',
            text: "You want to delete this data?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              $http.post("module/Employee/ViewEmployeeDetailsDelete.php", {'id':idd})  
                .success(function(data){  
                     //alert(data);  
                     $scope.displayData2();  
                });
            }
            else  
           {  
                return false;  
           } 
          });
      }
 }); 




//ADMIN Details Controller <<Add>> <<Update>> <<Delete>>
app.controller("RegisterAdminController", function($scope, $http){

      $scope.insertData = function(){  
           $http.post(  
                "module/Admin/admin.php",  
                {'id':$scope.id,'username':$scope.username, 'password':$scope.password}  
           ).success(function(data){
                 if(data.error)
                       {
                        $scope.errorid = data.error.id;
                        $scope.errorusername = data.error.username;
                        $scope.errorpassword = data.error.password;
                    
                        swal(
                            data.message
                          );
                       
                       }
                       else
                       {
                        $scope.errorid = null;
                        $scope.errorusername = null;
                        $scope.errorpassword = null;

                        swal(
                            data.message
                        );
                         $scope.displayData();
                        $scope.username = null;  
                        $scope.password = null;
                        $scope.id = null;
                       }
                      });
      } 

       $scope.updateData = function(){  
           $http.post(  
                "module/Admin/ViewAdminDetailsEdit.php",  
                {'id':$scope.id,'username':$scope.username, 'password':$scope.password}  
           ).success(function(data){
                 if(data.error)
                       {
                        $scope.errorid = data.error.id;
                        $scope.errorusername = data.error.username;
                        $scope.errorpassword = data.error.password;
                        swal(
                            data.message
                        );
                        
                       }
                       else
                       {
                        $scope.errorid = null;
                        $scope.errorusername = null;
                        $scope.errorpassword = null;

                        swal(
                            data.message
                          );
                        $scope.displayData();
                        $scope.username = null;  
                        $scope.password = null;
                        $scope.id = null;
                       }
                      });
      } 

       $scope.displayData = function(){  
           $http.get("module/Admin/ViewAdminDetails.php")  
           .success(function(data){  
                $scope.names = data;
               //alert(data);  
           });  
      }

       $scope.updateDataAdmin =function(id, first_name, last_name){  
            $scope.id = id;  
            $scope.username = first_name;  
            $scope.password = last_name; 
            
      }

     $scope.deleteDataAdmin = function(idd){  
           if(confirm("Are you sure you want to delete this data?"))  
           {  
                $http.post("module/Admin/ViewAdminDetailsDelete.php", {'id':idd})  
                .success(function(data){  
                     //alert(data);  
                     $scope.displayData();  
                });  
           }  
           else  
           {  
                return false;  
           }  
      }
 });  



//Add Edit Items details
 app.directive("fileInput", function($parse){  
      return{  
           link: function($scope, element, attrs){  
                element.on("change", function(event){  
                     var files = event.target.files;  
                     //console.log(files[0].name);  
                     $parse(attrs.fileInput).assign($scope, element[0].files);  
                     $scope.$apply();
                });  
           }  
      }  
 });  
 app.controller("AddItemDetails", function($scope, $http){  
  //upload image in to file and add location of image and image id in to image table
      $scope.uploadFile = function(){  
           var form_data = new FormData();  
           angular.forEach($scope.files, function(file){ 
                form_data.append('file', file);
                 
           });  
           $http.post('module/Items/upload.php', form_data,  
           {  
                transformRequest: angular.identity,  
                headers: {'Content-Type': undefined,'Process-Data': false}  
           }).success(function(response){  
                swal(response);  
                  
           });
           $scope.uploadFileData();  
      } 
      //get all data by joinning image table and items data table <<by equaling image id>> 
      $scope.select = function(){  
           $http.get("module/Items/select.php")  
           .success(function(data){  
                $scope.images = data;  
           });  
      }

      $scope.selectFruit = function(){  
           $http.get("module/Items/selectFruit.php")  
           .success(function(data){  
                $scope.imagesFruit = data;  
           });  
      }

      //set data to the drope down list
      $scope.SetUnit=function(x){
          $scope.unit=x;
      }
      //set data to the drope down list
       $scope.SetType=function(x){
          $scope.Type=x;
      }

      $scope.uploadFileData = function(){  
           
        //add data with image id which is in image table        
           $http.post('module/Items/uploadData.php',
           {'code':$scope.code,'name':$scope.name,'price':$scope.price,'amount':$scope.amount,'unit':$scope.unit,'discount':$scope.discount,'Type':$scope.Type}  
            ).success(function(response){  
                swal(response);
                $scope.select(); 
                $scope.selectFruit();
                $scope.code=null;
                $scope.name=null;
                $scope.price=null;
                $scope.amount=null;
                $scope.unit=null;
                $scope.discount=null;
                $scope.Type=null;  
           });  
      }  

      //Update Details
      $scope.updateItems =function(i1,i2,i3,i4,i5,i6,i7){  
                        $scope.code=i1;
                        $scope.name=i2;
                        $scope.unit=i3;
                        $scope.amount=i4;
                        $scope.price=i5;
                        $scope.discount=i6;
                        $scope.Type=i7;
            
      };
      $scope.updateItemsData = function(){  
           $http.post(  
                "module/Items/UpdateItems.php",  
                {'code':$scope.code,'name':$scope.name,'price':$scope.price,'amount':$scope.amount,'unit':$scope.unit,'discount':$scope.discount,'Type':$scope.Type}  
           ).success(function(data){
                 
                       
                        $scope.code = null;
                        $scope.name = null;
                        $scope.price = null;
                        $scope.amount = null;  
                        $scope.unit = null;
                        $scope.discount = null;
                        $scope.Type=null;

                        swal("Updated!");
                        $scope.select();
                        $scope.selectFruit();
                      });
      }

       $scope.deleteItems = function(idd){  
           swal({
            title: 'Are you sure?',
            text: "You want to delete this data?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              swal(
                'Deleted!',
                'Your Data has been deleted.',
                'success'
              )
              $http.post("module/Employee/ViewEmployeeDetailsDelete.php", {'id':idd})  
                .success(function(data){  
                     //alert(data);  
                     $scope.displayData2();  
                });
                $http.post("module/Items/DeleteItems.php", {'id':idd})  
                .success(function(data){  
                     //alert(data);  
                      $scope.select();
                      $scope.selectFruit();  
                }); 
            }
            else  
           {  
                return false;  
           } 
          });   
      } 

      //for init 
       $scope.load = function(){  
          $scope.select();
          $scope.selectFruit(); 
      } 



 }); 
     
//image.code, image.name, image.unit,image.amount,image.price,image.discount 

/*app.controller("AddItemDetails", function($scope, $http){  
      $scope.uploadFile = function(){  
           var form_data = new FormData(); 

           angular.forEach($scope.files, function(file){ 
                form_data.append('file', file);
                 
           }); 
                form_data.append('code', $scope.code);
                form_data.append('name', $scope.name);
                form_data.append('price', $scope.price);
                form_data.append('amount', $scope.amount);
                form_data.append('unit', $scope.unit);
                form_data.append('discount', $scope.discount);  
           $http.post('module/Items/upload.php', form_data,  
           {  
                transformRequest: angular.identity,  
                headers: {'Content-Type': undefined,'Process-Data': false}  
           }).success(function(response){  
                alert(response);  
                $scope.select();  
           });  
      }  
      $scope.select = function(){  
           $http.get("module/Items/select.php")  
           .success(function(data){  
                $scope.images = data;  
           });  
      }  
 }); */
