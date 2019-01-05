<table>
    <?php
    // Create connection
    /* fetch associative array */

    $mysqli = new mysqli("localhost", "root", '', "fmsmy");
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $query = "SELECT * FROM registeredstudent  where nic='986020778v' ";
    /* fetch associative array */

    if ($result = $mysqli->query($query)) {

        while ($row = $result->fetch_array()) {
            //echo $row['name'];
            echo "<div class='well'>";

            echo "<ul class='list-unstyled'>";

            echo " <form action='Student_account.php' method='post'>

        <tr>
            <td>National ID</td><td><input type=\"text\" name=\"nic\" class=\"form-control\" required value='{$row['nic']}'/></td>
        </tr>
        <tr>
            <td>First Name</td><td><input type=\"text\" name=\"fname\" class=\"form-control\" required value='{$row['fname']}'/></td>
        </tr>
        <tr>
            <td>Last Name</td><td><input type=\"text\" name=\"lname\" class=\"form - control\" required value='{$row['lname']}'/></td>
        </tr>
         <tr>
            <td>Mobile Number</td><td><input type=\"text\" name=\"mobile\" class=\"form - control\" required value='{$row['Mobile']}'/></td>
        </tr>
        <tr>
            <td>Occupation</td><td><input type=\"text\" name=\"occupation\"  class=\"form-control\" required value='{$row['Occupation']}'/></td>
        </tr>
        <tr>
            <td>Address</td><td><input type=\"text\" name=\"address\" class=\"form - control\" required value='{$row['Address']}'/></td>
        </tr>
        <tr>
            <td> Email</td><td><input type=\"text\" name=\"email\"  class=\"form-control\" required value='{$row['email']}'/></td>
        </tr>
        <tr>
            <td> Gender</td><td><input type=\"text\" name=\"gender\"  class=\"form-control\" required value='{$row['Gender']}'/></td>
        </tr>
        
        
        <tr>
            <td> UserName</td><td> <input type=\"text\"class=\"form-control\"  name=\"username\" required value='{$row['username']}'></td>
        </tr>
        <tr>
            <td> Password</td><td> <input type=\"password\" class=\"form-control\"  name=\"password\" required value='{$row['password']}'></td>
        </tr>
           
          
            <tr>
                <td><input id=\"update\" type=\"submit\" name=\"update\" value=\"Update\" class=\"btn btn-info\"></td>
                   
                   </tr>
                   </form>\n";

            echo("</div>");
        }
        "</ul>";
        /* free result set */
        $result->free();
    }

    /* close connection */
    $mysqli->close();
    ?>
</table>
