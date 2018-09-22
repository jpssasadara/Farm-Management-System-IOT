<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$query = "SELECT * FROM items";
$statement = $connect->prepare($query);
$statement->execute();
while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);

?>