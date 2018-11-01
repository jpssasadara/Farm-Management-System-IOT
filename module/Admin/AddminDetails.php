<?php 
$con = mysqli_connect("localhost", "root", "", "fmsmy");  
$sql = "SELECT * FROM admin;";


$result = mysqli_query($con,$sql);
$response = array();
while($row = mysqli_fetch_array($result))
{
	array_push($response,array("Id"=>$row[0],"User_Name"=>$row[1],"Password"=>$row[2]));
}
//echo json_encode(array("server_response"=>$response));
echo json_encode($response);
//mysql_close($con);
 ?>