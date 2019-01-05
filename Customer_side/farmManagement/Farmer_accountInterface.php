
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

        echo " 
        <tr>
            <td>NIC</td><td><input type=\"text\" name=\"nic\" class=\"form-control\" required value='{$row['Id']}'/></td>
        </tr>
        <tr>
            <td>Name</td><td><input type=\"text\" name=\"name\" class=\"form-control\" required value='{$row['First_Name']}'/></td>
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
                <td> <input type=\"file\" name=\"image\" id=\"image\" />
                    <br /><!--input type=\"submit\" name=\"insert\" id=\"insert\" value=\"Insert\" class=\"btn btn-info\" /--></td>
            </tr>
            <!--td><!--input id=\"button\" type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"Sign-Up\"--><!--/td-->
            <tr>
                <td><input id=\"insert\" type=\"submit\" name=\"insert\" value=\"Update\" class=\"btn btn-info\"></td>
                   
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
<script>
    $(document).ready(function(){
        $('#insert').click(function(){
            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>