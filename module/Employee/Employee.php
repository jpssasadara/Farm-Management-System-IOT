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
	$password2 = mysqli_real_escape_string($connect,$data->password2);

	$q="SELECT * FROm farmshopemployee WHERE Id='$id' or Username='$username'";
	$row=mysqli_query($connect,$q);
	if(mysqli_num_rows($row)>0)
	{
		$dataa["exit"]="This User Id or Username has already taken";
	}
	else{
		if($password==$password2){
			if(strlen($password)>=5){
				$mvalid=preg_match('/^[0-9]{10}+$/', $phonenumber);
				$dataa["mvalid"]=$mvalid;

				if($mvalid){
					$query = "INSERT INTO farmshopemployee(Id,First_Name,Last_Name,Tele_Number,Email,Address,Salary,Username,Password) VALUES
					('$id','$firstname','$lastname','$phonenumber','$email','$address','$salary','$username','$password')";

					if(mysqli_query($connect,$query))
					{
						//echo "Data Inserted...........";
						$dataa["message"] = "Data Inserted...";
					}
					else{
						//echo "Error.....";
						$dataa["message"] = "Try Again....";
					}
				}
			}else{
				$dataa["passwordL"] = "password invalid...";
			}
		}
	}

}
}

echo json_encode($dataa);



 ?>


  