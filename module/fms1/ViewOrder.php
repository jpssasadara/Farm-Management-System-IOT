<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy"); 
 $nic = $_POST["nic"]; 
 $output = '';  
 $query = "SELECT t1.OrderNumber,t1.Date,t2.Code,t1.Amount,t1.Reg_Shop_Id,t2.Name,t1.Verified,t1.Delivered FROM regshoporder t1 INNER JOIN items t2 ON t1.Item_Code = t2.Code  WHERE  t1.Reg_Shop_Id='$nic' ORDER BY t1.OrderNumber DESC   ";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);
 // echo json_encode($nic);
 //t1.Verified=0 AND t1.Delivered=0 AND
 ?>  