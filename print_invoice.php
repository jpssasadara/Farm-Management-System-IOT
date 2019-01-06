<?php
//print_invoice.php
if(isset($_GET["pdf"]) && isset($_GET["id"]))
{
 require_once 'pdf.php';
 include('database_connection.php');
 $output = '';
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
  $output .= '
   <table width="100%" border="0" cellpadding="5" cellspacing="0">
    <tr>
     <td colspan="2" align="center" style="font-size:18px"><b>LABUDUWA FARM SHOP</b></td>
    </tr>
    <tr>
     <td colspan="2">
      <table width="100%" cellpadding="5">
       <tr>
        <td width="65%">
         To,<br />
         <b>Customer (BILL TO):</b><br />
        '.$row["order_receiver_name"].',<br /> 
         '.$row["order_receiver_address"].'<br />
        </td>
        <td width="35%">
         Invoice No. : '.$row["order_no"].'<br />
         Invoice Date : '.$row["order_date"].'<br />
        </td>
       </tr>
      </table>
      <br />
      <table width="100%" border="1" cellpadding="8" cellspacing="0">
       <tr>
        <th>Sr No.</th>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Actual Amt.</th>
       </tr>';
  $statement = $connect->prepare(
   "SELECT * FROM tbl_order_item 
   WHERE order_id = :order_id"
  );
  $statement->execute(
   array(
    ':order_id'       =>  $_GET["id"]
   )
  );
  $item_result = $statement->fetchAll();
  $count = 0;
  foreach($item_result as $sub_row)
  {
   $count++;
   $output .= '
   <tr>
    <td>'.$count.'</td>
    <td>'.$sub_row["item_name"].'</td>
    <td>'.$sub_row["order_item_quantity"].'</td>
    <td>Rs. '.$sub_row["order_item_price"].'</td>
    <td align="center">Rs. '.$sub_row["order_item_actual_amount"].'</td>
   </tr>
   ';
  }
  $output .= '
  <tr>
   <td align="right" colspan="4"><h3><b>Total</b></h3></td>
   <td align="center"><h3><b>Rs. '.$row["order_total_amount"].'</b></h3></td>
  </tr>  
  ';
  $output .= '
      </table>
     </td>
    </tr>
    <tr>
    <td width="100%">Labuduwa Government Farm , Galle.</td>
    </tr>
    <tr>
    <td>TEL : 011 254 5741</td>  
    <td align="right">labuduwafarm@gmail.com</td>
    </tr>
   </table>
  ';
 }
 $pdf = new Pdf();
 $file_name = 'Invoice-'.$row["order_no"].'.pdf';
 $pdf->loadHtml($output);
 $pdf->render();
 $pdf->stream($file_name, array("Attachment" => false));
}
?>
