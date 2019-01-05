<?php

// Inialize session
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
//header("location:/Home.html"); //to redirect back to "index.php" after logging out
echo 'You have been logged out. <a href="/">Go back</a>';
exit();
?>