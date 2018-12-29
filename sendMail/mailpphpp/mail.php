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

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//massage body
$ordernum = $_POST['ordernum'];
$code = $_POST['code'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$date = $_POST['date'];

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$message = "<center><h2>#####Labuduwa Farm#####</h2></center><br><b>Dear Customer related to this order.....</b><br><center><table class='table'>
 
  <tbody>
    <tr>
      <th scope='row'>1</th>
      <td><b> ORDER NUMBER </b></td>
      <td>'$ordernum'</td>
    </tr>
    <tr>
      <th scope='row'>2</th>
      <td><b>ITEM CODE</b></td>
      <td>'$code'</td>
    </tr>
    <tr>
      <th scope='row'>3</th>
      <td><b>ITEM NAME</b></td>
      <td>'$name'</td>
    </tr>
    <tr>
      <th scope='row'>4</th>
      <td><b>AMOUNT</b></td>
      <td>'$amount'</td>
    </tr>
    <tr>
      <th scope='row'>5</th>
      <td><b>DATE</b></td>
      <td>'$date'</td>
    </tr>
  </tbody>
</table></center> <br> <p>".$_POST['message']."</p><br><b>Thanks.....<br> For More -: 0702808565 </b>";
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