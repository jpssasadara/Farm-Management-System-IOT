<?php

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if($_POST[item_type]==Vegetables) {
    $query = "INSERT INTO vegetables_Auction (Id,Name,Price,Date,Location,Description) VALUES ('$_POST[id]','$_POST[name]','$_POST[price]','$_POST[location]','$_POST[description]')";
    $result = mysqli_query($mysqli, $query);
}
else{

}

if($result)
{
    echo "YOUR REGISTRATION IS COMPLETED...";
}
else
{
    echo $query;
}