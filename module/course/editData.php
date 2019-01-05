<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");
$dataa=array();

$data = json_decode(file_get_contents("php://input"));

$Course_Id = mysqli_real_escape_string($connect, $data->{'details.Course_Id'});
$Course_Name = mysqli_real_escape_string($connect, $data->{'details.Course_Name'});       
$Course_description = mysqli_real_escape_string($connect, $data->{'details.Course_description'});
$Course_duration = mysqli_real_escape_string($connect, $data->{'details.Course_duration'});       
$Course_type = mysqli_real_escape_string($connect, $data->{'details.Course_type'});
$Course_fees = mysqli_real_escape_string($connect, $data->{'details.Course_fees'});
$location = mysqli_real_escape_string($connect, $data->{'details.Location'});


if($Course_Id!=null && $Course_Name!=null && $Course_duration!=null && $Course_description!=null
     && $Course_type!=null && $Course_fees!=null && $location!=null){
          $query = "UPDATE course SET
          Course_Name='$Course_Name', Course_description='$Course_description', Course_duration='$Course_duration',
          Course_type='$Course_type', Course_fees='$Course_fees', Location='$location'
          WHERE Course_Id='$Course_Id'";

          if($Course_fees>0){
               if(mysqli_query($connect, $query))  
               {  
                    $dataa["message"] = "success";
               }  
               else  
               {  
                    $dataa["message"] = "Course Added Fail!"; 
               }
          }else{
               $dataa["invalidFees"]="Invalid fees";
          }
}
echo json_encode($dataa);

 ?>

