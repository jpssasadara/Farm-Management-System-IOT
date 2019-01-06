<?php

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$data = json_decode(file_get_contents("php://input"));

$dataa = array();
$error = array();
if(empty($data->nic))
{
    $error["nic"] = "Id is required ";
}
if(empty($data->name))
{
    $error["name"] = "Id is required ";
}
if(empty($data->mobile))
{
    $error["mobile"] = "Id is required ";
}
if(empty($data->gender))
{
    $error["gender"] = "Id is required ";
}
if(empty($data->email))
{
    $error["email"] = "Id is required ";
}
if(empty($data->address))
{
    $error["address"] = "Id is required ";
}
if(empty($data->q1))
{
    $error["q1"] = "Id is required ";
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
    $dataa["message"] = "Try Again....";
}
else{
    if(count($data) > 0)
    {
        $nic = mysqli_real_escape_string($mysqli, $data->nic);
        $name=mysqli_real_escape_string($mysqli,$data->name);
        $mobile=mysqli_real_escape_string($mysqli,$data->mobile);
        $gender=mysqli_real_escape_string($mysqli,$data->gender);
        $email=mysqli_real_escape_string($mysqli,$data->email);
        $address=mysqli_real_escape_string($mysqli,$data->address);
        $q1=mysqli_real_escape_string($mysqli,$data->q1);
        $username = mysqli_real_escape_string($mysqli, $data->username);
        $password = mysqli_real_escape_string($mysqli, $data->password);
        $query = "INSERT INTO registeredfarmer (Id,First_Name,Tele_Number,Gender,Email,Address,variety,username,password) VALUES ($nic,name,$mobile,$gender,$email,$address,$q1,$username,$password)";
        if(mysqli_query($mysqli,$query))
        {
            //echo "Data Inserted...........";
            $dataa["message"] = "Data Inserted...";
        }
        else{
            //echo "Error.....";

        }
    }

}
echo json_encode($dataa);

?>
