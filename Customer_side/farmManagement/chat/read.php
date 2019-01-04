<?php
require("./_connect.php");

//connect to db
$db = new mysqli($db_host,$db_user, $db_password, $db_name);
if ($db->connect_errno) {
    //if the connection to the db failed
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

$query="SELECT * FROM chat ORDER BY id ASC";
//execute query
if ($db->real_query($query)) {
    //If the query was successful
    $res = $db->use_result();

    while ($row = $res->fetch_assoc()) {
        $username=$row["username"];
        $text=$row["text"];
        $time=date('G:i', strtotime($row["time"])); //outputs date as # #Hour#:#Minute#

        echo "<p>$time | $username: $text</p>\n";
    }
}else{
    //If the query was NOT successful
    echo "An error occured";
    echo $db->errno;
}

$db->close();
?>