<?php

$mysqli = new mysqli("localhost", "root", '', "fmsmy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);
$sql="SELECT * FROM registeredfarmer WHERE username='$username' and password='$password'";

$result = mysqli_query($mysqli, $sql);


// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("Location: MemberFarmer.php");
    exit();
}
else{
    session_start();
    $_SESSION['error']="Invalid Login Details";
    header('Location: LoginFarmer1.php');
    exit();
    
}
