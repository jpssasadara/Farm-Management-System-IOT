<?php
session_start();
$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

//$userName = $_POST['username'];
//$password =  $_POST['password'];
if (isset($_POST)) {
    $query = "INSERT INTO registeredstudent(nic,fname,lname,Mobile,Gender,Address ,Occupation,email ,username,password) 
    VALUES ('$_POST[nic]','$_POST[fname]','$_POST[lname]','$_POST[mobile]','$_POST[gender]',
    '$_POST[address]' ,'$_POST[occupation]','$_POST[email]', '$_POST[username]','$_POST[password]')";

    $result = mysqli_query($mysqli, $query);


    if ($result) {
        
       echo "Successfully Reegistered!";
    } else {
        echo $query;
    }
}
?>
<br/>
<a href="LoginSt.php"><button class="btn btn-primary">Please Login From here!</button></a>

