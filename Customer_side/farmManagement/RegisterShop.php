<?php

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if (isset($_POST['submit'])) {
    $query = "INSERT INTO registeredshop (nic,fn,ln,pn,address,email,un,pw) VALUES ('$_POST[nic]','$_POST[fname]','$_POST[lname]','$_POST[mobile]','$_POST[address]','$_POST[email]','$_POST[username]','$_POST[password]')";

    $result = mysqli_query($mysqli, $query);


    if ($result) {
        echo "YOUR REGISTRATION IS COMPLETED...";
    } else {
        echo $query;
    }
}
