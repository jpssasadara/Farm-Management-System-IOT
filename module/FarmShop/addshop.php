<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");
$dataa=array();

$data = json_decode(file_get_contents("php://input"));

$nic = mysqli_real_escape_string($connect, $data->nic);
$fn = mysqli_real_escape_string($connect, $data->fn);       
$ln = mysqli_real_escape_string($connect, $data->ln);
$pn = mysqli_real_escape_string($connect, $data->pn);       
$address = mysqli_real_escape_string($connect, $data->address);
$email = mysqli_real_escape_string($connect, $data->email);
$un = mysqli_real_escape_string($connect, $data->un);
$pw = mysqli_real_escape_string($connect, $data->pw);


// check condition
if($nic!=null && $fn!=null && $ln!=null
     && $pn!=null && $address!=null && $email!=null && $un!=null && $pw!=null ){
          $query = "INSERT INTO registeredshop(nic,fn,ln,pn,address,email,un,pw) 
          VALUES ('$nic','$fn','$ln','$pn','$address','$email','$un','$pw')";  

          if(mysqli_query($connect, $query))  
          {  
               $dataa["message"] = "success";
          }  
          else  
          {  
               $dataa["message"] = "Course Added Fail!"; 
          }
}
echo json_encode($dataa);

 ?>

