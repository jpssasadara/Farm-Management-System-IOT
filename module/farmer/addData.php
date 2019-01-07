<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");
$dataa=array();

$data = json_decode(file_get_contents("php://input"));

$Id = mysqli_real_escape_string($connect, $data->Id);
$First_Name = mysqli_real_escape_string($connect, $data->First_Name);       
$Tele_Number = mysqli_real_escape_string($connect, $data->Tele_Number);
$Gender = mysqli_real_escape_string($connect, $data->Gender);       
$Email = mysqli_real_escape_string($connect, $data->Email);
$Address = mysqli_real_escape_string($connect, $data->Address);
$variety = mysqli_real_escape_string($connect, $data->variety);
$username = mysqli_real_escape_string($connect, $data->username);
$password = mysqli_real_escape_string($connect, $data->password);


if($Id!=null && $First_Name!=null && $Tele_Number!=null
     && $Email!=null && $Address!=null && $username!=null && $username!=null){
          $query = "INSERT INTO  registeredfarmer(Id,First_Name,Tele_Number,Gender,
          Email,Address,variety,username,password) 
          VALUES ('$Id','$First_Name','$Tele_Number','$Gender','$Email',
          '$Address','$variety','$username','$password')"; 
          if(strlen($password)>=5){
               $mvalid=preg_match('/^[0-9]{10}+$/', $Tele_Number);
               if($mvalid){
                    if(mysqli_query($connect, $query))  
                    {  
                         $dataa["message"] = "success";
                    }  
                    else  
                    {  
                         $dataa["error"] = "Course Added Fail!"; 
                    }
               }else{
                    $dataa["mvalid"] = "Invalid Mobile No";
               }
          }else{
               $dataa["InvalidPass"]="Invalid Password";
          }
}
echo json_encode($dataa);

 ?>

