<?php

//remove_item.php

session_start();

$product_data = json_decode(file_get_contents("php://input"));
$product_id = $product_data;

foreach($_SESSION["shopping_cart"] as $keys => $values)
{
	if($values["product_id"] == $product_id)
	{
		unset($_SESSION["shopping_cart"][$keys]);
	}
}

?>