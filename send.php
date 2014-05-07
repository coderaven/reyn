<?php  
	require 'PHPMailerAutoload.php';
	// Send Emailt
	if (isset($_POST['message'])){
	    $mail = new PHPMailer;
	    $mail->isSMTP();
	    $mail->Host = getenv('POSTMARK_SMTP_SERVER');
	    $mail->SMTPAuth = true;
	    $mail->Username = getenv('POSTMARK_API_KEY');
	    $mail->Password = getenv('POSTMARK_API_KEY'); 
	    $mail->SMTPSecure = 'tls';

	    $mail->From = "reynville@gmail.com";
		$mail->FromName = "Reynville";
		$mail->addAddress('rabintoy@gmail.com', 'Raven Duran');

		$mail->WordWrap = 70;
		$mail->Subject = "365 Days Message from Reynville";
		$mail->Body    = $_POST["message"];

		if(!$mail->send()) {
		   echo "error";
		   exit;
		}

		echo "success";
	} else {
		echo "error";
		exit;
	}
?>