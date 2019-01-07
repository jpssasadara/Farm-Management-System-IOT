
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

    $sql = $sql = "UPDATE registeredstudent SET nic='$_POST[nic]',fname='$_POST[fname]',
    lname='$_POST[lname]',Mobile='$_POST[mobile]',Occupation='$_POST[occupation]',
    Address='$_POST[address]',email='$_POST[email]',Gender='$_POST[gender]',
    username='$_POST[username]',password='$_POST[password]' where nic='$_SESSION[nic3]' ";
    if (mysqli_query($mysqli, $sql)) {
        echo "Record updated successfully";
        header("Location:Student_accountInterface.php");
        
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }
}
    $mysqli->close();
}
else if(!isset($_SESSION['loggedin']) || (isset($_SESION['loggedin']) && $_SESSION['loggedin'] == 0)){
    //session is not set
    echo "Register here";
    header("Location:MemberStudent.html");
    exit();

}
?>

