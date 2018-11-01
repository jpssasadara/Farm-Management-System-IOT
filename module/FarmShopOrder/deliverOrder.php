<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy"); 
 $data1 = json_decode(file_get_contents("php://input"));  
 $ordernumber = mysqli_real_escape_string($connect, $data1->order_number);
 $output = '';  
 
 $query = "UPDATE regshoporder SET Delivered = 1 WHERE OrderNumber='{$ordernumber}'" ; 

 $result = mysqli_query($connect, $query);  
 if ($result==true) {
 	echo json_encode("Oder Number =>'{$ordernumber}' is Delivered......");
 }
 
 else{
 	echo json_encode("error......");
  }
 ?>  