<?php 
$con = mysqli_connect("localhost", "root", "", "fmsmy");  
$sql = "SELECT * FROM regshoporder;";


$result = mysqli_query($con,$sql);
$response = array();
while($row = mysqli_fetch_array($result))
{
	array_push($response,array("OrderNumber"=>$row[0],"Date"=>$row[1],"ItemCode"=>$row[2],"ItemName"=>$row[3]"Amount"=>$row[4],"Reg_Num"=>$row[5]));
}
//echo json_encode(array("server_response"=>$response));
echo json_encode($response);
//mysql_close($con);
 ?>