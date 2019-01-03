<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
echo "Please log in first to see this page.";
}
?>
<p><a href="logout.php">Logout</a></p>


