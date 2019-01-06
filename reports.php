<?php
include('database_connection.php');
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class Pdf extends Dompdf{
 public function __construct() {
        parent::__construct();
    }
}
function getReport($itemName,$date){ 
    $con = mysqli_connect("localhost", "root", "", "fmsmy");

    $sql = "SELECT tbl_order_item.item_name,sum(tbl_order_item.order_item_quantity) AS quantity,
    sum(tbl_order_item.order_item_price) AS price,sum(tbl_order_item.order_item_actual_amount) AS total
    FROM tbl_order_item  
    LEFT JOIN tbl_order ON tbl_order_item.order_id=tbl_order.order_id WHERE tbl_order_item.item_name='$itemName' and 
    tbl_order.order_date LIKE '%$date%'";


    $result = mysqli_query($con,$sql);
    $response = array();
    while($row = mysqli_fetch_array($result))
    {
        array_push($response,array("item_name"=>$row[0],"quantity"=>$row[1],"price"=>$row[2],"total"=>$row[3]));
    }
    //echo json_encode(array("server_response"=>$response));
    //echo json_encode($response[0]);
    //mysql_close($con);
    return $response[0];
}


$items=array('Cabbage', 'Turnip', 'Radish', 'Carrot','leaks','dhall','brinjol',
'Banana','Orange','Cocoa','Guava','Pineapple','Avacado','Grapes',
'Yougurt','MilkCup','Curd','Juice',
'Eggs','Chicken','Cashews','Soy nuts','Peanuts','Almond');
$n=sizeof($items);
$reportList=array();
$total=0;

$year=$_GET['year'];
$month=$_GET['month'];

$date=$year."-".$month;

for($x=0;$x<$n;$x++){
    array_push($reportList,getReport($items[$x],$date));
    $reportList[$x]['item_name']=$items[$x];

    $total+=$reportList[$x]['total'];
}
$output="<center><h2><u>Monthly Bill report<u></h2>
<h3>Month :<b> $date</b> </h3><hr>";
$output.='
<table width="100%" border="1" cellpadding="5" cellspacing="0"> 
    <tr align="center"> 
        <th scope="col">Item Name</th>
        <th scope="col">Quantity</th>  
        <th scope="col">Price(Rs.)</th>
        <th scope="col">Total Amount(Rs.)</th>
    </tr>';

    foreach($reportList as $x){
        $output .= '
        <tr align="center">
         <td>'.$x["item_name"].'</td>
         <td>'.$x["quantity"].'</td>
         <td>'.$x["price"].'</td>
         <td align="center">'.$x["total"].'</td>
        </tr>
        ';
    }
    $output.= "<tr>
            <td></td>
            <td></td>
            <td><b>Total</b></td>
            <td><center>Rs. <b>$total</center></td>
            
    </tr></table><hr>";


$pdf = new Pdf();
$file_name = "Monthlyreport.pdf";
$pdf->loadHtml($output);
$pdf->render();
$pdf->stream($file_name, array("Attachment" => false));

?>