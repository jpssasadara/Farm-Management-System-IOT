<?php
$mysqli = new mysqli("localhost", "root", '', "fmsmy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$sql = "INSERT INTO bid_history (Bidder, Amount, Date,confirm,reject)
    values ('$_POST[id]', '$_POST[amount]', '$_POST[date]',false,false)";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();

?>