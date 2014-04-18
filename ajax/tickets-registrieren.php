<?php

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
	} catch (EmailNotSentException $e) {
		die('Error sending Email');
	}

	echo 'success';
	
?>