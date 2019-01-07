<?php
session_start();
if(isset($_SESSION['nic1']) && $_SESSION['loggedin'] == 1) {
    //session is set

    $mysqli = new mysqli("localhost", "root", '', "fmsmy");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    if(isset($_POST)) {

        $sql = "UPDATE registeredfarmer SET Id='$_POST[nic]',First_Name='$_POST[fname]',
        Gender='$_POST[gender]',Tele_Number='$_POST[mobile]',Address='$_POST[address]',
        email='$_POST[email]',variety='$_POST[q1]',username='$_POST[username]',password='$_POST[password]'
        where Id='$_SESSION[nic1]' ";
        if (mysqli_query($mysqli, $sql)) {
            echo "Record updated successfully";
            header("Location:Farmer_accountInterface.php");
        } else {
            echo "Error updating record: " . mysqli_error($mysqli);
        }
    }
    $mysqli->close();
}
else if(!isset($_SESSION['loggedin']) || (isset($_SESION['loggedin']) && $_SESSION['loggedin'] == 0)){
    //session is not set
    echo "Register here";
    header("Location:RegisterFarmer.html");
    exit();

}
?>

