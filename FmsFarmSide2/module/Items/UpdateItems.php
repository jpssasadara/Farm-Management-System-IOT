<?php 
$connect=mysqli_connect("localhost","root","","fmsmy");
$data = json_decode(file_get_contents("php://input"));

if(count($data)>0){
  $code = mysqli_real_escape_string($connect,$data->code);
  $name = mysqli_real_escape_string($connect,$data->name);
  $price = mysqli_real_escape_string($connect,$data->price);
  $amount = mysqli_real_escape_string($connect,$data->amount);
  $unit = mysqli_real_escape_string($connect,$data->unit);
  $discount = mysqli_real_escape_string($connect,$data->discount);
  $Type = mysqli_real_escape_string($connect, $data->Type);

  $query = "UPDATE Items SET Code='$code',Name= '$name',Price='$price',Amount = '$amount',Unit ='$unit',Discount = '$discount',Type = '$Type' WHERE Code = '$code'";

  if(mysqli_query($connect,$query))
  {
    //echo "Data Inserted...........";
    // $dataa["message"] = "Data Updated...";
  }
  else{
    //echo "Error.....";
   // $dataa["message"] = "Try Again....";
  }

}


 // echo json_encode($dataa);



 ?>


  