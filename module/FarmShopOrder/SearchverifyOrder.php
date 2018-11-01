<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");
 $data1 = json_decode(file_get_contents("php://input")); 
 $d1 = mysqli_real_escape_string($connect, $data1->shopId);
 $d2 = mysqli_real_escape_string($connect, $data1->date);
 $d3 = mysqli_real_escape_string($connect, $data1->code);
  $output2 = '';
 if($d1!== null AND   $d2!== null AND  $d3 !== null){

		  
		 $query2 = "SELECT t1.OrderNumber,t1.Date,t2.Code,t1.Amount,t1.Reg_Shop_Id,t2.Name FROM regshoporder t1 INNER JOIN items t2 ON t1.Item_Code = t2.Code  WHERE t1.Verified=1 AND t1.Delivered=0  AND t1.Reg_Shop_Id= '$d1'  AND t2.Code= '$d3'   ";  
		 $result2 = mysqli_query($connect, $query2);  
		 while($row2 = mysqli_fetch_array($result2))  
		 {  
		      $output2[] = $row2;  
		 }  
		 	
 

 }  

echo json_encode($output2);
 
?>

