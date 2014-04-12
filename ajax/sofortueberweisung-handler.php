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
	
		require_once(dirname(__FILE__).'/../sofort_lib_php/payment/sofortLibSofortueberweisung.inc.php');
		
		if (isset($_GET['payment_status'])) {
			$payment_status = $_GET['payment_status'];
		} else {
			$payment_status = 'setup';
		}

		switch ($payment_status) {
			
			case 'setup':
			
				$configkey = $sofortueberweisung_configkey;
				
				$Sofortueberweisung = new Sofortueberweisung($configkey);
				
				switch ($type) {
					case 'reduced':
						$price = 15;
						break;
					case 'reduced-double':
						$price = 26;
						break;
					case 'normal':
						$price = 30;
						break;
				}
				
				$Sofortueberweisung->setAmount($price);
				$Sofortueberweisung->setCurrencyCode('EUR');
				// $Sofortueberweisung->setSenderAccount('67280051', '0460823902', 'HCWK e.V.'); // TODO: necessary?
				$Sofortueberweisung->setSenderCountryCode('DE');
				$Sofortueberweisung->setReason('HD Symposium 2014', '-TRANSACTION-');
				$notification_base_url = 'http://www.heidelberger-symposium.de/ajax/?name='.$name.'&email='.$email.'&zahlungsart=sofortueberweisung&type='.$type.'&txn_id=-TRANSACTION-&payment_status='; // TODO: update pre-release
				$Sofortueberweisung->setSuccessUrl($notification_base_url.'completed', true);
				$Sofortueberweisung->setAbortUrl($notification_base_url.'abort');
				$Sofortueberweisung->setNotificationUrl($notification_base_url.'notification');
				$Sofortueberweisung->setCustomerprotection(false);
				
				$Sofortueberweisung->sendRequest();
				
				if($Sofortueberweisung->isError()) {
					//PNAG-API didn't accept the data
					die($Sofortueberweisung->getError());
				} else {
					//buyer must be redirected to $paymentUrl else payment cannot be successfully completed!
					$paymentUrl = $Sofortueberweisung->getPaymentUrl();
					header('Location: '.$paymentUrl);
				}
				
				break;
				
			default:
			
				$txn_id = $_GET['txn_id'];
				
				process_payment($payment_status, 'sofortueberweisung', $txn_id);
				
				break;
			
		}
		
?>