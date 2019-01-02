<?php 
$con = mysqli_connect("localhost", "root", "", "fmsmy");  
$data = json_decode(file_get_contents("php://input"));
$itemcode = mysqli_real_escape_string($con, $data->itemcode);

$sql = "SELECT load_stores_items.Load_Num,loading_stores_invoice.Dateorder,load_stores_items.Amount,loading_stores_invoice.Income FROM load_stores_items INNER JOIN loading_stores_invoice ON load_stores_items.Load_Num = loading_stores_invoice.Load_No   WHERE loading_stores_invoice.Reg_Farmer_Or_Farm_Id<>'LabuduwaFarm' AND load_stores_items.Item_Code ='$itemcode'  ORDER BY load_stores_items.Load_Num DESC;";

$result = mysqli_query($con,$sql);
$response = array();
while($row = mysqli_fetch_array($result))
{
	array_push($response,array("Load_Num"=>$row[0],"Load_Date"=>$row[1],"Amount"=>$row[2],"Total"=>$row[3]));
}

//echo json_encode(array("server_response"=>$response));
echo json_encode($response);

 ?>

