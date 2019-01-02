<?php

$connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $data = json_decode(file_get_contents("php://input"));
 
//farmernic itemcode amount total
           $farmernic = mysqli_real_escape_string($connect, $data->farmernic);
           $itemcode = mysqli_real_escape_string($connect, $data->itemcode);       
           $amount = mysqli_real_escape_string($connect, $data->amount);
           $total = mysqli_real_escape_string($connect, $data->total);  

        /* if(!empty($data->farmernic) AND !empty($data->itemcode) AND !empty($data->amount) AND !empty($data->total){*/

                   $insertQuery = "INSERT INTO load_stores_items(Item_Code,Load_Num,Amount) VALUES ('$itemcode',null,'$amount')";  
                 if(mysqli_query($connect, $insertQuery))  
                 {  
                      echo 'Ok ..  ';  
                 }  
                 else  
                 {  
                      echo  "error..."; 
                      //echo  $insertQuery; 
                 }  
                $getdatee=date("Y/m/d");
                 $insertQuery = "INSERT INTO loading_stores_invoice(Load_No,Dateorder,Income,Reg_Farmer_Or_Farm_Id) VALUES (null,'$getdatee','$total','$farmernic')";  
                 if(mysqli_query($connect, $insertQuery))  
                 {  
                      echo 'Added order..'; 
                     

                 }  
                 else  
                 {  
                      echo  "error ..."; 
                      //echo  $insertQuery;
                 }  
         //}
                
    //header("Location: printpdf.php");
       /*  else{
          json_encode(echo "1";);
         }
              
          */
//$link = "<script>window.open('http://localhost/FmsFarmSide6/Farm-Management-System-IOT/module/Stores/printpdf.php',"_blank")</script>";
//C:\xampp\htdocs\FmsFarmSide6\Farm-Management-System-IOT\module\Stores\printpdf.php
//http://localhost/FmsFarmSide6/Farm-Management-System-IOT/#/admin/AddItem/loadRegFarmers
//echo $link;

 ?>

