<?php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 if(!empty($_FILES))  
 {  
      $path = 'upload/' . $_FILES['file']['name'];  
      if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
      {  
           $insertQuery = "INSERT INTO tbl_images(name) VALUES ('".$_FILES['file']['name']."')";  
           if(mysqli_query($connect, $insertQuery))  
           {  
                echo 'File Uploaded';  
           }  
           else  
           {  
                echo 'File Uploaded But not Saved';  
           }  
      }  
 }  
 else  
 {  
      echo 'Some Error';  
 }  
 ?>  


 