<?php
  //invoice.php  
  include('database_connection.php');

  $statement = $connect->prepare("
    SELECT * FROM tbl_order 
    ORDER BY order_id DESC
  ");

  //run the select query
  $statement->execute();

  //get the all row of tbl_order
  $all_result = $statement->fetchAll();

  $total_rows = $statement->rowCount();

  
  if(isset($_POST["create_invoice"]))
  { 
    $order_total_amount = 0;
    $statement = $connect->prepare("
      INSERT INTO tbl_order 
        (order_no, order_date, order_receiver_name, order_receiver_address, order_total_amount, order_datetime)
        VALUES (:order_no, :order_date, :order_receiver_name, :order_receiver_address, :order_total_amount, :order_datetime)
    ");
    $statement->execute(
      array(
          ':order_no'               =>  trim($_POST["order_no"]),
          ':order_date'             =>  trim($_POST["order_date"]),
          ':order_receiver_name'          =>  trim($_POST["order_receiver_name"]),
          ':order_receiver_address'       =>  trim($_POST["order_receiver_address"]),
          ':order_total_amount'       =>  $order_total_amount,
          ':order_datetime'           =>  date('Y-m-d H:i:s')
      )
    );

    $statement = $connect->query("SELECT LAST_INSERT_ID()");
    $order_id = $statement->fetchColumn();

    for($count=0; $count<$_POST["total_item"]; $count++)
    {
      $order_total_amount = $order_total_amount + floatval(trim($_POST["order_item_actual_amount"][$count]));


      $statement = $connect->prepare("
        INSERT INTO tbl_order_item 
        (order_id, item_name, order_item_quantity, order_item_price, order_item_actual_amount)
        VALUES (:order_id, :item_name, :order_item_quantity, :order_item_price, :order_item_actual_amount)
      ");

      $statement->execute(
        array(
          ':order_id'               =>  $order_id,
          ':item_name'              =>  trim($_POST["item_name"][$count]),
          ':order_item_quantity'          =>  trim($_POST["order_item_quantity"][$count]),
          ':order_item_price'           =>  trim($_POST["order_item_price"][$count]),
          ':order_item_actual_amount'       =>  trim($_POST["order_item_actual_amount"][$count])
        )
      );
    }

    $statement = $connect->prepare("
      UPDATE tbl_order 
      SET order_total_amount = :order_total_amount
      WHERE order_id = :order_id 
    ");
    $statement->execute(
      array(
        ':order_total_amount'     =>  $order_total_amount,
        ':order_id'             =>  $order_id
      )
    );
    header("location:invoice.php");
  }

  if(isset($_POST["update_invoice"]))
  {
    $order_total_amount = 0;
      
    $order_id = $_POST["order_id"];
    
    
    
    $statement = $connect->prepare("
      DELETE FROM tbl_order_item WHERE order_id = :order_id
    ");
    $statement->execute(
      array(
        ':order_id'       =>      $order_id
      )
    );
      
    for($count=0; $count<$_POST["total_item"]; $count++)
    {
      $order_total_amount = $order_total_amount + floatval(trim($_POST["order_item_actual_amount"][$count]));
      
      $statement = $connect->prepare("
        INSERT INTO tbl_order_item 
        (order_id, item_name, order_item_quantity, order_item_price, order_item_actual_amount) 
        VALUES (:order_id, :item_name, :order_item_quantity, :order_item_price, :order_item_actual_amount)
      ");
      $statement->execute(
        array(
          ':order_id'                 =>  $order_id,
          ':item_name'                =>  trim($_POST["item_name"][$count]),
          ':order_item_quantity'          =>  trim($_POST["order_item_quantity"][$count]),
          ':order_item_price'            =>  trim($_POST["order_item_price"][$count]),
          ':order_item_actual_amount'     =>  trim($_POST["order_item_actual_amount"][$count])
        )
      );
      $result = $statement->fetchAll();
    }
      
    $statement = $connect->prepare("
      UPDATE tbl_order 
      SET order_no = :order_no, 
      order_date = :order_date, 
      order_receiver_name = :order_receiver_name, 
      order_receiver_address = :order_receiver_address, 
      order_total_amount = :order_total_amount
      WHERE order_id = :order_id 
    ");
      
    $statement->execute(
      array(
        ':order_no'               =>  trim($_POST["order_no"]),
        ':order_date'             =>  trim($_POST["order_date"]),
        ':order_receiver_name'        =>  trim($_POST["order_receiver_name"]),
        ':order_receiver_address'     =>  trim($_POST["order_receiver_address"]),
        ':order_total_amount'     =>  $order_total_amount,
        ':order_id'               =>  $order_id
      )
    );
      
    $result = $statement->fetchAll();
          
    header("location:invoice.php");
  }

  if(isset($_GET["delete"]) && isset($_GET["id"]))
  {
    $statement = $connect->prepare("DELETE FROM tbl_order WHERE order_id = :id");
    $statement->execute(
      array(
        ':id'       =>      $_GET["id"]
      )
    );
    $statement = $connect->prepare(
      "DELETE FROM tbl_order_item WHERE order_id = :id");
    $statement->execute(
      array(
        ':id'       =>      $_GET["id"]
      )
    );
    header("location:invoice.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>POINT OF SALE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, nofollow">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.all.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<style>
      
  .abc-cc {
    background-color: black;
    padding: 16px;
    text-align: center;
  }
  .abc-ccc {
    background-color: #f0f0f0;
    padding: 1px;
    text-align: center;
  }
  .abc-c {
        
    text-shadow: 1px 1px #ccc;
  }

  .footer {
    background: rgb(0,0,0);
    padding: 10px 0;
  }
        .footer a {
    color: #70726F;
    font-size: 20px;
    padding: 10px;
    border-right: 1px solid #70726F;
    transition: all .5s ease;
  }
  .footer a:first-child {
    border-left: 1px solid #70726F;
  }
  .footer a:hover {
    color: white;
  }
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
<body>
  
<div class="container">
<div class="p-3 mb-2 bg-success text-white">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand" href="#/home"></a>
  </div>
  <ul class="nav navbar-nav">
    <li><a href='/Farm-Management-System-IoT'>Home</a></li>
    <li class="active"><a href='invoice.php'>POS</a></li>
  </ul>
  <!-- <ul class="nav navbar-nav navbar-right">
    <li><a href='/Farm-Management-System-IoT'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
  </ul> -->
  </div>
</nav>
</div>




<style>
  .box{
    width: 100%;
    max-width: 1390px;
    border-radius: 5px;
    border:1px solid #ccc;
    padding: 15px;
    margin: 0 auto;                
    margin-top:50px;
    box-sizing:border-box;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<script>
  $(document).ready(function(){
    $('#order_date').datepicker({
      format: "yyyy-mm-dd",
      autoclose: true,
      uiLibrary: 'bootstrap'
    });
  });
</script>
<div class="container-fluid">
  <?php
  if(isset($_GET["add"]))
  {
  ?>
  
  <form method="post" id="invoice_form">
  
    <div class="table-responsive">
    <table class="table table-bordered">
    
    <tr>
    
    <td colspan="2" align="center"><h2 style="margin-top:10.5px"><span class="glyphicon glyphicon-folder-open"> 
      <b>CreateInvoice</b></h2></td>
    </tr>
    <tr>
    <td colspan="2">
      <div class="row">
        <div class="col-md-8">
          To,<br />
            <b>RECEIVER (BILL TO)</b><br />
            <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm" placeholder="Enter Receiver Name" />
            <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" placeholder="Enter Billing Address"></textarea>
        </div>
        <div class="col-md-4">
          Invoice No : <br />
          <input type="text" name="order_no" id="order_no" class="form-control input-sm" 
          value='<?php echo(rand(0,100000));?>' readonly placeholder="Enter Invoice No." />
          <input type="text" name="order_date" id="order_date" class="form-control input-sm" 
          readonly placeholder="Select Invoice Date" value="<?php echo date("Y-m-d");?>"/>
        </div>
      </div>
      <br />
      <table id="invoice-item-table" class="table table-bordered">
        <tr>
          <th width="7%">Sr No.</th>
          <th width="10%">Item Type</th>
          <th width="15%">Item Name</th>
          <th width="5%">Quantity</th>
          <th width="10%">Price</th>
          <th width="10%">Actual Amt.</th>
          <th width="3%"></th>
        </tr>
        <tr>
          <td><span id="sr_no">1</span></td>
          <!--<td><input type="text" name="item_name[]" id="item_name1" class="form-control input-sm" /></td>-->
          <td>
          <select class="form-control" id="type" name="type" onchange="SelectProduct(this,0);">
            <option value="empty">Select a productType</option>
            <option value="vegetables">vegetables</option>
            <option value="fruits">fruits</option>
            <option value="milkproduct">milkproduct</option>
            <option value="others">others</option>
            </select>
          </td>
          <td>
          <select class="form-control" id="item_name0" name="item_name[]">
                <option value="0">Select a product</option>
            </select>

          </td>
          <td><input type="text" name="order_item_quantity[]" id="order_item_quantity1" data-srno="1" class="form-control input-sm order_item_quantity" /></td>
          <td><input type="text" name="order_item_price[]" id="order_item_price1" data-srno="1" class="form-control input-sm number_only order_item_price" /></td>
          <td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount1" data-srno="1" class="form-control input-sm order_item_actual_amount" readonly /></td>
          <td></td>
        </tr>
        </table>
        <div align="right">
          <button type="button" name="add_row" id="add_row" class="btn btn-success btn-xs">+</button>
        </div>
        </td>
      </tr>
      <tr>
        <td align="right"><b>Total</td>
        <td align="right"><b><span id="final_total_amt"></span></b></td>
      </tr>
      <tr>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="hidden" name="total_item" id="total_item" value="1" />
              <input type="submit" name="create_invoice" id="create_invoice" class="btn btn-warning" value="Create" />
            </td>
          </tr>
      </table>
    </div>
  </form>
  <script>
  $(document).ready(function(){
    var final_total_amt = $('#final_total_amt').text();
    var count = 1;
    
    $(document).on('click', '#add_row', function(){
      count++;
      $('#total_item').val(count);
      var html_code = '';
      html_code += '<tr id="row_id_'+count+'">';
      html_code += '<td><span id="sr_no">'+count+'</span></td>';
      
      //html_code += '<td><input type="text" name="item_name[]" id="item_name'+count+'" class="form-control input-sm" /></td>';

    html_code += '<td>'+
                  '<select class="form-control" id="type'+count+'" name="type" onchange="SelectProduct(this,'+count+');">'+
                    '<option value="empty">Select a productType</option>'+
                    '<option value="vegetables">vegetables</option>'+
                    '<option value="fruits">fruits</option>'+
                    '<option value="milkproduct">milkproduct</option>'+
                    '<option value="others">others</option>'+
                    '</select>'+
                  '</td>';
                  
      html_code +='<td>'+
                  '<select class="form-control" id="item_name'+count+'" name="item_name[]">'+
                        '<option value="0">Select a product</option>'+
                    '</select></td>';

      
      html_code += '<td><input type="text" name="order_item_quantity[]" id="order_item_quantity'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_quantity" /></td>';
      html_code += '<td><input type="text" name="order_item_price[]" id="order_item_price'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_price" /></td>';
      html_code += '<td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount'+count+'" data-srno="'+count+'" class="form-control input-sm order_item_actual_amount" readonly /></td>';
      
      html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
      html_code += '</tr>';
      $('#invoice-item-table').append(html_code);
    });
    
    $(document).on('click', '.remove_row', function(){
      var row_id = $(this).attr("id");
      var total_item_amount = $('#order_item_final_amount'+row_id).val();
      var final_amount = $('#final_total_amt').text();
      var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
      $('#final_total_amt').text(result_amount);
      $('#row_id_'+row_id).remove();
      count--;
      $('#total_item').val(count);
    });

    function cal_final_total(count)
    {
      var final_item_total = 0;
      for(j=1; j<=count; j++)
      {
        var quantity = 0;
        var price = 0;
        var actual_amount = 0;
        var item_total = 0;
        quantity = $('#order_item_quantity'+j).val();
        if(quantity > 0)
        {
          price = $('#order_item_price'+j).val();
          if(price > 0)
          {
            actual_amount = parseFloat(quantity) * parseFloat(price);
            $('#order_item_actual_amount'+j).val(actual_amount);
            
            item_total = parseFloat(actual_amount) ;
            final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
            $('#order_item_final_amount'+j).val(item_total);
          }
        }
      }
      $('#final_total_amt').text(final_item_total);
    }

    $(document).on('blur', '.order_item_price', function(){
      cal_final_total(count);
    });



    $('#create_invoice').click(function(){
      if($.trim($('#order_receiver_name').val()).length == 0)
      {
        swal("Please Enter Reciever Name");
        return false;
      }

      if($.trim($('#order_no').val()).length == 0)
      {
        swal("Please Enter Invoice Number");
        return false;
      }

      /*
      if($.trim($('#order_date').val()).length == 0)
      {
        alert("Please Select Invoice Date");
        return false;
      }*/

      for(var no=1; no<=count; no++)
      {
        /*if($.trim($('#item_name'+no).val()).length == 0)
        {
          swal("Please Enter Item Name");
          $('#item_name'+no).focus();
          return false;
        }*/

        if($.trim($('#order_item_quantity'+no).val()).length == 0)
        {
          swal("Please Enter Quantity");
          $('#order_item_quantity'+no).focus();
          return false;
        }

        if($.trim($('#order_item_price'+no).val()).length == 0)
        {
          swal("Please Enter Price");
          $('#order_item_price'+no).focus();
          return false;
        }

      }

      $('#invoice_form').submit();

    });

  });
  </script>
  <?php
  }
  elseif(isset($_GET["update"]) && isset($_GET["id"]))
  {
    $statement = $connect->prepare("
      SELECT * FROM tbl_order 
        WHERE order_id = :order_id
        LIMIT 1
    ");
    $statement->execute(
      array(
        ':order_id'       =>  $_GET["id"]
        )
      );
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
    ?>
    <script>
    $(document).ready(function(){
      $('#order_no').val("<?php echo $row["order_no"]; ?>");
      $('#order_date').val("<?php echo $row["order_date"]; ?>");
      $('#order_receiver_name').val("<?php echo $row["order_receiver_name"]; ?>");
      $('#order_receiver_address').val("<?php echo $row["order_receiver_address"]; ?>");
    });
    </script>
    <form method="post" id="invoice_form">
    <div class="table-responsive">
      <table class="table table-bordered">

        <tr>
          <td colspan="2" align="center"><h2 style="margin-top:10.5px"><span class="glyphicon glyphicon-wrench"> Edit Invoice</span></h2></td>
        </tr>

        <tr>
        <td colspan="2">
          <div class="row">
            <div class="col-md-8">
              To,<br />
                <b>RECEIVER (BILL TO)</b><br />
                <input type="text" name="order_receiver_name" id="order_receiver_name" class="form-control input-sm" placeholder="Enter Receiver Name" />
                <textarea name="order_receiver_address" id="order_receiver_address" class="form-control" placeholder="Enter Billing Address"></textarea>
            </div>
            <div class="col-md-4">
              Reverse Charge<br />
              <input type="text" name="order_no" id="order_no" class="form-control input-sm" placeholder="Enter Invoice No." />
              <input type="text" name="order_date" id="order_date" class="form-control input-sm" readonly placeholder="Select Invoice Date" />
            </div>
          </div>
          <br />
          <table id="invoice-item-table" class="table table-bordered">
            
          <tr>
            <th width="7%">Sr No.</th>
            <th width="10%">Item Type</th>
            <th width="15%">Item Name</th>
            <th width="5%">Quantity</th>
            <th width="10%">Price</th>
            <th width="10%">Actual Amt.</th>
            <th width="3%"></th>
          </tr>
                
          <?php
          $statement = $connect->prepare("
            SELECT * FROM tbl_order_item 
            WHERE order_id = :order_id
          ");
          $statement->execute(
            array(
              ':order_id'       =>  $_GET["id"]
            )
          );
          $item_result = $statement->fetchAll();
          $m = 0;
          foreach($item_result as $sub_row)
          {
            $m = $m + 1;
          ?>
          <tr>
          <td><span id="sr_no"><?php echo $m; ?></span></td>
          

          <td>
          <select class="form-control" id="type" name="type" disabled>
            <option value="empty">Select a productType</option>
            <option value="vegetables">vegetables</option>
            <option value="fruits">fruits</option>
            <option value="milkproduct">milkproduct</option>
            <option value="others">others</option>
          </select>
          </td>
                  
          <td><input type="text" readonly name="item_name[]" id="item_name<?php echo $m; ?>" data-srno="<?php echo $m;?>" class="form-control input-sm" value="<?php echo $sub_row["item_name"]; ?>" /></td>
        

        
            <td><input type="text" name="order_item_quantity[]" id="order_item_quantity<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm order_item_quantity" value = "<?php echo $sub_row["order_item_quantity"]; ?>"/></td>
          <td><input type="text" name="order_item_price[]" id="order_item_price<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm number_only order_item_price" value="<?php echo $sub_row["order_item_price"]; ?>" /></td>
          <td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount<?php echo $m; ?>" data-srno="<?php echo $m; ?>" class="form-control input-sm order_item_actual_amount" value="<?php echo $sub_row["order_item_actual_amount"];?>" readonly /></td>
          <td></td>
        </tr>
        <?php
        }
        ?>
      </table>
      </td>
    </tr>
    <tr>
      <td align="right"><b>Total</td>
      <td align="right"><b><span id="final_total_amt"><?php echo $row["order_total_amount"]; ?></span></b></td>
    </tr>
    <tr>
      <td colspan="2"></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="hidden" name="total_item" id="total_item" value="<?php echo $m; ?>" />
        <input type="hidden" name="order_id" id="order_id" value="<?php echo $row["order_id"]; ?>" />
        <input type="submit" name="update_invoice" id="create_invoice" class="btn btn-warning" value="Edit" />
      </td>
    </tr>
</table>

</div>
</form>
<script>
$(document).ready(function(){
  var final_total_amt = $('#final_total_amt').text();
  var count = "<?php echo $m; ?>";
  
  $(document).on('click', '#add_row', function(){
    count++;
    $('#total_item').val(count);
    var html_code = '';
    html_code += '<tr id="row_id_'+count+'">';
    html_code += '<td><span id="sr_no">'+count+'</span></td>';
    
    //html_code += '<td><input type="text" name="item_name[]" id="item_name'+count+'" class="form-control input-sm" /></td>';
    
    html_code += '<td>'+
                '<select class="form-control" id="type'+count+'" name="type" onchange="SelectProduct(this);">'+
                  '<option value="empty">Select a productType</option>'+
                  '<option value="vegetables">vegetables</option>'+
                  '<option value="fruits">fruits</option>'+
                  '<option value="milkproduct">milkproduct</option>'+
                  '<option value="others">others</option>'+
                  '</select>'+
                '</td>';
                
    html_code +='<td>'+
                '<select class="form-control" id="item_name'+count+'" name="item_name[]">'+
                      '<option value="0">Select a product</option>'+
                  '</select></td>';

    html_code += '<td><input type="text" name="order_item_quantity[]" id="order_item_quantity'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_quantity" /></td>';
    html_code += '<td><input type="text" name="order_item_price[]" id="order_item_price'+count+'" data-srno="'+count+'" class="form-control input-sm number_only order_item_price" /></td>';
    html_code += '<td><input type="text" name="order_item_actual_amount[]" id="order_item_actual_amount'+count+'" data-srno="'+count+'" class="form-control input-sm order_item_actual_amount" readonly /></td>';
    
    html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-xs remove_row">X</button></td>';
    html_code += '</tr>';
    $('#invoice-item-table').append(html_code);
  });
  
  $(document).on('click', '.remove_row', function(){
    var row_id = $(this).attr("id");
    var total_item_amount = $('#order_item_final_amount'+row_id).val();
    var final_amount = $('#final_total_amt').text();
    var result_amount = parseFloat(final_amount) - parseFloat(total_item_amount);
    $('#final_total_amt').text(result_amount);
    $('#row_id_'+row_id).remove();
    count--;
    $('#total_item').val(count);
  });

  function cal_final_total(count)
  {
    var final_item_total = 0;
    for(j=1; j<=count; j++)
    {
      var quantity = 0;
      var price = 0;
      var actual_amount = 0;
      
      var item_total = 0;
      quantity = $('#order_item_quantity'+j).val();
      if(quantity > 0)
      {
        price = $('#order_item_price'+j).val();
        if(price > 0)
        {
          actual_amount = parseFloat(quantity) * parseFloat(price);
          $('#order_item_actual_amount'+j).val(actual_amount);
          
          item_total = parseFloat(actual_amount);
          final_item_total = parseFloat(final_item_total) + parseFloat(item_total);
          $('#order_item_final_amount'+j).val(item_total);
        }
      }
    }
    $('#final_total_amt').text(final_item_total);
  }

  $(document).on('blur', '.order_item_price', function(){
    cal_final_total(count);
  });



  $('#create_invoice').click(function(){
    if($.trim($('#order_receiver_name').val()).length == 0)
    {
      swal("Please Enter Reciever Name");
      return false;
    }

    if($.trim($('#order_no').val()).length == 0)
    {
      swal("Please Enter Invoice Number");
      return false;
    }
    

    if($.trim($('#order_date').val()).length == null)
    {
      swal("Please Select Invoice Date");
      return false;
    }
    //console.log($.trim($('#order_date').val()).length);

    for(var no=1; no<=count; no++)
    {
      if($.trim($('#order_item_quantity'+no).val()).length == 0)
      {
        swal("Please Enter Quantity");
        $('#order_item_quantity'+no).focus();
        return false;
      }

      if($.trim($('#order_item_price'+no).val()).length == 0)
      {
        swal("Please Enter Price");
        $('#order_item_price'+no).focus();
        return false;
      }

    }

    $('#invoice_form').submit();

  });

});
</script>

  <?php 
  }
}
else
{
?>

<h3 align="center">
<img src="img/logo.png" alter="logo" width="150" height="150" align="left">
<b>Farm Management System - Point of SALE! <span class="glyphicon glyphicon-shopping-cart"></span></b></h3>

<br />
<div align="right">
  <a href="invoice.php?add=1" class="btn btn-warning btn-s"><span class="glyphicon glyphicon-folder-open">
  CreateInvoice</span></a>
</div>
<br />
<table id="data-table" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Invoice No.</th>
      <th>Invoice Date</th>
      <th>Receiver Name</th>
      <th>Invoice Total</th>
      <th>BILL</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <?php
  if($total_rows > 0)
  {
    foreach($all_result as $row)
    {
      echo '
      <tr>
        <td>'.$row["order_no"].'</td>
        <td>'.$row["order_date"].'</td>
        <td>'.$row["order_receiver_name"].'</td>
        <td>Rs.'.$row["order_total_amount"].'</td>
        <td><a href="print_invoice.php?pdf=1&id='.$row["order_id"].'" target="_blank">PDF</a></td>
        <td><a href="invoice.php?update=1&id='.$row["order_id"].'"><span class="glyphicon glyphicon-edit"></span></a></td>
        <td><a href="#" id="'.$row["order_id"].'" class="delete"><font color="#ff0000"><span class="glyphicon glyphicon-remove"></font></span></a></td>
      </tr>
    ';
    }
  }
  ?>
</table>
<?php
  }
?>
</div>
<br>

</div>
</div>

<div class="footer">
  <div class="container text-center">
    <a href=""><i class="fa fa-facebook"></i></a>
    <a href=""><i class="fa fa-twitter"></i></a>
    <a href=""><i class="fa fa-linkedin"></i></a>
    <a href=""><i class="fa fa-google-plus"></i></a>
    <a href=""><i class="fa fa-skype"></i></a>
  </div>
  
<div class="abc-cc" style="width:100%">
  
  &copy Farm Management<br/>
Contact : 011 2 541 214<br/>
farmmanagement@gmail.com
</div>
</div></div>



</body>
</html>


<script type="text/javascript">

  $(document).ready(function(){
    var table = $('#data-table').DataTable({
          "order":[],
          "columnDefs":[
          {
            "targets":[4, 5, 6],
            "orderable":false,
          },
        ],
        "pageLength": 25
        });
    //delete field from invoices
    $(document).on('click', '.delete', function(){
      var id = $(this).attr("id");
      swal({
        title: 'Are you sure?',
        text: "You want to delete this data?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value){
          swal(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
          //after confrim delete it delete the field of that id
          window.location.href="invoice.php?delete=1&id="+id;
      }
      else
      {
        return false;
      }
    });
  });
});

</script>

<script>
  $(document).ready(function(){
  $('.number_only').keypress(function(e){
  return isNumbers(e, this);      
  });
  function isNumbers(evt, element) 
  {
  var charCode = (evt.which) ? evt.which : event.keyCode;
  if (
  (charCode != 46 || $(element).val().indexOf('.') != -1) &&  
  (charCode < 48 || charCode > 57))
  return false;
  return true;
  }
  });
</script>


<script type="text/javascript">
        
  var products = new Array(20) 
  products["empty"] = ["Select a product"]; 
  products["vegetables"] = ['Cabbage', 'Turnip', 'Radish', 'Carrot','leaks','dhall','brinjol']; 
  products["fruits"] = ['banana','orange','cocoa','guava','pineapple','avacado','grapes']; 
  products["milkproduct"] = ['yougurt','milkCup','curd','juice']; 
  products["others"]= ['eggs','chicken','cashews','soy nuts','peanuts','almond']; 
  /* SelectProduct() is called from the onchange event of a select element. 
  * param selectObj - the select object which fired the on change event. 
  */ 
  function SelectProduct(selectObj,count) { 
  // get the index of the selected option 
  var idx = selectObj.selectedIndex; 
  // get the value of the selected option 
  var which = selectObj.options[idx].value; 
  // use the selected option value to retrieve the list of items from the products array 
  cList = products[which]; 
  // get the product select element via its known id 
  var cSelect = document.getElementById("item_name"+count); 
  // remove the current options from the product select 
  var len=cSelect.options.length; 
  while (cSelect.options.length > 0) { 
  cSelect.remove(0); 
  } 
  var newOption; 
  // create new options 
  for (var i=0; i<cList.length; i++) { 
  newOption = document.createElement("option"); 
  newOption.value = cList[i];  // assumes option string and value are the same 
  newOption.text=cList[i]; 
  // add the new option 
  try { 
  cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
  } 
  catch (e) { 
  cSelect.appendChild(newOption); 
  } 
  } 
  } 
  //]]>
</script>
