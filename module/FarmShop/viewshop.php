<?php

$con = mysqli_connect("localhost", "root", "", "fmsmy");

$sql = "SELECT * FROM registeredshop";

$result = mysqli_query($con,$sql);

$response = array();
while($row = mysqli_fetch_array($result))
{
    array_push($response,array("nic"=>$row[0],
    "fn"=>$row[1],"ln"=>$row[2],
    "pn"=>$row[3],"address"=>$row[4],
    "email"=>$row[5],"un"=>$row[6]));
}
//echo json_encode(array("server_response"=>$response));

echo json_encode($response);

?>

