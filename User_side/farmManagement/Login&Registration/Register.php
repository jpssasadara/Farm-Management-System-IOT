<?php

define('DB_HOST', '');
define('DB_NAME', '');
define('DB_USER','');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .     mysqli_error());
$db=mysqli_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysqli_error());



$userName = $_POST['username'];
$password =  $_POST['password'];
$query = "INSERT INTO members (username,password) VALUES ('$userName','$password')";
$data = mysqli_query ($query)or die(mysqli_error());
if($data)
{
    echo "YOUR REGISTRATION IS COMPLETED...";
}
else
{
    echo "Unknown Error!";
}