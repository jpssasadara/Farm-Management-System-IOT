<?php

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


    $query = "INSERT INTO auction (Item_type,Id,Item_name,Price,Date,Location,Description) VALUES ('$_POST[item_type]','$_POST[id]','$_POST[name]','$_POST[price]','$_POST[date]','$_POST[location]','$_POST[description]')";
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
    $query = "INSERT INTO upload(id,name) VALUES ('$_POST[id]','$file')";
    if(mysqli_query($mysqli, $query))
    {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
}


