<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");  
$data = json_decode(file_get_contents("php://input"));
 

$code = mysqli_real_escape_string($connect, $data->code);
$name = mysqli_real_escape_string($connect, $data->name);       
$price = mysqli_real_escape_string($connect, $data->price);
$amount = mysqli_real_escape_string($connect, $data->amount);       
$unit = mysqli_real_escape_string($connect, $data->unit);
$discount = mysqli_real_escape_string($connect, $data->discount);
$Type = mysqli_real_escape_string($connect, $data->Type);

$output = 0;  
$query = "SELECT * FROM `tbl_images` WHERE id =(SELECT MAX(id) FROM `tbl_images`)";  
$result = mysqli_query($connect, $query);  
while($row = mysqli_fetch_array($result))  
{  
     $output = $row[0];  
}  

     $output = $output+1;  
$insertQuery = "INSERT INTO items(Code,Name,Price,Amount,Unit,Discount,Image,Type) VALUES ('$code','$name','$price','$amount','$unit','$discount','$output','$Type')";  
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

