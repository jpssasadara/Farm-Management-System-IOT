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
                      //echo 'Ok ..  ';  
                 }  
                 else  
                 {  
                      //echo  "error..."; 
                      //echo  $insertQuery; 
                 }  
               
          // <<<<<<<<<<<<<<<<<<<<<<<<<<for net Amount >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


          $sql = "SELECT NetAmount FROM stores WHERE Code ='$itemcode' limit 1";
          $result = mysqli_query($connect,$sql);
          $row=mysqli_fetch_array($result);
          $value = $row[0];
          $Oldvalue = (float)$value;
          //After removing kg

          $TrueValue = substr($amount,0,-2); 
          $Addedvalue = (float)$TrueValue;
          $updatedNewvalue = $Oldvalue+$Addedvalue; 

          $updateQueryNet = "UPDATE stores SET NetAmount='$updatedNewvalue' WHERE Code ='$itemcode'";
          echo  $sql;
          mysqli_query($connect, $updateQueryNet);
       //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>   
 ?>

