<?php  
   
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $username = mysqli_real_escape_string($connect, $data->username);         
      $sql = "SELECT Password FROM admin WHERE User_Name='$username'";
      $result = mysqli_query($connect,$sql);
      if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result))
        {
          $pw=$row['Password'];
        }
        $output = array('value' => $pw);
        echo json_encode($output);
      }
      else{
        echo $sql;
      }
  }
  else{
        echo $sql;
      }  
 ?>  