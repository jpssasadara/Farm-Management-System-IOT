<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $un = $_POST["un"];
$pw = $_POST["pw"];
 $query = "SELECT nic FROM registeredshop Where un='$un' AND  pw='$pw'";  
 $result = mysqli_query($connect, $query);  
$row = mysqli_fetch_assoc($result); 
echo $row['nic'];  
  
   
 ?>  


