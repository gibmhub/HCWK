<?php

    ini_set('display_startup_errors',1);
    ini_set('display_errors',1);
    error_reporting(-1);

	require_once(__DIR__.'/../config-secret.php');
	
	require_once(__DIR__.'/../VIWebFramework/VILogger.php');
	$logger = VILogger::get('tickets.payments.'.basename(__FILE__, '.php'));

	ob_start();
	var_dump($_POST);
	$result = ob_get_clean();	
	$logger->log('POST: '.$result, VI_LOG_LEVEL_INFO);


	require_once(__DIR__.'/../sofort-lib-php/core/sofortLibNotification.inc.php');
	require_once(__DIR__.'/../sofort-lib-php/core/sofortLibTransactionData.inc.php');
		
	// read notification from POST
	// TODO: SofortLibNotification doesn't work ...
/*
	$SofortLib_Notification = new SofortLibNotification();
	$txn_id = $SofortLib_Notification->getNotification(file_get_contents('php://input'));
*/
	if (isset($_POST['transaction'])) {
		$txn_id = $_POST['transaction'];
	} else {
		die('Invalid POST data');
	}

	// request data
	// TODO: SofortLibTransactionData doesn't work as well ...
/*	
	$SofortLibTransactionData = new SofortLibTransactionData($sofortueberweisung_user_id.':'.$sofortueberweisung_project_id.':'.$sofortueberweisung_api_key);
	$SofortLibTransactionData->addTransaction($txn_id);
	$SofortLibTransactionData->sendRequest();
	
	$output = array();
	$methods = array(
				'getAmount' => '',
	 			'getAmountRefunded' => '',
				'getCount' => '',
				'getPaymentMethod' => '',
				'getConsumerProtection' => '',
				'getStatus' => '',
				'getStatusReason' => '',
				'getStatusModifiedTime' => '',
				'getLanguageCode' => '',
				'getCurrency' => '',
				'getTransaction' => '',
				'getReason' => array(0,0),
				'getUserVariable' => 0,
				'getTime' => '',
				'getProjectId' => '',
				'getRecipientHolder' => '',
				'getRecipientAccountNumber' => '',
				'getRecipientBankCode' => '',
				'getRecipientCountryCode' => '',
				'getRecipientBankName' => '',
				'getRecipientBic' => '',
				'getRecipientIban' => '',
				'getSenderHolder' => '',
				'getSenderAccountNumber' => '',
				'getSenderHolder' => '',
				'getSenderBankCode' => '',
				'getSenderCountryCode' => '',
				'getSenderBankName' => '',
				'getSenderBic' => '',
				'getSenderIban' => '',
	);
	
	foreach($methods as $method => $params) {
		if(count($params) == 2) {
			$output[] = $method . ': ' . $SofortLibTransactionData->$method($params[0], $params[1]);
		} else if($params !== '') {
			$output[] = $method . ': ' . $SofortLibTransactionData->$method($params);
		} else {
			$output[] = $method . ': ' . $SofortLibTransactionData->$method();
		}
	}
	
	if($SofortLibTransactionData->isError()) {
		$logger->log('txn_error: '.$SofortLibTransactionData->getError(), VI_LOG_LEVEL_ERROR);
		die();
	} else {
		ob_start();
		var_dump($output);
		$result = ob_get_clean();	
		$logger->log('output: '.$result, VI_LOG_LEVEL_DEBUG);
	}
*/

	
	if (isset($_POST['user_variable_0'])) {
		$name = $_POST['user_variable_0'];
	} else {
		die('Invalid POST data');
	}
	
	if (isset($_POST['user_variable_1'])) {
		$email = $_POST['user_variable_1'];
	} else {
		die('Invalid POST data');
	}
	
	if (isset($_POST['user_variable_2'])) {
		$type = $_POST['user_variable_2'];
	} else {
		die('Invalid POST data');
	}

	$payment_status = 'completed';
	
	// process payment

	if (true) { // TODO: better verification
	
		require_once(__DIR__.'/database-model.php');
	
		process_payment($payment_status, 'sofortueberweisung', $txn_id, $name, $email, $type);
		
	}
		
?>