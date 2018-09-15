<?php 
require "Regcon.php";
$un1 = $_POST["un"];
$pw1 = $_POST["pw"];

/*$un1 ='sahas';
$pw1='sahas';*/
$undb=null;
if(!$conn){
	echo "connection faild !!";
}
else{
	
	$sql = "SELECT un FROM registeredshop WHERE pw='$pw1'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result))
	{
		$undb=$row['un'];
	}
	
	if($undb==$un1){
		echo "Log in";
	}
	else{
		echo "Worrng Username or Password";
	}

}
else{
	echo "Worrng Username or Password";
}
	

}


?>


 