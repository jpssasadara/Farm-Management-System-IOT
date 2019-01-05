<table>
    <?php

    $mysqli = new mysqli("localhost", "root", '', "fmsmy");
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $query = "SELECT * FROM registeredshop  where nic='123411232v' ";
    /* fetch associative array */

    if ($result = $mysqli->query($query)) {

        while ($row = $result->fetch_array()) {
            //echo $row['name'];
            echo "<div class='well'>";

            echo "<ul class='list-unstyled'>";

            echo " 
        <tr>
            <td>National ID</td><td><input type=\"text\" name=\"nic\" class=\"form-control\" 
            required value='{$row['nic']}'/></td>
        </tr>
        <tr>
            <td>First Name</td><td><input type=\"text\" name=\"name\" class=\"form-control\" 
            required value='{$row['fn']}'/></td>
        </tr>
        <tr>
            <td>Last Name</td><td><input type=\"text\" name=\"name\" class=\"form - control\" 
            required value='{$row['ln']}'/></td>
        </tr>
        <tr>
            <td>Mobile Number</td><td><input type=\"text\" name=\"mobile\"  class=\"form-control\" 
            required value='{$row['pn']}'/></td>
        </tr>
        <tr>
            <td>Address</td><td><input type=\"text\" name=\"address\" class=\"form - control\" 
            required value='{$row['address']}'/></td>
        </tr>
        <tr>
            <td> Email</td><td><input type=\"text\" name=\"email\"  class=\"form-control\" required 
            value='{$row['email']}'/></td>
        </tr>
        <tr>
            <td> UserName</td><td> <input type=\"text\"class=\"form-control\"  name=\"username\" 
            required value='{$row['un']}'></td>
        </tr>
        <tr>
            <td> Password</td><td> <input type=\"password\" class=\"form-control\"  name=\"password\" 
            required value='{$row['pw']}'></td>
        </tr>
           
        <!--td><!--input id=\"button\" type=\"submit\" class=\"btn btn-primary\" name=\"submit\" 
        value=\"Sign-Up\"--><!--/td-->

            <tr>
        <td><input id=\"insert\" type=\"submit\" name=\"insert\" value=\"Update\" class=\"btn
            btn-info\"></td>
                   
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
</table>