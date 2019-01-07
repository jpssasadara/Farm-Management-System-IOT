<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");
$dataa=array();

$data = json_decode(file_get_contents("php://input"));

$Id = mysqli_real_escape_string($connect, $data->{'details.Id'});
$First_Name = mysqli_real_escape_string($connect, $data->{'details.First_Name'});       
$Tele_Number = mysqli_real_escape_string($connect, $data->{'details.Tele_Number'});
$Gender = mysqli_real_escape_string($connect, $data->{'details.Gender'});       
$Email = mysqli_real_escape_string($connect, $data->{'details.Email'});
$Address = mysqli_real_escape_string($connect, $data->{'details.Address'});
$variety = mysqli_real_escape_string($connect, $data->{'details.variety'});
$username = mysqli_real_escape_string($connect, $data->{'details.username'});


if($Id!=null && $First_Name!=null && $Tele_Number!=null && $Email!=null && $username!=null
     && $Gender!=null && $Address!=null && $variety!=null){
          $query = "UPDATE registeredfarmer SET
          First_Name='$First_Name', Tele_Number='$Tele_Number', Gender='$Gender', Email='$Email',
           Address='$Address', variety='$variety', username='$username'
          WHERE Id='$Id'";
          $mvalid=preg_match('/^[0-9]{10}+$/', $Tele_Number);
          if($mvalid){
               if(mysqli_query($connect, $query))  
               {  
                    $dataa["message"] = "success";
               }  
               else  
               {  
                    $dataa["message"] = "Farmer Added Fail!"; 
               }
          }else{
               $dataa["mvalid"] = "Invalid Mobile No";
          }

}
echo json_encode($dataa);

 ?>

