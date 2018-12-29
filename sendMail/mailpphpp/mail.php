<?php
require_once 'PHPMailer/PHPMailerAutoload.php';


// Fetching data that is entered by the user
//$email = $_POST['email'];
$email='fmsucscgroup5@gmail.com';
//$password = $_POST['password'];
$password='fmsucscg5';

//$to_id = $_POST['toid'];
$nicc = $_POST['nic'];
$to_id="";
//to get shop's email address from nic 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$connect = mysqli_connect("localhost", "root", "", "fmsmy");   
$query = "SELECT email FROM registeredshop WHERE nic ='$nicc'";  
$result = mysqli_query($connect, $query); 
  while($row = mysqli_fetch_assoc($result)) {
      $to_id= $row['email'];  
    }
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>



$message = $_POST['message'];
$subject = $_POST['subject'];

// Configuring SMTP server settings
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->FromName = "Labuduwa Farm-Management-System-IOT";

// Email Sending Details
$mail->addAddress($to_id);
$mail->Subject = $subject;
$mail->msgHTML($message);

// Success or Failure
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p>'.$error.'</p>';
}
else {


//header('Location: http://localhost/FmsFarmSide6/Farm-Management-System-IOT/#/admin/handel/orders');
echo "message successfully sent";
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';

}

?>