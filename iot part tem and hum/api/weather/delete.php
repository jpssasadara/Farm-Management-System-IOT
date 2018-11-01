<?php
 
header('content-type: application/json; charset=utf-8');
header("access-control-allow-origin: *");

//Creating array
$response = array();
 
// Check if we got the field from the user
if (isset($_GET['id'])) {
    $id = $_GET['id'];
 
    // Include data base connect class
    $filepath = realpath (dirname(__FILE__));
	require_once($filepath."/db_connect.php");
 
   // Connecting to database
    $db = new DB_CONNECT();
 
    // Fire SQL query to delete weather data by id
    $result = mysql_query("DELETE FROM weather WHERE id = $id");
 
    // Check for succesfull execution of query and no results found
    if (mysql_affected_rows() > 0) {
        // successfully deletion of temp (temperature)
        $response["success"] = 1;
        $response["message"] = "Data successfully deleted";
 
       
        echo json_encode($response);
        // else statement
    } else {
        // no matched id found
        $response["success"] = 0;
        $response["message"] = "No weather data found by given id";
 
       // Show JSON response
        echo json_encode($response);
    }
} else {
    // If required parameter is missing
    $response["success"] = 0;
    $response["message"] = "Parameter(s) are missing. Please check the request";
 
   // Show JSON response
    echo json_encode($response);
}
?>