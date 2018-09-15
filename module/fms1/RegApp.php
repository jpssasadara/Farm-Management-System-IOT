<?php 
require "Regcon.php";
$fn = $_POST["fn"];
$ln = $_POST["ln"];
$ad = $_POST["nic"];
$em = $_POST["pn"];
$mn = $_POST["address"];
$pw = $_POST["email"];
$rpw = $_POST["un"];
$Gender=$_POST["pw"];

if(!$conn){
	echo "connection faild !!";
}
else{
$mysql_qry = "INSERT INTO registeredshop(fn,ln,nic,pn,address,email,un,pw )VALUES('$fn','$ln','$ad','$em','$mn','$pw','$rpw','$Gender')";
if(mysqli_query($conn ,$mysql_qry)){
	echo "Data is Added !!!!! $fn $ln" ;

}else{
	echo " Error !!!";
}

}
 
?>



 