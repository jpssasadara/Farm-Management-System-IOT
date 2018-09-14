<?php
include 'DBController.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("SELECT * FROM pricelist ORDER BY productName ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <style>
      /* Remove the navbar's default margin-bottom and rounded borders */ 
      .navbar {
      margin-bottom: 4px;
      border-radius: 0;
      }
      /* Add a gray background color and some padding to the footer */
      footer {
      background-color: #f2f2f2;
      padding: 25px;
      }
      .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
      }
      .navbar-brand
      {
      padding:5px 40px;
      }
      .navbar-brand:hover
      {
      background-color:#ffffff;
      }
      /* Hide the carousel text when the screen is less than 600 pixels wide */
      @media (max-width: 600px) {
      .carousel-caption {
      display: none; 
      }
      }
    </style>
  </head>
</head>
<body>
<div class="container">
<div class="p-3 mb-2 bg-success text-white">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href='invoice.php'>POS</a></li>
      <li class="active"><a href='invoice.php'>Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Production <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href='#/vegetable'>Vegetables</a></li>
          <li><a href='#/fruit'>Fruits</a></li>
          <li><a href='#/others'>Others</a></li>
        </ul>
      </li>

      <li><a href='invoice.php?add=1'>Invoice</a></li>
      <li><a href='pricing.php'>Pricing</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href='#/login'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
<div><center><h3><span class="glyphicon glyphicon-barcode"></span> Product Price List</h3></center>
</div>
<div>
<br />
<br />

            <form method="POST" name="search" action="pricing.php">
                <div id="demo-grid">
                    <div class="search-box">
                    <div class="col-xs-3">
                    <select class="form-control" name="type[]">
                        <option value="vegetables">Product Type</option>
                        <option value="vegetables">vegetables</option>
                        <option value="fruits">fruits</option>
                        <option value="milkproduct">milkproduct</option>
                        <option value="others">others</option>
                    </select>
                    </div>
                <button id="Filter" class="btn btn-warning">Search</button>
                <br />
            

            </div>
            <br />
            <?php
                if (! empty($_POST['type'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1" class="table table-bordered table-striped">
                    

                <thead>
                    <tr>
                        <th>ProductName</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
            <h3>
            <?php
                    $query = "SELECT * from pricelist";
                    $i = 0;
                    $selectedOptionCount = count($_POST['type']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['type'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE type in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                    
        echo $selectedOption ;
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?></h3>
                
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['productName']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['quantity']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['price']; ?> </div></td>
                        <td><a href="pricing.php?update=1&id='.$row["productName"].'"><span class="glyphicon glyphicon-edit"></span></a></td>
                    </tr>
                <?php
                    }
                    ?>
                    
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
    
</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
    var table=$('#data_table').dataTable();
});

</script>