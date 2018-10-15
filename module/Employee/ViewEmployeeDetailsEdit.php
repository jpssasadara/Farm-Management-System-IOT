<?php 
$connect=mysqli_connect("localhost","root","","fmsmy");
$data = json_decode(file_get_contents("php://input"));

$dataa = array();
$error = array();
if(empty($data->id))
{
 $error["id"] = "Id is required";
}
if(empty($data->firstname))
{
 $error["firstname"] = "First Name is required";
}

if(empty($data->lastname))
{
 $error["lastname"] = "Last Name is required";
}

if(empty($data->phonenumber))
{
 $error["phonenumber"] = "Phone number is required";
}

if(empty($data->email))
{
 $error["email"] = "Email is required";
}
if (!filter_var(mysqli_real_escape_string($connect,$data->email), FILTER_VALIDATE_EMAIL)) {
  $error["email"] = "Invalid email format"; 
}


if(empty($data->address))
{
 $error["address"] = "Address is required";
}

if(empty($data->salary))
{
 $error["salary"] = "Salary is required";
}

if(empty($data->username))
{
 $error["username"] = "Username is required";
}

if(empty($data->password))
{
 $error["password"] = "Password is required";
}



if(!empty($error))
{
 $dataa["error"] = $error;
}
else
{


if(count($data)>0){
  $id = mysqli_real_escape_string($connect,$data->id);
  $firstname = mysqli_real_escape_string($connect,$data->firstname);
  $lastname = mysqli_real_escape_string($connect,$data->lastname);
  $phonenumber = mysqli_real_escape_string($connect,$data->phonenumber);
  $email = mysqli_real_escape_string($connect,$data->email);
  $address = mysqli_real_escape_string($connect,$data->address);
  $salary = mysqli_real_escape_string($connect,$data->salary);
  $username = mysqli_real_escape_string($connect,$data->username);
  $password = mysqli_real_escape_string($connect,$data->password);
  $password2 = mysqli_real_escape_string($connect,$data->password);

  if($password==$password2){
    $query = "UPDATE farmshopemployee SET First_Name='$firstname',Last_Name= '$lastname',Tele_Number='$phonenumber',Email = '$email',Address = '$address',Salary = '$salary',Username = '$username',Password = '$password' WHERE Id = '$id'";

    if(mysqli_query($connect,$query))
    {
      //echo "Data Inserted...........";
      $dataa["message"] = "Data Updated...";
    }
    else{
      //echo "Error.....";
      $dataa["message"] = "Try Again....";
    }
  }
}
}

  echo json_encode($dataa);



 ?>


  