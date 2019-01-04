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

          $q="SELECT * FROM course WHERE Course_Id='$Course_Id'";
          $a=mysqli_query($connect,$q);

          if(mysqli_num_rows($a)>0)  
          {  
               $dataa["errorId"] = "CourseId exist";
          }  
          else  
          {  
               if($Course_fees>0){
                    $query = "INSERT INTO course(Course_Id,Course_Name,Course_description,Course_duration,
                    Course_type,Course_fees,Location) 
                    VALUES ('$Course_Id','$Course_Name','$Course_description','$Course_duration','$Course_type',
                    '$Course_fees','$location')";  
                    mysqli_query($connect,$query);
               }
               else{
                    $dataa["invalidFees"]="Fees must be greater than 0";
               }
          }
}
echo json_encode($dataa);

 ?>

