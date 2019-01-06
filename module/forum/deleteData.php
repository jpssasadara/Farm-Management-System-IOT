<?php  
 //delete.php  
 $connect = mysqli_connect("localhost", "root", "", "fmsmy");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
    $email = mysqli_real_escape_string($connect, $data->email);  
    $query = "DELETE FROM messages WHERE email='$email'";  
    if(mysqli_query($connect, $query))  
    {  
        echo "Deleted....";  
    }  
    else  
    {  
        echo 'Error';  
    }  
 } 
 
 ?>  