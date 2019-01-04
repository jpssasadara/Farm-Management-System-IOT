<?php

$connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $data = json_decode(file_get_contents("php://input"));
 
//$scope.shopname!= null && $scope.itemcode!=null && $scope.amount!=null
           $shopname = mysqli_real_escape_string($connect, $data->shopname);
           $itemcode = mysqli_real_escape_string($connect, $data->itemcode);       
           $amount = mysqli_real_escape_string($connect, $data->amount);
          
           $getdatee=date("Y/m/d");
        
                   $insertQuery = "INSERT INTO load_shop_items(Item_Code,Load_Num,Amount,Date1) VALUES ('$itemcode',null,'$amount','$getdatee')";  
                 if(mysqli_query($connect, $insertQuery))  
                 {  
                      echo 'Ok ..  ';  
                 }  
                 else  
                 {  
                      echo  "error..."; 
                      //echo  $insertQuery; 
                 }  
               
        
 ?>

