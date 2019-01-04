<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
echo "Please log in first to see this page.";
}
?>
<!Doctype html>
<html>
<style>
    .btn-group button {
        background-color: #4CAF50; /* Green background */
        border: 1px solid green; /* Green border */
        color: white; /* White text */
        padding: 10px 24px; /* Some padding */
        cursor: pointer; /* Pointer/hand icon */
        width: 10%; /* Set a width if needed */
        display: block; /* Make the buttons appear below each other */
    }

    .btn-group button:not(:last-child) {
        border-bottom: none; /* Prevent double borders */
    }

    /* Add a background color on hover */
    .btn-group button:hover {
        background-color: #3e8e41;
    }
</style>
<body>

<h1></h1>

<div class="btn-group">
    <a href="http://localhost:63342/Farm/Farm-Management-System-IOT/Customer_side/farmManagement/shopping_cart/verify_view.php" target="_blank">
        <button >Verifed</button>
    </a>
    <a href="http://localhost:63342/Farm/Farm-Management-System-IOT/Customer_side/farmManagement/shopping_cart/deliver_view.php" target="_blank">
        <button>Deliverd</button>
    </a>
    <a href="http://localhost:63342/Farm/Farm-Management-System-IOT/Customer_side/farmManagement/shopping_cart/pending_view.php" target="_blank">
        <button>Pending</button>
    </a>
</div>

</body>
</html>

