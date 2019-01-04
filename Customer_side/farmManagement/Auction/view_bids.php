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


    $query = "SELECT * FROM upload ORDER BY id DESC";
    $result = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';
    }
    $query = "SELECT * FROM upload inner join auction on upload.id=auction.Id";
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
