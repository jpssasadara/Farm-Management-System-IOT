<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container container-fluid">

    <?php
// Create connection

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
// Check connection
if ($mysqli->connect_error) {
die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT * FROM items INNER JOIN tbl_images ON items.Image=tbl_images.id";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */

    while ($row = $result->fetch_array()) {
        //echo $row['name'];
        echo "<div class='well'>";
        $a="<img src='../../../module/Items/upload/$row[name]'/>";
        echo "<ul class='list-unstyled'>";

        echo " 
              
              <div class='row'><div class='col-sm-4'>$a</div>
              <div class='col-sm-8'>
              <form action='shoppingcart_registration.php.php' method='get'>
              <li>$row[Code]</li>
              </div>
              <li>$row[Name]</li>
              <li>$row[Price]</li>
              <li>$row[Amount]</li>
              <li>$row[Unit]</li>
              <li>$row[Discount]</li>
              <li>$row[Type]</li>
              <br/>
              </form>
               <a href='shoppingcart_registration.php?Iname=$row[Name]&Icode=$row[Code]'>Add to cart here!</a></div>";

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

