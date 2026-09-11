<?php
if(isset($_POST['submit'])) {
require 'mail/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';

		
			if(isset($_REQUEST['email']) && !empty($_REQUEST['email'])){
				    if(isset($_REQUEST['msg']) && !empty($_REQUEST['msg'])){
						$mail->SetFrom ('noreply@accretion.in');
						$mail->Subject = "Accreation Contact Form";
						$mail->IsHTML(true);
						$body="Email : ".$_POST['email']."<br />"."Message : ".$_POST['msg']."<br />";
						$mail->Body = $body;
						$mail->AddAddress ("info@accretion.in", 'Accretion');
						$mail->AddAddress ("rahul@accretion.in", 'Rahul Accretion');
						//$mail->SMTPDebug = 2;
						if(!$mail->Send()) {
							$error_message = "Mailer Error:-> " . $mail->ErrorInfo;
							 echo $error_message;
							header("location:contact.php");
							exit();
						}else {
							header("location:thanks.php");
							exit();
							$mail -> ClearAddresses();
						}
					}
				}

}
header("location: contact.php");
exit();
?>