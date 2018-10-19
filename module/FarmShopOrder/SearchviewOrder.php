<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");
 $data1 = json_decode(file_get_contents("php://input")); 
 $d1 = mysqli_real_escape_string($connect, $data1->shopId);
 $d2 = mysqli_real_escape_string($connect, $data1->date);
 $d3 = mysqli_real_escape_string($connect, $data1->code);
  $output2 = '';
 if($d1!== null AND   $d2!== null AND  $d3 !== null){

		  
		 $
		 	
 

 }  

echo json_encode($output2);
 
?>

