<?php

	// Kundennummer: 51065
	// Project ID: 123090
	// API-Key: 90338bddf1109ccd07d239d499b702bb
	
	require_once(dirname(__FILE__).'/../sofort_lib_php/payment/sofortLibSofortueberweisung.inc.php');
	/*
	// enter your configuration key – you only can create a new configuration key by creating a new Gateway project in your account at sofort.com
	$configkey = '12345:12345:5dbdad2bc861d907eedfd9528127d002';
	
	$Sofortueberweisung = new Sofortueberweisung($configkey);
	
	$Sofortueberweisung->setAmount(10.21);
	$Sofortueberweisung->setCurrencyCode('EUR');
	$Sofortueberweisung->setSenderAccount('88888888', '12345678', 'Max Mustermann');
	$Sofortueberweisung->setSenderCountryCode('DE');
	$Sofortueberweisung->setReason('Testueberweisung', 'Verwendungszweck');
	$Sofortueberweisung->setSuccessUrl('http://www.google.de', true);
	$Sofortueberweisung->setAbortUrl('http://www.google.de');
	// $Sofortueberweisung->setNotificationUrl('http://www.google.de', 'loss,pending');
	// $Sofortueberweisung->setNotificationUrl('http://www.yahoo.com', 'loss');
	// $Sofortueberweisung->setNotificationUrl('http://www.bing.com', 'pending');
	// $Sofortueberweisung->setNotificationUrl('http://www.sofort.com', 'received');
	// $Sofortueberweisung->setNotificationUrl('http://www.youtube.com', 'refunded');
	// $Sofortueberweisung->setNotificationUrl('http://www.youtube.com', 'untraceable');
	$Sofortueberweisung->setNotificationUrl('http://www.twitter.com');
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
	*/
	echo 'success';
	
?>