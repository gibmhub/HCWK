<?php

    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);

	require_once(__DIR__.'/../config-secret.php');
	require_once(__DIR__.'/database-model.php');

	$name = $_GET['name'];
	$email = $_GET['email'];
	$zahlungsart = $_GET['zahlungsart'];
	$type = $_GET['type'];
	
	if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($zahlungsart) || empty($type)) {
    	die('Invalid arguments provided');
	}

	if ($zahlungsart=='paypal') {
	
		$payment_status = $_POST['payment_status'];
		$txn_id = $_POST['txn_id'];
		
		echo '<pre>'.var_dump($_POST).'</pre>'; // TODO: remove
		
		if (empty($payment_status) || empty($txn_id)) {
			die('Invalid callback');
		}
		
		if ($payment_status=='Completed') {
			$payment_status = 'completed';
		}
		
		process_payment($payment_status, 'paypal', $txn_id);
			
	} else if ($zahlungsart=='sofortueberweisung') {
		
		require_once(dirname(__FILE__).'/../sofort_lib_php/payment/sofortLibSofortueberweisung.inc.php');
		
		$configkey = $sofortueberweisung_configkey;
		
		$Sofortueberweisung = new Sofortueberweisung($configkey);
		
		$Sofortueberweisung->setAmount(10.21); // TODO: Preis?!
		$Sofortueberweisung->setCurrencyCode('EUR');
//		$Sofortueberweisung->setSenderAccount('67280051', '0460823902', 'HCWK e.V.');
		$Sofortueberweisung->setSenderCountryCode('DE');
		$Sofortueberweisung->setReason('Symposium 2014', '-TRANSACTION-');
		$notification_base_url = 'http://hcwk.viwid.com/tickets/?notification='; // TODO: update pre-release
		$Sofortueberweisung->setSuccessUrl($notification_base_url.'success&trx=-TRANSACTION-', true);
		$Sofortueberweisung->setAbortUrl($notification_base_url.'abort');
		// $Sofortueberweisung->setNotificationUrl('http://www.google.de', 'loss,pending');
		// $Sofortueberweisung->setNotificationUrl('http://www.yahoo.com', 'loss');
		// $Sofortueberweisung->setNotificationUrl('http://www.bing.com', 'pending');
		// $Sofortueberweisung->setNotificationUrl('http://www.sofort.com', 'received');
		// $Sofortueberweisung->setNotificationUrl('http://www.youtube.com', 'refunded');
		// $Sofortueberweisung->setNotificationUrl('http://www.youtube.com', 'untraceable');
		$Sofortueberweisung->setNotificationUrl($notification_base_url.'notification');
		$Sofortueberweisung->setCustomerprotection(false);
		
		$Sofortueberweisung->sendRequest();
		
		if($Sofortueberweisung->isError()) {
			//PNAG-API didn't accept the data
			echo $Sofortueberweisung->getError();
		} else {
			//buyer must be redirected to $paymentUrl else payment cannot be successfully completed!
			$paymentUrl = $Sofortueberweisung->getPaymentUrl();
			header('Location: '.$paymentUrl);
		}
	
	}
	
	function process_payment($payment_status, $txn_type, $txn_id) {
		if ($payment_status=='completed') {
		
			if (Ticket::has_txn_id($txn_id)) {
				die('Transaction already processed');
			}
		
			$ticketcode = Ticket::get_paid_online_ticketcode($txn_type, $txn_id);
			
			global $name, $email, $type;
			
			Ticket::register($ticketcode, $name, $email);
			
			if ($type=='reduced-double') {
				// send extra code per email
				$ticketcode = Ticket::get_paid_online_ticketcode('paypal', $txn_id);
				$receiver = $email;
				$subject = 'Ihr Online-Ticket zum 26. Heidelberger Symposium';
				$mailheader = "Content-type: text/html; charset=utf-8\r\n";
				$mailheader .= 'From: info@hcwk.de';
				$message_body = '<p>Hallo '.$name.',</p><p>Vielen Dank für den Kauf des Ticketspecials.</p><p>Ihr eigenes Ticket wurde bereits registriert. Sie erhalten diesbezüglich eine Bestätigung in einer separaten Email.</p><p>Ihr zusätzlich erworbener Ticket-Code lautet <b>'.$ticketcode.'</b>. Bitte geben Sie diesen Code an die entsprechende Person weiter, sodass er oder sie sich damit online unter <a href="http://www.heidelberger-symposium.de/tickets">http://www.heidelberger-symposium.de/tickets</a> registrieren kann.</p><p>Viel Spaß beim Symposium wünscht<br>Das Organisationsteam</p>';
				mail($receiver, $subject, $message_body, $mailheader) or die('Error sending Email');
			}
		
			die('success'); // TODO: remove
			header('Location: http://www.heidelberger-symposium.de/tickets/?payment-success=true');
		} else {
			die('failed'); // TODO: remove
			header('Location: http://www.heidelberger-symposium.de/tickets/?payment-success=false');
		}

	}
		
?>