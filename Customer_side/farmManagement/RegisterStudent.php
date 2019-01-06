<?php




$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$userName = $_POST['username'];
$password =  $_POST['password'];
$query = "INSERT INTO registeredstudent(nic,fname,lname,Mobile,Gender,Address ,Occupation,email ,username,password) VALUES ('$_POST[nic]','$_POST[fname]','$_POST[lname]','$_POST[mobile]','$_POST[gender]','$_POST[address]' ,'$_POST[occupation]','$_POST[email]', '$_POST[username]','$_POST[password]')";

$result = mysqli_query($mysqli, $query);


if($result)
{
    echo "YOUR REGISTRATION IS COMPLETED...";
}
else
{
    echo $query;
}
if(isset($_POST["insert"]))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "INSERT INTO upload_student(id,name) VALUES ('$_POST[nic]','$file')";
    if(mysqli_query($mysqli, $query))
    {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
}
