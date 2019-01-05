<?php
$mysqli = new mysqli("localhost", "root", '', "fmsmy");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "select count(1) FROM bid_history";
$result= mysqli_query($mysqli, $query);
$row = mysqli_fetch_array($result);

$total = $row[0];
echo "Total bids: " . $total;

mysqli_close($mysqli);
?>

<table class="table table-bordered">
    <thread>
    <tr>

        <th>Image</th>
        <th>Item Name</th>
        <th>Price</th>
        <th>Date</th>
        <th>Location</th>
        <th>Description</th>

    </tr>
    </thread>
    <tbody>
    <?php
    $mysqli = new mysqli("localhost", "root", '', "fmsmy");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $query = "SELECT * FROM auction inner join upload on upload.id=auction.Id";

    $result = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo '  
                          <tr>  
                               <!--td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td-->
                                <td>{$row[\'Item_name\']}</td>
                                <td>{$row[\'Price\']}</td>
                                <td>{$row[\'Date\']}</td>
                               <td>{$row[\'Location\']}</td>
                               <td>{$row[\'Description\']}</td>
  
                          </tr>  
                     ';
    }


    $query = "SELECT * FROM auction inner join upload on upload.id=auction.Id";
    /* fetch associative array */

    if ($result = $mysqli->query($query)) {

        while ($row = $result->fetch_array()) {
            //echo $row['name'];
            echo "<div class='well'>";

            echo "<ul class='list-unstyled'>";

            echo " <tr>
                   
                   <td>{$row['Item_name']}</td>
                   <td>{$row['Price']}</td>
                   <td>{$row['Date']}</td>
                   <td>{$row['Location']}</td>
                   <td>{$row['Description']}</td>
                   
                   </tr>\n";

            echo("</div>");
        }
        "</ul>";
        /* free result set */
        $result->free();
    }




    ?>
    </tbody>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <title>Sign-Up</title>
</head>
<body id="body-color">
<div id="Sign-Up">
    <fieldset style="width:30%"><legend>Bid</legend>
        <table border="0">
            <form method="POST" action="add_bid.php">
                <tr>
                    <td> Enter your id</td>
                </tr>
                <tr>
                    <td> <input type="text" name="id"></td>
                </tr>
                <tr>
                    <td> Enter your bid</td>
                </tr>
                <tr>
                    <td> <input type="text" name="amount"></td>
                </tr>
                <tr>
                    <td> Date</td>
                </tr>
                <tr>
                    <td> <input type="date" name="date"></td>
                </tr>

                <tr>
                    <td><input id="button" type="submit" name="submit" value="Place Offer"></td>
                </tr>

            </form>
        </table>
    </fieldset>
</div>
<table border="2">
    <thead>
    <tr>
        <th>Bidder</th>
        <th>Amount</th>
        <th>Time</th>

    </tr>
    </thead>
    <tbody>
    <?php
    // Create connection
    /* fetch associative array */

    $mysqli = new mysqli("localhost", "root", '', "fmsmy");
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $query = "SELECT * FROM bid_history";
    /* fetch associative array */

    if ($result = $mysqli->query($query)) {

        while ($row = $result->fetch_array()) {
            //echo $row['name'];
            echo "<div class='well'>";

            echo "<ul class='list-unstyled'>";

            echo " <tr>
                   <td>{$row['Bidder']}</td>
                   <td>{$row['Amount']}</td>
                   <td>{$row['Date']}</td>
                   
                   </tr>\n";

            echo("</div>");
        }
        "</ul>";
        /* free result set */
        $result->free();
    }

    /* close connection */
    $mysqli->close();
    ?>
    </tbody>
</table>



</body>
</html>