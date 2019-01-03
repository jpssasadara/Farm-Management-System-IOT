<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");
$dataa=array();

$data = json_decode(file_get_contents("php://input"));

$nic = mysqli_real_escape_string($connect, $data->{'details.nic'});
$fn = mysqli_real_escape_string($connect, $data->{'details.fn'});       
$ln = mysqli_real_escape_string($connect, $data->{'details.ln'});
$pn = mysqli_real_escape_string($connect, $data->{'details.pn'});       
$address = mysqli_real_escape_string($connect, $data->{'details.address'});
$email = mysqli_real_escape_string($connect, $data->{'details.email'});
$un = mysqli_real_escape_string($connect, $data->{'details.un'});


if($nic!=null && $fn!=null && $pn!=null && $ln!=null
     && $address!=null && $email!=null && $un!=null){
          $query = "UPDATE registeredshop SET
          fn='$fn', ln='$ln', pn='$pn',
          address='$address', email='$email', un='$un'
          WHERE nic='$nic'";

          if(mysqli_query($connect, $query))  
          {  
               $dataa["message"] = "success";
          }  
          else  
          {  
               $dataa["message"] = "Shop Added Fail!"; 
          }
}
echo json_encode($dataa);

 ?>

