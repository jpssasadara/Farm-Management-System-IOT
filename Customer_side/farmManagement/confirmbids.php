<?php
$mysqli = new mysqli("localhost", "root", '', "fmsmy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


//$query = "Update bid_history (confirm) VALUES (1) WHERE Bidder='$_GET[id]'";

$query ="UPDATE bid_history SET confirm = True  WHERE Bidder='$_GET[id]' AND Item_code='$_GET[code]' ";
$result = mysqli_query($mysqli, $query);

if ($result) {

    echo " BID IS COMFIRM...";
} else {
    echo $query;
}
/* close connection */
$mysqli->close();

?>
