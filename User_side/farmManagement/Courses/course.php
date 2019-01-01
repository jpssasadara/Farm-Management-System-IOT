<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container container-fluid">
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

    while ($row = $result->fetch_array()) {
        echo "<div class='well'>";
        $a=" <img src='images/$row[Course_Image]'>";
        echo "<ul class='list-unstyled'>";

        echo " 
              
              <div class='row'><div class='col-sm-4'>
              $a</div><div class='col-sm-8'>
              <form action='courseRegistration.php' method='get'>
              <li><h1>$row[Course_Name]</h1></li>
              </div>
              <li><p>$row[Course_description]</p></li>
              <li><h4>$row[Course_duration]</h4></li>
              <li><h4>$row[Course_type]</h4></li>
              <li><h4>$row[Course_fees]</h4></li>
              <li><h4>$row[Location]</h4</li>><br/>
              </form>
               <a href='courseRegistration.php?cname=$row[Course_Name]'>Register here!</a></div>";

        echo("</div>");
    }
    "</ul>";
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>
</div>
