<?php
$connect = mysqli_connect("localhost", "root", "", "fmsmy");
$dataa=array();

$data = json_decode(file_get_contents("php://input"));

$name = mysqli_real_escape_string($connect, $data->{'details.name'});
$email = mysqli_real_escape_string($connect, $data->{'details.email'});       
$subject = mysqli_real_escape_string($connect, $data->{'details.subject'});
$reply = mysqli_real_escape_string($connect, $data->{'details.reply'});       


if($name!=null && $email!=null && $subject!=null && $reply!=null){
    include('Mail.php');
    $from = '<fmslabuduwa@mail.com>'; //change this to your email address
    $to = $email; // change to address
    $subject = $subject; // subject of mail
    $body = $reply; //content of mail

    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $subject
    );

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'fmslabuduwa@gmail.com', //your gmail account
        'password' => 'Leavemealone_1' // your password
    ));

    // Send the mail
    $mail = $smtp->send($to, $headers, $body);

    //check mail sent or not
    if (PEAR::isError($mail)) {
        $dataa["error"]=$mail->getMessage();
    } else {
        $dataa["success"]='<p>Message successfully sent!</p>';
    }
}
echo json_encode($dataa);

 ?>

