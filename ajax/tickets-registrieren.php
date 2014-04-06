<?php

    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);

	$name = $_GET['name'];
	$email = $_GET['email'];
	$ticketcode = $_GET['ticketcode'];

	if (empty($name) || empty($email) || empty($ticketcode) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	die('Invalid arguments provided');
	}
		
	require_once(__DIR__.'/database-model.php');
	
	try {
		Ticket::register($ticketcode, $name, $email);
	} catch (NotFoundException $e) {
		die('Invalid ticket code');
	}
	
	// send email
	$receiver = $email;
	$subject = 'Registrierung zum 26. Heidelberger Symposium';
	$mailheader = "Content-type: text/html; charset=utf-8\r\n";
	$mailheader .= 'From: mail@viwid.com';
	$message_body = '<p>Hallo '.$name.',</p><p>Vielen Dank für Ihre Registrierung mit der Ticketnummer <b>'.$ticketcode.'</b>.</p>';
	mail($receiver, $subject, $message_body, $mailheader) or die('Error sending Email');

	echo 'success';
	
?>