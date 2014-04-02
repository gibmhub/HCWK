<?php

	$name = $_GET['name'];
	$email = $_GET['email'];
	$zahlungsart = $_GET['zahlungsart'];
	
	if (empty($name) || empty($email) || empty($zahlungsart) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	echo 'Invalid arguments provided';
    	return false;
	}

	if ($zahlungsart=='paypal') {
	
		echo 'not implemented';
	
	} else if ($zahlungsart=='sofortueberweisung') {

		// Sofortüberweisung:
		// Kundennummer: 51065
		// Project ID: 123090
		// API-Key: 90338bddf1109ccd07d239d499b702bb
		
		require_once(dirname(__FILE__).'/../sofort_lib_php/payment/sofortLibSofortueberweisung.inc.php');
	
		// enter your configuration key – you only can create a new configuration key by creating a new Gateway project in your account at sofort.com
		$configkey = '51065:123090:90338bddf1109ccd07d239d499b702bb';
		
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
		
?>