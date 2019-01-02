<?php

$con = mysqli_connect("localhost", "root", "", "fmsmy");

$sql = "SELECT * FROM course";

$result = mysqli_query($con,$sql);

$response = array();
while($row = mysqli_fetch_array($result))
{
    array_push($response,array("Course_Id"=>$row[0],
    "Course_Name"=>$row[2],"Course_description"=>$row[3],
    "Course_duration"=>$row[4],"Course_type"=>$row[5],
    "Course_fees"=>$row[6],"Location"=>$row[7]));
}
//echo json_encode(array("server_response"=>$response));

echo json_encode($response);

?>

