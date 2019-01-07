<?php 
	$connect = mysqli_connect("localhost", "root", "", "fmsmy");
	$data1 = json_decode(file_get_contents("php://input")); 
 	$msg = mysqli_real_escape_string($connect, $data1->msg);
	function send_notification ($tokens, $message)
	{
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array(
			 'registration_ids' => $tokens,
			 'data' => $message
			);

		$headers = array(
			'Authorization:key = AAAAUDYpADY:APA91bEb5SerOfy5WPeMrwUKV1Uvy8FTqMsv374tuewINrOEU4XXy7fgAd8WQ4ysb4BzExvoD0la-0mxZfXtbsXvRAC2gwCn4v-HKep41mB8n2zGsi-6gte2gnr3o89hOPnnjzedBSy3 ',
			'Content-Type: application/json'
			);

	   $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
       $result = curl_exec($ch);           
       if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
       }
       curl_close($ch);
       return $result;
	}
	

	$conn = mysqli_connect("localhost","root","","fmsmy");

	$sql = " Select Token From users";
	$result = mysqli_query($conn,$sql);
	$tokens = array();

	if(mysqli_num_rows($result) > 0 ){

		while ($row = mysqli_fetch_assoc($result)) {
			$tokens[] = $row["Token"];
		}
	}

	mysqli_close($conn);

	$message = array("message" =>$msg);
	$message_status = send_notification($tokens, $message);
	//echo $message_status;
	echo json_encode( $message_status);


 ?>
