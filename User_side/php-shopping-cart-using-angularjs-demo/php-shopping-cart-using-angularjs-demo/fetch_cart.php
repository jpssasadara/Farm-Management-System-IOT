<?php

//fetch_cart.php

session_start();

if(isset($_SESSION["shopping_cart"]))
{
	echo json_encode($_SESSION["shopping_cart"]);	
}


?>