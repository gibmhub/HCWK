<?php

	include_once(__DIR__.'/../VIWebFramework/VILogger.php');
	VILogger::get('default')->configureErrorReporting();

	if (!(isset($_GET['key'])&&$_GET['key']=='tVH8z6')) {
		die('invalid key');
	}
	
	$mode = 'zweitticket';
	
	if (isset($_GET['mode'])) {
		$mode = $_GET['mode'];
	}
	
	include_once(__DIR__.'/database-model.php');
	
	$registeredTickets = allRegisteredTickets();

?>

<html lang="de">
	<head>
	    <meta charset="utf-8">
		<style type="text/css">
			body {
				background-color: white;
			}
		</style>
	</head>
	<body>
	
<?php

	foreach ($registeredTickets as $ticket) {
	
		if ($mode=='zweitticket') {
			if (!(isset($ticket->name)&&$ticket->name!='')&&$ticket->tickettype=='reduced-double') {
				$companion_ticket = Ticket::getCompanionTicket($ticket);
				echo $companion_ticket->email.', ';
			}
		} else if ($mode=='correction') {
			if (isset($ticket->need_correction)&&$ticket->need_correction==true) {
				echo $ticket->email.', ';
			}
		}

	}
?>
	</body>
</html>