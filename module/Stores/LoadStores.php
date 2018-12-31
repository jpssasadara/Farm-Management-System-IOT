<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $data = json_decode(file_get_contents("php://input"));
 
//farmernic itemcode amount total
           $farmernic = mysqli_real_escape_string($connect, $data->farmernic);
           $itemcode = mysqli_real_escape_string($connect, $data->itemcode);       
           $amount = mysqli_real_escape_string($connect, $data->amount);
           $total = mysqli_real_escape_string($connect, $data->total);       
         
              
           $insertQuery = "INSERT INTO load_stores_items(Item_Code,Amount) VALUES ($itemcode,$amount)";  
           if(mysqli_query($connect, $insertQuery))  
           {  
                echo 'File Uploaded';  
           }  
           else  
           {  
                echo 'File Uploaded But not Saved'; 
                //echo  $insertQuery; 
           }  
           $getdatee=date("Y/m/d");
           $insertQuery = "INSERT INTO loading_stores_invoice(Dateorder,Income,Reg_Farmer_Or_Farm_Id) VALUES ($getdatee,$total,$farmernic)";  
           if(mysqli_query($connect, $insertQuery))  
           {  
                echo 'File Uploaded';  
           }  
           else  
           {  
                echo 'File Uploaded But not Saved'; 
                //echo  $insertQuery;
           }  
     

 ?>

