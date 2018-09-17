<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ORDER ITEMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<style>
    table, th , td  {
        border: 1px solid grey;
        border-collapse: collapse;
        padding: 5px;
    }
    table tr:nth-child(odd) {
        background-color: #f1f1f1;
    }
    table tr:nth-child(even) {
        background-color: #ffffff;
    }
</style>
</head>
<body>
<div class="container"></div>
<h3 align="center">ODEAR ITEM</h3>
<div class="container" ng-app="sa_display" ng-controller="controller" ng-init="display_data()"></div>

<div class="container" ng-app="shoppingCart" ng-controller="shoppingCartController" ng-init="loadProduct()">
    <br />
    <h3 align="center">Order your item here</h3>
    <br />
    <form method="post">
        <div class="row">

            <div class="col-sm-4 col-xs-12" style="margin-top:12px;" ng-repeat = "product in products">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
                    <img ng-src="images/{{product.Image}}" class="img-responsive" /><br />
                    <h4 class="text-info">{{product.Name}}</h4>
                    <h4 class="text-danger">{{product.Price}}</h4>
                    <input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-success form-control" value="Add to List" ng-click="addtoCart(product)" />
                </div>
            </div>
        </div>
    </form>
    <form method="post">
        <div class="row">
            <div class="col-sm-4 col-xs-12" style="margin-top:12px;" ng-repeat = "product in products">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
                    <img ng-src="images/{{product.Image}}" class="img-responsive" /><br />
                    <h4 class="text-info">{{product.Name}}</h4>
                    <h4 class="text-danger">{{product.Price}}</h4>
                    <input type="button" name="add_to_cart" style="margin-top:5px;" class="btn btn-success form-control" value="Add to List" ng-click="addtoCart(product)" />
                </div>
            </div>
        </div>
    </form>
</div>


<table class="table table-bordered">
    <tr>
        <th>Item Name</th>
        <th>Price</th>
        <th>Unit</th>
        <th>Discount</th>
        <th>Action</th>

    </tr>

    <!--tr ng-repeat = "cart in carts">
        <td>{{cart.product_name}}</td>
        <td>{{cart.product_quantity}}</td>
        <td>{{cart.product_price}}</td>
        <td>{{cart.product_quantity * cart.product_price}}</td>
        <td><button type="button" name="remove_product" class="btn btn-danger btn-xs" ng-click="removeItem(cart.product_id)">Remove</button></td>
    </tr-->
    <tr>



    <tr ng-repeat="x in names">
        <td>{{x.Name}}</td>
        <td>{{x.Price}}</td>
        <td>{{x.Unit}}</td>
        <td>{{x.Discount}}</td>
        <td><button type="button" name="remove_product" class="btn btn-danger btn-xs" ng-click="removeItem(cart.product_id)">Remove</button></td>
    </tr>
    <tr>
        <td colspan="3" align="right">Total</td>
        <td colspan="2">{{ setTotals() }}</td>
    </tr>

</table>
</div>
</div>

<script>
    var app=angular.module("sa_display",[ ]);
    app.controller("controller",function ($scope,$http) {
        $scope.display_data=function () {
            $http.get("display.php")
                .success(function (data) {
                    $scope.names=data;
               }) ;


        };
    });

</script>
</body>
</html>