<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	
	if (empty($name) || empty($email) || empty($msg) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    	echo 'Invalid arguments provided';
    	return false;
	}
	
	// send email
//	$receiver = 'mail@viwid.com'; // test
	$receiver = 'info@hcwk.de';
	$subject = 'Nachricht von '.$name;
	$mailheader = "Content-type: text/html; charset=utf-8\r\n";
	$mailheader .= 'From: '.$email."\r\n";
	$mailheader .= 'Cc: ott_jonas@web.de'."\r\n";
	$message_body = '<p>Name: '.$name.'</p><p>Nachricht:</br>'.$msg.'</p>';
	mail($receiver, $subject, $message_body, $mailheader) or die('Error sending Email');
	echo 'success';
?>