<?php 
require "Regcon.php";
$date = $_POST["date"];
$code = $_POST["code"];
$amount = $_POST["amount"];
$nic = $_POST["nic"];


if(!$conn){
	echo "connection faild !!";
}
else{
$mysql_qry = "INSERT INTO regshoporder(Date,Item_Code,Amount,Verified,Delivered,Reg_Shop_Id )VALUES('$date','$code','$amount',false,false,'$nic')";
if(mysqli_query($conn ,$mysql_qry)){
	echo "Data is Added !!!!!" ;

}else{
	echo " $mysql_qry Error !!!";
}

}
 
?>



 