<?php
 
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");


$response = array();
 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
 
    
    $filepath = realpath (dirname(__FILE__));
	require_once($filepath."/db_connect.php");
 
   
    $db = new DB_CONNECT();
 
    
    $result = mysql_query("DELETE FROM weather WHERE id = $id");
 
    
    if (mysql_affected_rows() > 0) {
        
        $response["success"] = 1;
        $response["message"] = "Data successfully deleted";
 
       
        echo json_encode($response);
    } else {
        // no matched id found
        $response["success"] = 0;
        $response["message"] = "No weather data found by given id";
 
       
        echo json_encode($response);
    }
} else {
    
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
   
    echo json_encode($response);
}
?>