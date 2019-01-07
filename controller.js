var app = angular.module("mainapp", ["ngRoute",'ngCookies']);
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
            "check":function($location,$cookies,$rootScope){
              //check cookie if it is not redirect to th '/'
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
              // fix names when refreshing there are three possibilities that can be happen
                if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
                
            }
        },
        templateUrl: "view/admin.html",
        
     })
      .when("/admin_register_Cashier",{
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
               } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/RegisterCashier.html"
     })
      .when("/admin_register",{
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
               } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/RegisterAdmin.html"
     })
      .when("/admin_register/view",{
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/ViewAdminDetails.html"

     })
      .when("/admin_register_Cashier/view",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/ViewEmployeeDetails.html"
     })
      .when("/admin_register/update",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/EditAdminDetails.html"
     })

      .when("/admin/AddItem/details",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/Items.html"
     })

     .when("/admin/analyse",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/analyse.html"
     })

     .when("/admin/forummessage",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/forummessage.html"
     })

     .when("/admin/farmerReg",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/farmerRegister.html"
     })
     //isuru
     .when("/admin/farmerview",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/viewfarmers.html"
     })
     //isuru

     .when("/admin/ShopRegister",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/shopRegister.html"
     })
     .when("/admin/ShopView",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/viewRegshop.html"
     })

     //isuru

     .when("/admin/addcources",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/addcources.html"
     })

     .when("/admin/viewcources",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/viewcources.html"
     })

     .when("/admin/location",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/map.html"
     })

      .when("/forPOS",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie2')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "view/farmshop.html"
     })

     .when("/forPOS/reports",{                    
        templateUrl: "view/reports.html"
     })

       .when("/get/tem/hum",{                    
        resolve:{
            "check":function($location,$cookies,$rootScope){
                if(!$cookies.get('cookie')){
                    $location.path('/');
                }
                 if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=$cookies.get('cookie2name');
                } else if ($cookies.get('cookiename')!=null){
                    $rootScope.adminname=$cookies.get('cookiename');
                    $rootScope.shopname=" LoginShop";
                }else if($cookies.get('cookie2name')!=null){
                    $rootScope.shopname=$cookies.get('cookie2name');
                    $rootScope.adminname=" LoginAdmin";
    
                }
            }
        },
        templateUrl: "https://sasadaramonker.000webhostapp.com/app/index.html"
     })
       .when("/get/regfarmer/order",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                        $rootScope.adminname=$cookies.get('cookiename');
                        $rootScope.shopname=$cookies.get('cookie2name');
                    } else if ($cookies.get('cookiename')!=null){
                        $rootScope.adminname=$cookies.get('cookiename');
                        $rootScope.shopname=" LoginShop";
                    }else if($cookies.get('cookie2name')!=null){
                        $rootScope.shopname=$cookies.get('cookie2name');
                        $rootScope.adminname=" LoginAdmin";
        
                    }
                  }
              },
              templateUrl: "view/viewRegShopOrders.html"
           })
       
         .when("/admin/handel/orders",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                       if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                        } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                        }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                }
                  }
              },
              templateUrl: "view/viewRegShopOrders.html"
           })
         
          .when("/admin/verified/orders",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                       if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
          
                      }
                  }
              },
              templateUrl: "view/viewRegShopOrderVerify.html"
           })
           .when("/admin/delivered/orders",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/viewRegShopOrderDelivered.html"
           })

           //sending email from view orders
            .when("/admin/handel/orders/email",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/viewRegShopOrdersEmail.html"
           })

//Notification/app
             .when("/Notification/app",{                    
                          resolve:{
                              "check":function($location,$cookies,$rootScope){
                                  if(!$cookies.get('cookie')){
                                      $location.path('/');
                                  }
                                  if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                                      $rootScope.adminname=$cookies.get('cookiename');
                                      $rootScope.shopname=$cookies.get('cookie2name');
                                  } else if ($cookies.get('cookiename')!=null){
                                      $rootScope.adminname=$cookies.get('cookiename');
                                      $rootScope.shopname=" LoginShop";
                                  }else if($cookies.get('cookie2name')!=null){
                                      $rootScope.shopname=$cookies.get('cookie2name');
                                      $rootScope.adminname=" LoginAdmin";
                
                                  }
                              }
                          },
                          templateUrl: "appnotification/push_notification.php"
                       })


           //**********************************developing yet*********************************************************
           .when("/admin/AddItem/load",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/loadItemsToStores.html"
           })

           ///admin/AddItem/loadRegFarmers
           // C:\xampp\htdocs\FmsFarmSide6\Farm-Management-System-IOT\view\loadItemsToStoresFromRegfarmers.html
           .when("/admin/AddItem/loadRegFarmers",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/loadItemsToStoresFromRegfarmers.html"
           })
          //************************************************************************************************************* 

          //view stores  & specially for fruits
          ///store/view 
          .when("/store/view",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/viewStores.html"
           })

           //view stores  & specially for Vegetables
          ///store/view 
          .when("/store/view/veg",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/viewStores2.html"
           })

          //loading farmshop

          .when("/load/farmshop",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/loadingFarmShop.html"
           })

          //view farmshop
          .when("/view/shoploading",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/viewFarmshop.html"
           })

        // loading Table for load shop
          .when("/sasadara",{                    
              resolve:{
                  "check":function($location,$cookies,$rootScope){
                      if(!$cookies.get('cookie')){
                          $location.path('/');
                      }
                      if ($cookies.get('cookiename')!=null && $cookies.get('cookie2name')!=null) {
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=$cookies.get('cookie2name');
                      } else if ($cookies.get('cookiename')!=null){
                          $rootScope.adminname=$cookies.get('cookiename');
                          $rootScope.shopname=" LoginShop";
                      }else if($cookies.get('cookie2name')!=null){
                          $rootScope.shopname=$cookies.get('cookie2name');
                          $rootScope.adminname=" LoginAdmin";
    
                      }
                  }
              },
              templateUrl: "view/viewLOadingShopDetails.html"
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

//Navigation bar logout
app.controller("nav",function($scope,$location,$cookies,$rootScope){
  $scope.setNameLogin = function(){
    //set name in login button
    $rootScope.adminname=" LoginAdmin";
    $rootScope.shopname=" LoginShop";
  };


  //logout for admin  
    $scope.logoutA=function(){
      //check whether there is a cookie 
      if ($cookies.get('cookie')) {
        swal({
            type: 'logout',
            title: 'bye...',
            text: 'You were logout !',
          });
        //remove login cookies
        $cookies.remove('cookie');
        //remove name of admin cookies
        $cookies.remove('cookiename');
        $rootScope.adminname=" LoginAdmin";
        $location.path('/adminwelcome');
      } else {
        $location.path('/adminwelcome');
        
      }
        
    };
//logout for shop    
     $scope.logoutS=function(){
      if ($cookies.get('cookie2')) {
        swal({
            type: 'logout',
            title: 'bye...',
            text: 'You were logout !',
        });
        $cookies.remove('cookie2');
        $cookies.remove('cookie2name');
        $rootScope.shopname=" LoginShop";
        $location.path('/farmshopwelcome');
      } else {
        $location.path('/farmshopwelcome');
        
      }
        
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
app.controller('adminloginctrl',function($scope,$cookies,$location,$rootScope,$http){
    $scope.submit=function(){
        $http.post(  
                "module/getAdminUnPw.php",  
                {'username':$scope.username}  
           ).success(function(data){ 

                
                if($scope.password==data.value&&data.value!=null){
                        //set login cookie
                        $cookies.put('cookie',true);
                        //set admin name in cookie
                        $cookies.put('cookiename'," Logout "+$scope.username);
                        //set name
                        $rootScope.adminname=$cookies.get('cookiename');
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
app.controller('shop',function($scope,$cookies,$location,$rootScope,$http){
    $scope.loginshop=function(){

        $http.post(  
                "module/GetShopUnPw.php",  
                {'username':$scope.username}  
           ).success(function(data){ 

                
                if($scope.password==data.value&&data.value!=null){
                    // $rootScope.loggedIn=true;
                     $cookies.put('cookie2',true);
                     $cookies.put('cookie2name'," Logout "+$scope.username);
                     $rootScope.shopname=$cookies.get('cookie2name');
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
app.controller("Admincontroller",function($scope,$http,$location){


    $scope.cashierReg=function(){
        $location.path('/admin_register_Cashier');
    };
    $scope.adminReg=function(){
        $location.path('/admin_register');
    };
    $scope.adminView=function(){
        $location.path('/admin_register/view');
    };
    //Hasitha
    $scope.getEmail=function(){
        $location.path('/admin/forummessage');
    };
    //Hasitha
    $scope.analyseView=function(){
        $location.path('/admin/analyse');
    };

    $scope.showAdmin=function(){
        $location.path('/admin');
    };

    $scope.cashierView=function(){
        $location.path('/admin_register_Cashier/view');
    };
    $scope.addItems=function(){
        $location.path('/admin/AddItem/details');
    };
    //load farm product to stores 
    $scope.load=function(){
        $location.path('/admin/AddItem/load');
    };

    //load reg farmers product to stores
     $scope.loadRegFarmers=function(){
        $location.path('/admin/AddItem/loadRegFarmers');
    };


    $scope.getFarmerReg=function(){  //isuru
        $location.path('/admin/farmerReg/');
    };
    $scope.getFarmerview=function(){  //isuru
        $location.path('/admin/farmerview');
    };
    $scope.getShopReg=function(){  //isuru
        $location.path('/admin/ShopRegister');
    };
    $scope.getShopview=function(){  //isuru
        $location.path('/admin/ShopView');
    };

   

    $scope.viewCoursePage=function(){
        $location.path('/admin/viewcources');
    };

    $scope.getAddCoursePage=function(){
        $location.path('/admin/addcources');
    };

    
    
    $scope.viewLocation=function(){
        $location.path('/admin/location');
    };
    $scope.temhum=function(){
        $location.path('/get/tem/hum');
    };

    $scope.ViewOrder=function(){
        $location.path('/get/regfarmer/order');
    };

    //storesView() view of stores
    $scope.storesView = function(){
      $location.path('/store/view');
    }

    $scope.Notification=function(){
        
        if($scope.noti!=null){
        //$location.path('/Notification/app');
        //send notification
            $http.post('appnotification/push_notification.php',
        {'msg':$scope.noti}
        ).success(function(data){
            swal({
                type:"success",
                title:"success",
                text:"Send notification Success!",
                footer:"Successfully notified!"
            });
            });
        }else{
            swal({
                type:"warning",
                title:"warning",
                text:"Please enter message!",
                footer:"fill the message!"
            });
        }
    };

    //loading items to farm Shop
    $scope.laodingShop=function(){
      $location.path('/load/farmshop');
    }

    //view farm shop
    $scope.viewShop=function(){
      $location.path('/view/shoploading');
    }
});


//FamrSHop Controller
app.controller("FarmShopController",function($scope,$http,$location){
    $scope.displayReport = function(){  
        $scope.date="";
        $http.get("module/FarmShop/farmshop.php"
        ) .success(function(data){
             $scope.items = data;
            //alert($scope.total);  
        });  
   }

   $scope.getDate=function(){
       $http.post('module/FarmShop/farmshop2.php',
       {'year':$scope.year,'month':$scope.month}
       ).success(function(data){
            $scope.items = data;
            
       });
   }
   $scope.viewReports=function(){
    $location.path('/forPOS/reports');
   }

   $scope.viewFOS=function(){
    $location.path('/forPOS');
   }
});


//EMPLOYEE Details Controller <<Add>> <<Update>> <<Delete>>
app.controller("RegisterCashierController",function($scope,$http){
     $scope.Reg=function(){
        $http.post(
            "module/Employee/Employee.php",
            {'id':$scope.id,'firstname':$scope.firstname,'lastname':$scope.lastname,'phonenumber':$scope.phonenumber,'email':$scope.email,'address':$scope.address,'salary':$scope.salary,'username':$scope.username,'password':$scope.password
        ,'password2':$scope.password2}
            ).success(function(data){
                console.log(data);
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
                $scope.errorpassword2 = null;
                $scope.successInsert = data.message;
                
                if($scope.id!=null && $scope.firstname!=null && $scope.lastname!=null
                    && $scope.phonenumber!=null && $scope.email!=null && $scope.address!=null
                    && $scope.salary!=null && $scope.username!=null && $scope.password!=null &&
                    $scope.password2!=null){
                    
                    if(data.exit){
                        swal({
                            type: 'warning',
                            title: 'Oops...',
                            text: 'EmpId or Username has already taken!',
                            footer: 'please enter another!'
                        });
                    }
                    else if($scope.password==$scope.password2){
                        if(data.passwordL){
                            swal({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Weak Password!',
                                footer: 'please enter password more than 5 digit!'
                            });

                        }

                        else if(data.mvalid){

                                swal({
                                    position: 'top-end',
                                    type: 'success',
                                    title: 'Register Success! '+$scope.username,
                                    showConfirmButton: false,
                                    timer: 5000
                                });

                        }else{
                            swal({
                                type: 'warning',
                                title: 'Oops...',
                                text: 'Invalid Mobile No!',
                                footer: 'please enter 10 digit mobile number!'
                            });
                        }
                    }
                    else{
                        swal({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Passwords not match !',
                            footer: 'please match the passwords!'
                            });
                    }
                }

                $scope.displayData2();

                // $scope.id=null;
                // $scope.firstname=null;
                // $scope.lastname=null;
                // $scope.phonenumber=null;
                // $scope.email=null;
                // $scope.address=null;
                // $scope.salary=null;
                // $scope.username=null;
                // $scope.password=null;
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
                {'id':$scope.id,'firstname':$scope.firstname,'lastname':$scope.lastname,'phonenumber':$scope.phonenumber,'email':$scope.email,'address':$scope.address,'salary':$scope.salary,'username':$scope.username,'password':$scope.password,
                'password2':$scope.password2}  
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
                        if($scope.id!=null && $scope.firstname!=null && $scope.lastname!=null
                            && $scope.phonenumber!=null && $scope.email!=null && $scope.address!=null
                            && $scope.salary!=null && $scope.username!=null && $scope.password!=null &&
                            $scope.password2!=null){
                            console.log(data);
                            if (data.cannot){
                                swal({
                                    type: 'error',
                                    title: 'Oops...',
                                    text: 'You cannot change EmpId !',
                                    footer: 'please dont change that!'
                                });
                            }
                            else if(data.passwordL){
                                swal({
                                    type: 'error',
                                    title: 'Oops...',
                                    text: 'Weak Password!',
                                    footer: 'please enter password more than 5 digit!'
                                });
                                
                            }
                            else if($scope.password2==$scope.password){
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
                                if(data.mvalid){
                                    swal({
                                        title: $scope.id+' Update Success! '
                                    });
                                    $scope.id=null;
                                    $scope.firstname=null;
                                    $scope.lastname=null;
                                    $scope.phonenumber=null;
                                    $scope.email=null;
                                    $scope.address=null;
                                    $scope.salary=null;
                                    $scope.username=null;
                                    $scope.password=null;
                                    $scope.password2=null;
                                    $scope.all=false;

                                }else{
                                    swal({
                                        type: 'warning',
                                        title: 'Oops...',
                                        text: 'Invalid Mobile No!',
                                        footer: 'please enter 10 digit mobile number!'
                                    });
                                }
                            }else{
                                swal({
                                    type: 'warning',
                                    title: 'Oops...',
                                    text: 'Passwords not match !',
                                    footer: 'please match the passwords!'
                                });
                            }
                        }
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
                        $scope.all=true;
            
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
                
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: "Please fill all the details",
                        footer: 'please correct the error!'
                    });
                    
                    }
                else if(data.errorId)
                    {
                    $scope.errorid = data.error.id;
                    $scope.errorusername = data.error.username;
                    $scope.errorpassword = data.error.password;
                
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: data.errorId,
                        footer: 'please correct the error!'
                    });
                    
                    }
                else
                {
                    $scope.errorid = null;
                    $scope.errorusername = null;
                    $scope.errorpassword = null;

                    swal({
                        type:'success',
                        title:'success',
                        text:data.message
                    });
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
                    swal({
                            type:'error',
                            title:'error',
                            text:data.message
                        }
                    );
                    }
                else
                {
                    $scope.errorid = null;
                    $scope.errorusername = null;
                    $scope.errorpassword = null;
                    $scope.all=false;

                    swal({
                        type:'success',
                        title:'success',
                        text:data.message
                    });
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
            $scope.all=true;
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
 

// addshopdetails not define
 app.controller("AddshopDetails", function($scope, $http){  
    $scope.addshop = function(){ 
        $http.post(  
             "module/FarmShop/addshop.php",  
             {'nic':$scope.nic,'fn':$scope.fn, 'ln':
             $scope.ln,'pn':$scope.pn,
             'address':$scope.address,'email':$scope.email,
             'un':$scope.un,'pw':$scope.pw}  
            
        ).success(function(data){
            console.log($scope.pw);
            if(data.error)
                    {
                    $scope.errorid = data.error.nic;
                    $scope.errorfirstname = data.error.fn;
                    $scope.errorlastname = data.error.ln;
                    $scope.errorphonenumber = data.error.pn;
                    $scope.erroremail = data.error.email;
                    $scope.erroraddress = data.error.address;
                    $scope.erroremail = data.error.email;
                    $scope.errorusername = data.error.un;
                    $scope.errorpassword = data.error.pw;

                    

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
                $scope.erroremail = null;
                $scope.errorusername = null;
                $scope.errorpassword = null;
                

            if($scope.nic!=null && $scope.fn!=null && $scope.ln!=null
                && $scope.pn!=null && $scope.address!=null && $scope.email!=null && $scope.un!=null && $scope.pw!=null){
                $scope.successInsert = data.message;
                swal({
                    type: 'success',
                    title: $scope.un +' Shop Added Successfull!',
                    timer: 5000
                    });

                }
            }
        }
        )};
        $scope.displayshop = function(){ 
            $http.get("module/FarmShop/viewshop.php")  
            .success(function(data){  
                //console.log(data); 
                $scope.items = data;
                 
            }); 
        } 
        $scope.editshop = function(x){ 
            $scope.details=x;
            //console.log($scope.details);
        }
        $scope.deleteshop = function(idd){ 
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
                $http.post("module/Farmshop/deleteshop.php", {'id':idd})  
                .success(function(data){  
                    console.log(data); 
    
                    $scope.displayshop();  
                });
            }
            else  
            {  
                return false;  
            } 
        });  
       }
       $scope.editshops=function(){
 
        $http.post(  
            "module/FarmShop/editshop.php",  
            {'details.nic':$scope.details.nic,'details.fn':$scope.details.fn, 
            'details.ln':$scope.details.ln,'details.pn'
            :$scope.details.pn,'details.address':$scope.details.address,
            'details.email':$scope.details.email,'details.un':$scope.details.un,
        }  
        
    ).success(function(data){

        //console.log(data);
        if($scope.details.nic!=null && $scope.details.fn!=null && $scope.details.ln!=null
            && $scope.details.pn!=null && $scope.details.address!=null && $scope.details.email!=null  && $scope.details.un!=null){
            $scope.successInsert = data.message;
            swal({
                type: 'success',
                title: $scope.details.fn +' Shop Updated Successfull!',
                timer: 5000
                });
        }else{
            swal({
                type: 'warning',
                title: 'Oops...',
                text: 'Invalid data!',
                footer: 'Please fill all the fields!'
            });
        }
        }
    )}; 


 });
//isuru


app.controller("AddfarmerDetails", function($scope, $http){  
    $scope.displayfarmers = function(){ 
        $http.get("module/farmer/viewfarmers.php")  
        .success(function(data){  
            //console.log(data); 
            $scope.items = data;
             
        }); 
    }
    $scope.addfarmer = function(){ 
        // console.log($scope.username,$scope.Id,$scope.First_Name,
        // $scope.Tele_Number,$scope.Gender,$scope.Email,$scope.Address,$scope.variety,$scope.password);
        $http.post(  
             "module/farmer/addData.php",  
             {'Id':$scope.Id,'First_Name':$scope.First_Name, 'Tele_Number':
             $scope.Tele_Number,'Gender':$scope.Gender,
             'Email':$scope.Email,
             'Address':$scope.Address,'variety':$scope.variety, 'username':$scope.username, 'password':$scope.password}  
            
        ).success(function(data){
            console.log(data);
            if($scope.Id!=null && $scope.First_Name!=null && $scope.Tele_Number!=null && $scope.password!=null
                && $scope.Gender!=null && $scope.Email!=null && $scope.Address!=null && $scope.username!=null){
                $scope.successInsert = data.message;
                if(data.InvalidPass){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Weak Password !',
                        footer: 'password must be at least 5 digits!'
                    });
                }
                else if(data.mvalid){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Invalid mobileNo !',
                        footer: 'Please enter valid mobile Number!'
                    });
                }
                else if(data.error){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Something went wrong !',
                        footer: 'Please enter valid details!'
                    });
                }
                else{
                    swal({
                        type: 'success',
                        title: $scope.First_Name +' Farmer Added Successfull!',
                        timer: 5000
                        });
                    }
                }
            }
        )};



    
    
        $scope.deletefarmers = function(idd){ 
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
                $http.post("module/farmer/deletefarmer.php", {'id':idd})  
                .success(function(data){  
                    //console.log(data); 
    
                    $scope.displayfarmers();  
                });
            }
            else  
            {  
                return false;  
            } 
        });  
       }

       $scope.editDetails = function(x){ 
        $scope.details=x;
        //console.log($scope.details);
    }
    
       $scope.editfarmer=function(){
       
        $http.post(  
            
            "module/farmer/editfarmer.php",  
            {'details.Id':$scope.details.Id,'details.First_Name':$scope.details.First_Name, 
            'details.Tele_Number':$scope.details.Tele_Number,'details.Gender'
            :$scope.details.Gender,'details.Email':$scope.details.Email,
            'details.Address':$scope.details.Address,'details.variety':$scope.details.variety,'details.username':$scope.details.username
        }  
        
        ).success(function(data){

            console.log(data);
            if($scope.details.Id!=null && $scope.details.First_Name!=null && $scope.details.Gender!=null
                && $scope.details.Email!=null && $scope.details.Address!=null && $scope.details.variety!=null){
                $scope.successInsert = data.message;
                if(data.mvalid){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Invalid mobileNo !',
                        footer: 'Please enter valid mobile Number!'
                    });
                }
                else if(data.error){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Something went wrong !',
                        footer: 'Please enter valid details!'
                    });
                }
                else{
                    swal({
                        type: 'success',
                        title: $scope.details.First_Name +' Update Successfull!',
                        timer: 5000
                        });
                    }
                }
            }
    )};
        

        


 }); //hasitha
 app.controller("ForumMessageDetails", function($scope, $http){ 
    $scope.displayMessages = function(){ 
        $http.get("module/forum/messages.php")  
        .success(function(data){  
            //console.log(data); 
            $scope.items = data;
             
        }); 
    }


    $scope.editDetails = function(x){ 
        $scope.details=x;
        //console.log($scope.details);
    }

    $scope.deleteDetails = function(idd){ 
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
            $http.post("module/forum/deleteData.php", {'email':idd['email']})  
            .success(function(data){  
                $scope.displayMessages();  
            });
        }
        else  
        {  
            return false;  
        } 
    });  
   }

    $scope.sendMail=function(){
 
        $http.post(  
            "module/forum/sendMail.php",  
            {'details.name':$scope.details.name,'details.email':$scope.details.email, 
            'details.subject':$scope.details.subject,'details.reply'
            :$scope.details.reply
        }  
        
    ).success(function(data){
        if($scope.details.name!=null && $scope.details.email!=null && $scope.details.subject!=null
            && $scope.details.reply!=null){
            $scope.successInsert = data.message;
            if(data.invalidEmail){
                swal({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Invalid Email!',
                    footer: 'Please enter valid email!'
                });
            }
            else{
            swal({
                type: 'success',
                title: 'Reply successfull!',
                timer: 5000
                });
            }
        }else{
            swal({
                type: 'warning',
                title: 'Oops...',
                text: 'Invalid data!',
                footer: 'Please fill all the fields!'
            });
        }
        }
    )}; 
});
 
 app.controller("AddCourseDetails", function($scope, $http){ 
    $scope.displayCourse = function(){ 
        $http.get("module/course/viewData.php")  
        .success(function(data){  
            //console.log(data); 
            $scope.items = data;
             
        }); 
    }


    $scope.editDetails = function(x){ 
        $scope.details=x;
        //console.log($scope.details);
    }

    $scope.deleteCourse = function(idd){ 
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
            $http.post("module/course/deleteData.php", {'id':idd})  
            .success(function(data){  
                //console.log(data); 
                $scope.displayCourse();  
            });
        }
        else  
        {  
            return false;  
        } 
    });  
   }

   $scope.editCourse=function(){
 
        $http.post(  
            "module/course/editData.php",  
            {'details.Course_Id':$scope.details.Course_Id,'details.Course_Name':$scope.details.Course_Name, 
            'details.Course_description':$scope.details.Course_description,'details.Course_duration'
            :$scope.details.Course_duration,'details.Course_type':$scope.details.Course_type,
            'details.Course_fees':$scope.details.Course_fees,'details.Location':$scope.details.Location
        }  
        
    ).success(function(data){

        //console.log(data);
        if($scope.details.Course_Id!=null && $scope.details.Course_Name!=null && $scope.details.Course_duration!=null
            && $scope.details.Course_type!=null && $scope.details.Course_fees!=null && $scope.details.Location!=null){
            $scope.successInsert = data.message;
            if(data.invalidFees){
                swal({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Invalid Fees!',
                    footer: 'Please enter valid amount!'
                });
            }
            else{
            swal({
                type: 'success',
                title: $scope.details.Course_Name +' Course Updated Successfull!',
                timer: 5000
                });
            }
        }else{
            swal(
                'Error!',
                'All the fields cannot be empty.',
                'Error'
            );
        }
        }
    )}; 


    $scope.addCourse = function(){  
        $http.post(  
             "module/course/addData.php",  
             {'Course_Id':$scope.Course_Id,'Course_Name':$scope.Course_Name, 'Course_description':
             $scope.Course_description,'Course_duration':$scope.Course_duration,
             'Course_type':$scope.Course_type,'Course_fees':$scope.Course_fees,
             'location':$scope.location}  
            
        ).success(function(data){
            //console.log(data);
            if($scope.Course_Id!=null && $scope.Course_Name!=null && $scope.Course_duration!=null
                && $scope.Course_type!=null && $scope.Course_fees!=null && $scope.location!=null){
                $scope.successInsert = data.message;
                if(data.errorId){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Course Id is taken!',
                        footer: 'please enter another courseId!'
                    });
                }
                else if(data.invalidFees){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Invalid Fees!',
                        footer: 'Please enter valid amount!'
                    });
                }
                else{
                    swal({
                    type: 'success',
                    title: $scope.Course_Name +' Course Added Successfull!',
                    timer: 5000
                    });
                }
            }
        }
        )}; 
    
 });

 app.controller("AddItemDetails", function($scope, $http,$location){  
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

                if(response.error){
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Invalid Image!',
                        footer: 'Please insert the image!'
                    });
                }else{
                    $scope.uploadFileData();  
                }

                  
           });
           
      } 
      //get all data by joinning image table and items data table <<by equaling image id>> 
      $scope.select = function(){ //<<<<<<<<<<<<<<<<<<<<<<<<<<<<====SELECT VEGETABLES 
           $http.get("module/Items/selectVeg.php")  
           .success(function(data){  
                $scope.images = data;  
           });  
      }

      $scope.selectFruit = function(){  //<<<<<<<<<<<<<<<<<<<<<<<<<<======SELECT FRUITS
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
           {'code':$scope.code,'name':$scope.name,'price':$scope.price,'amount':$scope.amount,
           'unit':$scope.unit,'discount':$scope.discount,'Type':$scope.Type}  
            ).success(function(response){

            if($scope.code!=null && $scope.name!=null && $scope.price!=null &&
            $scope.amount!=null && $scope.unit!=null && $scope.discount!=null &&
            $scope.Type!=null){ 
                if(response.errorCode){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'ItemCode Already Taken!',
                        footer: 'Please enter your valid ItemCode!'
                    });
                }
                else if(response.errorType){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'ItemType Error!',
                        footer: 'ItemType should Vegetable or Fruits!'
                    });
                }
    
                else if(response.errorUnit){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Item unit Error!',
                        footer: 'Item unit should kg ,g , mg, 1packet, l or ml!'
                    });
                }
    
                else if(response.errorPrice){
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Invalid Price!',
                        footer: 'Please enter valid amount!'
                    });
                }
                else{               
                    $scope.select(); 
                    $scope.selectFruit();
                    swal({
                        type: 'success',
                        title: $scope.code +' item Added Successfull!',
                        timer: 5000
                    });
                    $scope.code=null;
                    $scope.name=null;
                    $scope.price=null;
                    $scope.amount=null;
                    $scope.unit=null;
                    $scope.discount=null;
                    $scope.Type=null; 
                }
        }else{
            swal({
                type: 'warning',
                title: 'Oops...',
                text: 'Fill all!',
                footer: 'Please Fill all the details!'
            });
        } 
        
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
            //ng-disabled="all"
            $scope.all=true;
                
        };
      $scope.updateItemsData = function(){  
           $http.post(  
                "module/Items/UpdateItems.php",  
                {'code':$scope.code,'name':$scope.name,'price':$scope.price,'amount':$scope.amount,'unit':$scope.unit,'discount':$scope.discount,'Type':$scope.Type}  
           ).success(function(data){
            //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            //send notification
            //console.log(data);
            if(data.errorCode){
                swal({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'ItemCode Cannot Change!',
                    footer: 'Please enter your valid ItemCode!'
                });
            }
            else if(data.errorType){
                swal({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'ItemType Error!',
                    footer: 'ItemType should Vegetable or Fruits!'
                });
            }

            else if(data.errorUnit){
                swal({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Item unit Error!',
                    footer: 'Item unit should kg ,g , mg, 1packet, l or ml!'
                });
            }

            else if(data.errorPrice){
                swal({
                    type: 'warning',
                    title: 'Oops...',
                    text: 'Invalid Price!',
                    footer: 'Please enter valid amount!'
                });
            }
            
            else if($scope.code!=null && $scope.name!=null && $scope.price!=null &&
                $scope.amount!=null && $scope.unit!=null && $scope.discount!=null &&
                $scope.Type!=null){
                    
                    $scope.select();
                    $scope.selectFruit();
                    swal({
                        position:'top-end',
                        type: 'success',
                        title: $scope.code +' Update Successfull!',
                        timer: 5000
                    });
                    $scope.noti2 ="New "+$scope.name+" "+$scope.amount+""+$scope.unit+" is Rs: "+$scope.price+"/=";
                    $http.post('appnotification/push_notification.php',
                    {'msg':$scope.noti2}
                    ).success(function(data){
                        swal("Now !! A Notification was sent to Mobile App... "
                        ); 
                    });

                    $scope.code = null;
                    $scope.name = null;
                    $scope.price = null;
                    $scope.amount = null;  
                    $scope.unit = null;
                    $scope.discount = null;
                    $scope.Type=null;
                    $scope.all=false;

                }else{
                    swal({
                        type: 'warning',
                        title: 'Oops...',
                        text: 'Fill all!',
                        footer: 'Please Fill all the details!'
                    });
                }
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
                    // $scope.displayData();  
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

      //set data when pop up window for loading items form reg Farmers
       $scope.setDataPopUpWind = function(code){ 
          $scope.itemcode=code;
      }

       //set data when pop up window for loading items form Farm
       $scope.setDataPopUpWindFarm = function(code){ 
          $scope.itemcode=code;
          $scope.farmernic="LabuduwaFarm";
      }

      //for loading registered shop's & Farm producted items to database
      $scope.takeLoad = function(){
       
        if ($scope.farmernic!= null && $scope.itemcode!=null&& $scope.amount!=null && $scope.total!=null) {
          if (($scope.farmernic.length==10 && ($scope.farmernic[9]=='v') || $scope.farmernic[9]=='V')|| $scope.farmernic=="LabuduwaFarm" ){
                               
                      if(($scope.amount[$scope.amount.length-1]=='g'||$scope.amount[$scope.amount.length-1]=='G') && ($scope.amount[$scope.amount.length-2]=='k'||$scope.amount[$scope.amount.length-2]=='K')){
                               $http.post('module/Stores/LoadStores.php',
                             {'farmernic':$scope.farmernic,'itemcode':$scope.itemcode,'amount':$scope.amount,'total':$scope.total}  
                              ).success(function(response){
                                    //alert(response);
                                    $scope.farmernic="";
                                    
                                    $scope.amount="";
                                    $scope.total="";
                                    swal(
                                    'OK!',
                                    'Your Data has been Added.',
                                    'success'
                                )
                                  $scope.select(); 
                                  $scope.selectFruit(); //farmernic itemcode amount total
                                 
                             }); 
                        }
                          else{
                                   swal(
                                    'Error!',
                                    'Amount should be " Kg ".'
          
                                    )
                            }

          } else {
            swal(
                  'Error!',
                  'Invalied NIC....'
                  
        )
             $scope.farmernic="";
          }
           
        } else {
           swal(
                  'Error!',
                  'Check Your Inputs.'
                  
        )}
        
      }
       
      //refreshpage()
      $scope.refreshpage = function(){
         $scope.select(); 
         $scope.selectFruit();
      
      }

      ///////////////////////View Stores Details/////////////////////////////////////////

      //Vegetable button ViewStores() /store/view/veg
      $scope.vegetable=function(){
         $location.path('/store/view/veg');
      }

      //fruit button ViewStores() /store/view
      $scope.fruit=function(){
         $location.path('/store/view');
      }

      //setDataPopUpViewStoresFP
       $scope.setDataPopUpViewStoresFP = function(code){ 
          $scope.itemcode=code;
           $http.post("module/Stores/viewStoresFP.php",{'itemcode':$scope.itemcode})  
           .success(function(data){  
                $scope.items = data;
                //alert(data);  
           }); 
      }

      //setDataPopUpViewStoresRegFP(image.Code)
      $scope.setDataPopUpViewStoresRegFP = function(code){ 
          $scope.itemcode=code;
           $http.post("module/Stores/viewStoresRegFP.php",{'itemcode':$scope.itemcode})  
           .success(function(data){  
                $scope.items = data;
                //alert(data);  
           }); 
      }

      //////////////////////////Loading Farm Shop\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

       $scope.setDataPopUpWindFarmShop = function(code){ 
          $scope.itemcode=code;
          $scope.shopname="LabuduwaFarmShop";
      }

      $scope.takeLoadToFarmShop = function(){
        if ($scope.shopname!= null && $scope.itemcode!=null && $scope.amount!=null) {
       
           if(($scope.amount[$scope.amount.length-1]=='g'||$scope.amount[$scope.amount.length-1]=='G') && ($scope.amount[$scope.amount.length-2]=='k'||$scope.amount[$scope.amount.length-2]=='K')){
                 $http.post('module/FarmShop/LoadItemsShop.php',
               {'itemcode':$scope.itemcode,'amount':$scope.amount}  
                ).success(function(response){
                     // alert(response);
                     // $scope.amount="";
                      swal(
                      'OK!',
                      'Your Data has been Added.',
                      'success'
                         )
                    $scope.amount='';
                    $scope.select(); 
                    $scope.selectFruit(); //farmernic itemcode amount total
                   
               }); 
       
           }
           else{
                 swal(
                  'Error!',
                  'Amount should be " Kg ".'
                  
                  )
           }
        } else {
           swal(
                  'Error!',
                  'Check Your Inputs.'
                  
        )}

      };
      //view farm shop loading data
      $scope.sasadara=function(){
          $location.path('/sasadara');
      };

      $scope.viewOrder= function(){
        $http.get("module/FarmShop/viewloadShop.php")
        .success(function(data){
             $scope.loadorders = data;
        });
      }

 }); 
      

//############################################################################################

//Controller Handeling admin part of registered Shops' orders
app.controller("RegShopOrderController",function($scope,$location, $http,$rootScope){

    //link for view shop
    $scope.viewShop=function(){
      $location.path('/view/shoploading');
    }
    $scope.Orders=function(){
        $location.path('/admin/handel/orders');
    };
     $scope.VerifiedOrders=function(){
        $location.path('/admin/verified/orders');
    };
    $scope.DeliveredOrders=function(){
        $location.path('/admin/delivered/orders');
    };
    
    $scope.ViewOrdersDisplay=function(){  
           $http.get("module/FarmShopOrder/viewOrder.php")  
           .success(function(data){  
                $scope.namess = data;
                 
           });  
      };
   //for Searching part of ViewOrdersDisplay page
    $scope.ViewOrdersDisplay2=function(){  
           $http.post("module/FarmShopOrder/SearchviewOrder.php",{'shopId':$scope.shopId,'date':$scope.date,'code':$scope.code})  
           .success(function(data){  
               $scope.namess = data;
                 
           });  

            //$scope.code=$scope.date;
      };  
      //for verifying Order that shop owner has made
       $scope.Verify=function(shopid,ordernumber,code,name,amount,date){ 
          //update database 
           $http.post("module/FarmShopOrder/verifyOrder.php",{'order_number':ordernumber})  
           .success(function(data){  
              //alert(data); 
              swal(
                  'Verified !'
                  )
              $scope.ViewOrdersDisplay();
           });  
           //send mail
           //C:\xampp\htdocs\FmsFarmSide6\Farm-Management-System-IOT\sendMail\mailpphpp\mailVerify.php
             
             $http.post("sendMail/mailpphpp/mailVerify.php",{'shop_id':shopid,'order_number':ordernumber,'code':code,'name':name,'amount':amount,'date':date})  
           .success(function(data){  
              //alert(data); 
              swal(
                  'Success..!',
                  'Email was sent ..'
                  )
              $scope.ViewOrdersDisplay();
           });      
      };

      //for Delete Order that shop owner has made
       $scope.Delete=function(ordernumber){ 
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
                 $http.post("module/FarmShopOrder/deleteOrder.php",{'order_number':ordernumber})  
                     .success(function(data){  
                        //alert(data); 
                        $scope.ViewOrdersDisplay();
                     });
                   }
                else{
                  return false;
                } 
             });       
      };  
      //msg(x.Reg_Shop_Id,x.OrderNumber,x.Code,x.Name,x.Amount,x.Date)
      //sending massage  viewRegShopOrdersEmail.html
      $scope.msg=function(shopid,ordernumber,code,name,amount,date){ 
          $rootScope.order_Mail_shopid=shopid;
          $rootScope.order_Mail_ordernumber=ordernumber;
          $rootScope.order_Mail_code=code;
          $rootScope.order_Mail_name=name;
          $rootScope.order_Mail_amount=amount;
          $rootScope.order_Mail_date=date;

          $location.path('/admin/handel/orders/email');    
      };  

});

//RegShopOrderMailController
app.controller("RegShopOrderMailController",function($scope,$location, $http,$rootScope){
  

});



//#############################################################################################
//Controller Handeling admin part of registered Shops' RegShopVerifyOrderController
app.controller("RegShopVeriedOrderController",function($scope,$location, $http){
    $scope.Orders=function(){
        $location.path('/admin/handel/orders');
    };
     $scope.VerifiedOrders=function(){
        $location.path('/admin/verified/orders');
    };
    $scope.DeliveredOrders=function(){
        $location.path('/admin/delivered/orders');
    };
    //display verified orders
    $scope.ViewOrdersDisplay=function(){  
           $http.get("module/FarmShopOrder/viewverifyOrder.php")  
           .success(function(data){  
                $scope.namess = data;
                 
           });  
      };
   //for Searching part of ViewOrdersDisplay page
    $scope.ViewOrdersDisplay2=function(){  
           $http.post("module/FarmShopOrder/SearchverifyOrder.php",{'shopId':$scope.shopId,'date':$scope.date,'code':$scope.code})  
           .success(function(data){  
               $scope.namess = data;
                 
           });  

            //$scope.code=$scope.date;
      };  
      //for Delivering Order that shop owner has made
       $scope.Deliver=function(ordernumber){  
           $http.post("module/FarmShopOrder/deliverOrder.php",{'order_number':ordernumber})  
           .success(function(data){  
              //alert(data); 
              $scope.ViewOrdersDisplay();
           });        
      };

      //for Delete Order that shop owner has made
       $scope.Delete=function(ordernumber){ 

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
               $http.post("module/FarmShopOrder/deleteOrder.php",{'order_number':ordernumber})  
               .success(function(data){  
                  //alert(data); 
                  $scope.ViewOrdersDisplay();
               }); 
            }
            else{
              return false;
            }
        });       
      };  

});

 //##############################################################################################    



//Controller Handeling admin part of registered Shops' Delivered orders comtroller
app.controller("RegShopDeliveredOrderController",function($scope,$location, $http){
    $scope.Orders=function(){
        $location.path('/admin/handel/orders');
    };
     $scope.VerifiedOrders=function(){
        $location.path('/admin/verified/orders');
    };
    $scope.DeliveredOrders=function(){
        $location.path('/admin/delivered/orders');
    };
    //display delivered orders
    $scope.ViewOrdersDisplay=function(){  
           $http.get("module/FarmShopOrder/deliveredOrder.php")  
           .success(function(data){  
                $scope.namess = data;
                 
           });  
      };
   //for Searching part of ViewOrdersDisplay page
    $scope.ViewOrdersDisplay2=function(){  
           $http.post("module/FarmShopOrder/SearchdeliveredOrder.php",{'shopId':$scope.shopId,'date':$scope.date,'code':$scope.code})  
           .success(function(data){  
               $scope.namess = data;
                 
           });  

            //$scope.code=$scope.date;
      };  
     

      //for delete Order that shop owner has made
       $scope.Delete=function(ordernumber){  
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
                 $http.post("module/FarmShopOrder/deleteOrder.php",{'order_number':ordernumber})  
                 .success(function(data){  
                    //alert(data);
                    $scope.ViewOrdersDisplay();
                 });
              }
                 else{
                  return false;
                 }
          });        
      };  

});

//Loading items for store 
/*app.controller('AdminListController', function($scope,$modal ) {
    $scope.Confirm = function ( ) {
      alertModalInstance = $modal.open({
        animation: $scope.animationsEnabled,
        templateUrl: 'confirmAlert.html',
        scope: $scope
      });
$scope.cancelDelete = function () {
      console.log("cancel");
      alertModalInstance.dismiss('cancel');
    };
    $scope.ok = function () {
      console.log("ok");
      alertModalInstance.close(true);
    };
  }
    };)*/
    
  


//#############################TESTING###########################################
//################################################TESTING########################

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
