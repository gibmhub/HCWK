Webseite des Heidelberger Symposiums
====================================

Site dependencies are managed using [Bower](http://bower.io) and declared in `bower.json`. Run `bower install` to install all dependencies.

A `/config-secret.php` is required to provide necessary configuration variables:

	$mysql_server, $mysql_username, $mysql_password, $mysql_database
	$paypal_merchant_id, $paypal_merchant_id_sandbox, $paypal_use_sandbox = true | false
	$sofortueberweisung_user_id, $sofortueberweisung_project_id, $sofortueberweisung_api_key

Sample implementation:

	require_once(__DIR__.'/VIWebFramework/VIConstants.php');
	VIConstants::$env = VI_ENV_DEBUG;
	
	require_once(__DIR__.'/VIWebFramework/VIPagemap.php');
	VIPagemap::$baseurl = 'http://www.heidelberger-symposium.de';
	
	require_once(__DIR__.'/VIWebFramework/VILogger.php');
	VILogger::get('default')->log_level = VI_LOG_LEVEL_WARNING;


	// Datenbank
	$mysql_server = 'localhost';
	$mysql_username = 'root';
	$mysql_password = 'root';
	$mysql_database = 'ticketliste';


	// Zahlungsarten
	
	$paypal_merchant_id = '***';
	$paypal_merchant_id_sandbox = '***';
	$paypal_use_sandbox = false;
	
	$sofortueberweisung_user_id = '***';
	$sofortueberweisung_project_id = '***';
	$sofortueberweisung_api_key = '***';

Site structure is managed by VIWebFramework::VIPagemap, see [VIWebFramework](https://github.com/viWiD/VIWebFramework/) documentation.
