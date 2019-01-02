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

    $sql = "INSERT INTO regshoporder (Date, Item_Code,Amount,Verified,Delivered,Reg_Shop_Id)
    values ('$_POST[date]','$_POST[Icode]','$_POST[quentity]',false ,false ,'$_POST[id]')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
else if(!isset($_SESSION['loggedin']) || (isset($_SESION['loggedin']) && $_SESSION['loggedin'] == 0)){
    //session is not set
    echo "Register here";
    //header("Location:Login_Registration/RegisterFarmer.html");
    //exit();

}
?>

