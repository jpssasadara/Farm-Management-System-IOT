<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy"); 
 $data1 = json_decode(file_get_contents("php://input"));  
 $ordernumber = mysqli_real_escape_string($connect, $data1->order_number);
 $output = '';  
 
 $query = "UPDATE regshoporder SET Verified = 1 WHERE OrderNumber='{$ordernumber}'" ; 

 $result = mysqli_query($connect, $query);  
 if ($result==true) {
 	echo json_encode("Oder Number =>'{$ordernumber}' is Verified......");
 }
 
 else{
 	echo json_encode("error......");
  }


    // <<<<<<<<<<<<<<<<<<<<<<<<<<for net Amount >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



          //|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
  		  $sql = "SELECT Amount,Item_Code FROM regshoporder WHERE OrderNumber='{$ordernumber}'";
          $result = mysqli_query($connect,$sql);
          $row=mysqli_fetch_array($result);
          $itemcode=$row[1];
          $value_Amount = $row[0];
          //After removing kg
          $TrueValue_Amount = substr($value_Amount,0,-2); 
          $Removedvalue = (float)$TrueValue_Amount;


           $sql = "SELECT NetAmount FROM stores WHERE Code ='$itemcode' limit 1";
          $result = mysqli_query($connect,$sql);
          $row=mysqli_fetch_array($result);
          $value = $row[0];
          $Oldvalue = (float)$value;
          //After removing kg



          $updatedNewvalue = $Oldvalue-$Removedvalue; 

          $updateQueryNet = "UPDATE stores SET NetAmount='$updatedNewvalue' WHERE Code ='$itemcode'";
          echo  $sql;
          mysqli_query($connect, $updateQueryNet);
       //<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> 
 ?>  