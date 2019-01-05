
<table>
<?php
// Create connection
/* fetch associative array */

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT * FROM registeredfarmer  where Id='946220778v' ";
/* fetch associative array */

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_array()) {
        //echo $row['name'];
        echo "<div class='well'>";

        echo "<ul class='list-unstyled'>";

        echo "  <form action='Farmer_account.php' method='post'>
        <tr>
            <td>NIC</td><td><input type=\"text\" name=\"nic\" class=\"form-control\" required value='{$row['Id']}'/></td>
        </tr>
        <tr>
            <td>Name</td><td><input type=\"text\" name=\"fname\" class=\"form-control\" required value='{$row['First_Name']}'/></td>
        </tr>
        <tr>
            <td>MobileNumber</td><td><input type=\"text\" name=\"mobile\"  class=\"form-control\" required value='{$row['Tele_Number']}'/></td>
        </tr>
        <tr>
            <td> Email</td><td><input type=\"text\" name=\"email\"  class=\"form-control\" required value='{$row['Email']}'/></td>
        </tr>
        <tr>
            <td> Gender</td><td><input type=\"text\" name=\"gender\"  class=\"form-control\" required value='{$row['Gender']}'/></td>
        </tr>
        <tr>
            <td>Address</td><td><input type=\"text\" name=\"address\" class=\"form-control\" required value='{$row['Address']}'/></td>
        </tr>
        <tr>
            
            <td>Varieties</td>
            <br>Vegetables
            <td> <input type=\"radio\" name=\"q1\" value=\"Vegetables\" data-toggle=\"modal\" data-target=\"#myModal\" value='{$row['variety']}'/>
            <br>Fruits
            <input type=\"radio\"  name=\"q1\" value=\"Fruits\" data-toggle=\"modal\" data-target=\"#myModal\" value='{$row['variety']}'/>
            <br>Animal products
            <input type=\"radio\" name=\"q1\" value=\"Animal products\" data-toggle=\"modal\" data-target=\"#myModal\" value='{$row['variety']}'/>
            <br>Milk based products
            <input type=\"radio\" name=\"q1\" value=\"Milk based products\" data-toggle=\"modal\" data-target=\"#myModal\" value='{$row['variety']}'/>
           <br/><hr>
            </td>
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
</script>