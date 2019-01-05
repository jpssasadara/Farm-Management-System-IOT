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
    <tr>
        <th>Image</th>
    </tr>
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
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>
                            
                               <td>{$row[Item_name]}</td>
                               <td>{$row[Price]}</td>
                               <td>{$row[Date]}</td>
                               <td>{$row[Location]}</td>
                               <td>{$row[Description]}</td>
                               
  
                          </tr>  
                     ';
    }

    ?>
</table>
