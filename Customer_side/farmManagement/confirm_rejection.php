<?php
session_start();
?>

<table border="2">
    <thead>
    <tr>

        <th>Code</th>
        <th>Name</th>
        <th>Amount</th>


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

    $query = "SELECT * FROM bid_history inner join auction on bid_history.Item_code=auction.Item_code
        where Bidder='$_SESSION[nic2]' and confirm=True ";
    /* fetch associative array */

    if ($result = $mysqli->query($query)) {
        echo "YOUR BIDS ARE CONFIRMED";
        while ($row = $result->fetch_array()) {
            //echo $row['name'];
            echo "<div class='well'>";

            echo "<ul class='list-unstyled'>";

            echo " 
                   
                   <tr>
                   
                   <td>{$row['Item_code']}</td>
                   <td>{$row['Item_name']}</td>
                   <td>{$row['Amount']}</td>
                  
                  
                   </tr>\n";

            echo("</div>");
        }
        "</ul>";
        /* free result set */
        $result->free();
    }
    else{
        echo "YOUR BIDS ARE REJECTED!!!";
    }

    /* close connection */
    $mysqli->close();
    ?>
    </tbody>
</table>