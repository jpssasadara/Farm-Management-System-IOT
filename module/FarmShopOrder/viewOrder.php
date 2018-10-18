<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $output = '';  
 $query = "SELECT * FROM regshoporder t1 INNER JOIN items t2 ON t1.Item_Code = t2.Code ";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);
  
 ?>  