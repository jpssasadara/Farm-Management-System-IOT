<?php

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


    $query = "INSERT INTO auction (Item_type,Id,Item_name,Item_code,Quantity,Price,Date,Location,Description) VALUES ('$_POST[item_type]','$_POST[id]','$_POST[name]','$_POST[code]','$_POST[quantity]','$_POST[price]','$_POST[date]','$_POST[location]','$_POST[description]')";
    $result = mysqli_query($mysqli, $query);
        if($result)
        {
            echo "YOUR REGISTRATION IS COMPLETED...";
        }
        else
        {
            echo $query;
        }



