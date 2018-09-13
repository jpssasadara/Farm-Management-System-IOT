 
 <?php 
$con = mysqli_connect("localhost", "root", "", "fmsmy");  
$sql = "SELECT * FROM farmshopemployee;";


$result = mysqli_query($con,$sql);
$response = array();
while($row = mysqli_fetch_array($result))
{
	array_push($response,array("Id"=>$row[0],"First_Name"=>$row[1],"Last_Name"=>$row[2],"Tele_Number"=>$row[3],"Email"=>$row[4],"Address"=>$row[5],"Salary"=>$row[6],"Username"=>$row[7],"Password"=>$row[8]));
}
//echo json_encode(array("server_response"=>$response));
echo json_encode($response);
//mysql_close($con);
 ?>

 