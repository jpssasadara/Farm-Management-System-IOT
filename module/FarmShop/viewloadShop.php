<?php

$con = mysqli_connect("localhost", "root", "", "fmsmy");

$sql = "SELECT * FROM load_shop_items";

$result = mysqli_query($con,$sql);

$response = array();
while($row = mysqli_fetch_array($result))
{
    array_push($response,array("Item_Code"=>$row[0],
    "Load_Num"=>$row[1],"Amount"=>$row[2],
    "Date1"=>$row[3]));
}
//echo json_encode(array("server_response"=>$response));

echo json_encode($response);

?>
