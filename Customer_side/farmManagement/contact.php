<?php
$mysqli = new mysqli("localhost", "root", '', "fmsmy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];



$sql="INSERT INTO messages VALUES('$name','$email','$message') ";
mysqli_query($mysqli, $sql);
session_start();
$_SESSION['message']="System will reply soon";
header("Location: contact1.php");
?>


