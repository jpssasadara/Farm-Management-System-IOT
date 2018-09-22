<?php

$conn=mysqli_connect("localhost","root","","test");
$info=json_decode(file_get_contents("php://input"));

 if(count($info)>0)
 {
     $name=mysqli_real_escape_string($conn,$info->name);
     $number=mysqli_real_escape_string($conn,$info->number);
     $amount=mysqli_real_escape_string($conn,$info->amount);
     $query="INSERT INTO customer(name,number,amount) VALUES ('$name','$number','$amount')";

     if(mysqli_query($conn,$query))
     {
         echo "Insert data successfully";
     }
     else{
         echo "failed";
     }
 }


 ?>