<?php

$con = mysqli_connect("localhost", "root", "", "fmsmy");

$sql = "SELECT * FROM registeredfarmer";

$result = mysqli_query($con,$sql);

$response = array();
while($row = mysqli_fetch_array($result))
{
    array_push($response,array("Id"=>$row[0],
    "First_Name"=>$row[1],"Tele_Number"=>$row[4],
    "Gender"=>$row[3],"Email"=>$row[5],
    "Address"=>$row[6],"variety"=>$row[7], "username"=>$row[9]));
}
//echo json_encode(array("server_response"=>$response));

echo json_encode($response);

?>

