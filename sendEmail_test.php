<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;   

	//Load Composer's autoloader
	require 'vendor/autoload.php';

	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = 1;                      
		$mail->isSMTP();
		$mail->Host       = 'mail.obtechenterprise.com';
		// $mail->Host       = 'mail.kusheldigi.com';
		$mail->SMTPAuth   = true;                                 
		$mail->Username   = 'admin@obtechenterprise.com';
		// $mail->Username   = 'info@kusheldigi.com';
		$mail->Password   = '@LA_vista5021';
		// $mail->Password   = 'Kusheldigiinfo@2024';
	    $mail->SMTPSecure = 'ssl';
	    $mail->Port = 465;

		//Recipients
		$mail->setFrom('admin@obtechenterprise.com');
		// $mail->setFrom('info@kusheldigi.com');
		// $mail->addAddress($_POST['cemail'], 'obtech');    
		$mail->addAddress('admin@obtechenterprise.com', 'Obtech');
		// $mail->addAddress('asitmandal492@gmail.com', 'Hiten');
		// $mail->AddReplyTo('asit.kushel@gmail.com', 'Reply');
		// $mail->addAddress($_POST['cemail']);              
		// $mail->addReplyTo($_POST['cemail'], 'Information');
		// $mail->addCC($_POST['cemail']);
		// $mail->addBCC('bcc@example.com');

		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');   

		//Content
		$mail->isHTML(true);
		$mail->Subject = $_POST['subject'];
		$mail->Body    = $_POST['message'];
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();

		$mail->clearAllRecipients();
		
		//Recipients
		$mail->setFrom('admin@obtechenterprise.com');
		$mail->addReplyTo('asit.kushel@gmail.com', 'Information');
		// $mail->setFrom('info@kusheldigi.com');
		// $mail->addAddress($_POST['cemail'], 'obtech');     //Add a recipient
		$mail->addAddress($_POST['cemail']);               //Name is optional
		
		// $mail->addCC($_POST['cemail']);
		// $mail->addBCC('bcc@example.com');

		//Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Thank You';
		$mail->Body    = 'Your Message has been send successfully';
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();

		$result = 'Message has been sent';
		echo $result;
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
?>