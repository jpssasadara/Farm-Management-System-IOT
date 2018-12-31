<ul>
<?php
$mysqli = new mysqli("localhost", "root", '', "fmsmy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM Course ";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    //echo "<ul class="list-group">";
    echo "<ul>";

    while ($row = $result->fetch_array()) {

        $a="<img src='images/course/$row[Course_Image]'";
        echo $a;
        echo "
              <li><h1>$row[Course_Name]</h1></li>
              <li><p>$row[Course_description]</p></li>
              <li><h4>$row[Course_duration]</h4></li>
              <li><h4>$row[Course_type]</h4></li>
              <li><h4>$row[Course_fees]</h4></li>
              <li><h4>$row[Location]</li></h4><br/>";

    }
    "</ul>";
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>
</ul>
