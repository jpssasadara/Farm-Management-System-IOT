<?php
require_once 'PHPMailer/PHPMailerAutoload.php';
$connect = mysqli_connect("localhost", "root", "", "fmsmy"); 
 $data1 = json_decode(file_get_contents("php://input"));

$email='fmsucscgroup5@gmail.com';
$password='fmsucscg5';

$shopid = mysqli_real_escape_string($connect, $data1->shop_id);
$ordernum = mysqli_real_escape_string($connect, $data1->order_number);
$code = mysqli_real_escape_string($connect, $data1->code);
$name = mysqli_real_escape_string($connect, $data1->name);
$amount = mysqli_real_escape_string($connect, $data1->amount);
$date = mysqli_real_escape_string($connect, $data1->date);


//$nicc = $_POST['nic'];
$to_id="";
//'shop_id':$shopid,'order_number':$ordernumber,'code':$code,'name':$name,'amount':$amount,'date':date


//to get shop's email address from nic 
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
  
$query = "SELECT email FROM registeredshop WHERE nic ='$shopid'";  
$result = mysqli_query($connect, $query); 
  while($row = mysqli_fetch_assoc($result)) {
      $to_id= $row['email'];  
    }
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//massage body


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
</table></center> <br> <p>"."We have accepted your above order. It may be purchased from farm shop on time . If transport facilities are required let us know before two days (Tel - 0702535687). "."</p><br><b>Thanks.....<br> For More -: 0702808565 </b>";
$subject = "Verified Order";

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
echo $error;
}
else {


//header('Location: http://localhost/FmsFarmSide6/Farm-Management-System-IOT/#/admin/handel/orders');
echo "message successfully sent";
//echo '<script language="javascript">';
//echo 'alert("message successfully sent")';
//echo '</script>';

}

?>