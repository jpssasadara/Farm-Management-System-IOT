<?php
function getReport($itemName){ 
    $con = mysqli_connect("localhost", "root", "", "fmsmy");  
    $sql = "SELECT item_name,sum(order_item_quantity) AS quantity,sum(order_item_price) AS price,sum(order_item_actual_amount) AS total
    FROM tbl_order_item  WHERE item_name='$itemName';";


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
for($x=0;$x<$n;$x++){
    array_push($reportList,getReport($items[$x]));
    $reportList[$x]['item_name']=$items[$x];
    $total+=$reportList[$x]['total'];
}
$reportList[sizeof($reportList)]=array("price"=>"Total Outcome","total"=>$total);
echo json_encode($reportList);
?>

