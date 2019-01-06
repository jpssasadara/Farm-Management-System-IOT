<?php

$con = mysqli_connect("localhost", "root", "", "fmsmy");

$sql = "SELECT * FROM messages";

$result = mysqli_query($con,$sql);

$response = array();
while($row = mysqli_fetch_array($result))
{
    array_push($response,array("name"=>$row[0],
    "email"=>$row[1],"message"=>$row[2]));
}
//echo json_encode(array("server_response"=>$response));

echo json_encode($response);

?>

