<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 1) {
    //session is set

    $mysqli = new mysqli("localhost", "root", '', "fmsmy");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    if(isset($_POST['update'])) {

        $sql = $sql = "UPDATE registeredshop SET nic='$_POST[nic]',fn='$_POST[fname]',ln='$_POST[lname]',pn='$_POST[mobile]',address='$_POST[address]',email='$_POST[email]',un='$_POST[username]',pw='$_POST[password]' where nic='$_SESSION[nic]' ";
        if (mysqli_query($mysqli, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($mysqli);
        }
    }
    $mysqli->close();
}
else if(!isset($_SESSION['loggedin']) || (isset($_SESION['loggedin']) && $_SESSION['loggedin'] == 0)){
    //session is not set
    echo "Register here";
    header("Location:Login_Registration/RegisterFarmer.html");
    exit();

}
?>

