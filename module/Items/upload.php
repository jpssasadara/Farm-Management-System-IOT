<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");
 $dataa=array();
 if(!empty($_FILES))  
 {  
      $path = 'upload/' . $_FILES['file']['name'];  
      if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
      {  
          $insertQuery = "INSERT INTO tbl_images(name) VALUES ('".$_FILES['file']['name']."')";  
          $a=mysqli_query($connect, $insertQuery);
          if($a)  
          { 
               if(mysqli_num_rows($a)){
                    $dataa["success"]='File Uploaded';  
               }
               else  
               {  
                    $dataa["invalid"]='Invalid Data!';  
               } 
          }
     }
}
else  
{  
     $dataa["error"]='Some Error';  
}  

 echo json_encode($dataa);
 ?>  


 