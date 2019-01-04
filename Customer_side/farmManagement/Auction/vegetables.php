
<?php
$mysqli = new mysqli("localhost", "root", '', "fmsmy");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM auction where Item_type='volvo' ";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */

    while ($row = $result->fetch_array()) {
        echo "<div class='well'>";
       // $a=" <img src='images/$row[Course_Image]'>";
        echo "<ul class='list-unstyled'>";

        echo " 
              
              
              <div class='col-sm-8'>
              <form action='' method='get'>
              <li>$row[Item_name]</li>
              
              <li>$row[Price]</li>
              <li>$row[Date]</li>
              <li>$row[Location]</li>
             
              </form>
              </div>";

        echo("</div>");
    }
    "</ul>";
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

?>

