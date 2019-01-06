<?php

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$query = "INSERT INTO registeredfarmer (Id,First_Name,Tele_Number,Gender,Email,Address,variety,username,password) VALUES ('$_POST[nic]','$_POST[name]','$_POST[mobile]','$_POST[gender]','$_POST[email]','$_POST[address]','$_POST[q1]','$_POST[username]','$_POST[password]')";
$result = mysqli_query($mysqli, $query);


if($result)
{
    echo "YOUR REGISTRATION IS COMPLETED...";
}
else
{
    echo $query;
}