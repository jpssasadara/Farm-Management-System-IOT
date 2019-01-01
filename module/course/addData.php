<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");
$dataa=array();

$data = json_decode(file_get_contents("php://input"));

$Course_Id = mysqli_real_escape_string($connect, $data->Course_Id);
$Course_Name = mysqli_real_escape_string($connect, $data->Course_Name);       
$Course_description = mysqli_real_escape_string($connect, $data->Course_description);
$Course_duration = mysqli_real_escape_string($connect, $data->Course_duration);       
$Course_type = mysqli_real_escape_string($connect, $data->Course_type);
$Course_fees = mysqli_real_escape_string($connect, $data->Course_fees);
$location = mysqli_real_escape_string($connect, $data->location);


if($Course_Id!=null && $Course_Name!=null && $Course_duration!=null
     && $Course_type!=null && $Course_fees!=null && $location!=null){
          $query = "INSERT INTO course(Course_Id,Course_Name,Course_description,Course_duration,
          Course_type,Course_fees,Location) 
          VALUES ('$Course_Id','$Course_Name','$Course_description','$Course_duration','$Course_type',
          '$Course_fees','$location')";  

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

