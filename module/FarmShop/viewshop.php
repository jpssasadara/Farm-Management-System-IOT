<?php

$con = mysqli_connect("localhost", "root", "", "fmsmy");

$sql = "SELECT * FROM registeredshop";

$result = mysqli_query($con,$sql);

$response = array();
while($row = mysqli_fetch_array($result))
{
    array_push($response,array("nic"=>$row[0],
    "fn"=>$row[2],"ln"=>$row[3],
    "pn"=>$row[4],"address"=>$row[5],
    "email"=>$row[6],"un"=>$row[7]));
}
//echo json_encode(array("server_response"=>$response));

echo json_encode($response);

?>

