<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $output = '';  
 $query = "SELECT * FROM tbl_images t1 INNER JOIN items t2 ON t1.id = t2.Image INNER JOIN stores s ON  s.Code = t2.Code where Type='Vegetable'";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  