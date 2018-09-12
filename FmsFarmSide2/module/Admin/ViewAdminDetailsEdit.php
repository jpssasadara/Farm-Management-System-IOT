<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $data = json_decode(file_get_contents("php://input")); 

$dataa = array();
$error = array();
if(empty($data->id))
{
 $error["id"] = "Id is required";
}
if(empty($data->username))
{
 $error["username"] = "Username Name is required";
}

if(empty($data->password))
{
 $error["password"] = "Password is required";
} 
if(!empty($error))
{
 $dataa["error"] = $error;
 $dataa["message"] = "Try Again.sa...";
}
else{
 if(count($data) > 0)  
 {  
      $id = mysqli_real_escape_string($connect, $data->id);
      $username = mysqli_real_escape_string($connect, $data->username);       
      $password = mysqli_real_escape_string($connect, $data->password);  
      $query = "UPDATE admin SET User_Name = '$username', Password = '$password' WHERE Id = '$id'";    
      if(mysqli_query($connect,$query))
        {
          //echo "Data Inserted...........";
           $dataa["message"] = "Data Updated...";
        }
        else{
          //echo "Error.....";
          
        }
 }
 
}
 echo json_encode($dataa);
  
 ?>  