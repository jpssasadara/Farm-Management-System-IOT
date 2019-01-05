<?php

define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER','');
define('DB_PASSWORD','');

//$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .     mysqli_error());
//$db=mysqli_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysqli_error());
$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$query = "INSERT INTO registeredshop (nic,fn,ln,pn,address,email,un,pw) VALUES ('$_POST[nic]','$_POST[fname]','$_POST[lname]','$_POST[mobile]','$_POST[address]','$_POST[email]','$_POST[username]','$_POST[password]')";

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
    $query = "INSERT INTO upload_shop(id,name) VALUES ('$_POST[nic]','$file')";
    if(mysqli_query($mysqli, $query))
    {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
}
