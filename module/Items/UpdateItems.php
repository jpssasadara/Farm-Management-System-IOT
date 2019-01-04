<?php 
$connect=mysqli_connect("localhost","root","","fmsmy");
$data = json_decode(file_get_contents("php://input"));
$dataa=array();
if(count($data)>0){
  $code = mysqli_real_escape_string($connect,$data->code);
  $name = mysqli_real_escape_string($connect,$data->name);
  $price = mysqli_real_escape_string($connect,$data->price);
  $amount = mysqli_real_escape_string($connect,$data->amount);
  $unit = mysqli_real_escape_string($connect,$data->unit);
  $discount = mysqli_real_escape_string($connect,$data->discount);
  $Type = mysqli_real_escape_string($connect, $data->Type);

  $q="SELECT * FROM Items WHERE Code='$code'";
  $a=mysqli_query($connect,$q);

  $query = "UPDATE Items SET Code='$code',Name= '$name',Price='$price',
  Amount = '$amount',Unit ='$unit',Discount = '$discount',Type = '$Type' WHERE Code = '$code'";

  
    if(mysqli_num_rows($a)<1)
    {
      $dataa["errorCode"]="Error Code";
    }
    else{
      if($Type=="Vegetable" || $Type=="Fruit"){
        if($unit=="g" || $unit=="kg" || $unit=="mg" || 
        $unit=="1 packet" || $unit=="l" || $unit=="ml"){
          if($price>0){
            mysqli_query($connect,$query);
          }else{
            $dataa["errorPrice"]="Error Price";
          }
        }else{
          $dataa["errorUnit"]="Error Unit";
        }
      }
      else{
        $dataa["errorType"]="Error Type";
      }
    }  
  }

 echo json_encode($dataa);



 ?>


  