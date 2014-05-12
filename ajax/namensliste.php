<?php

	die('Invalid timeframe.');


	if (!(isset($_GET['key'])&&$_GET['key']=='tVH8z6')) {
		die('invalid key');
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
			thead {
				line-height: 2em;
			}
			th, td {
				padding: 0 15px;
			}
			tr:nth-child(even) {
			    background-color: #eaeaea;
			}

		</style>
	</head>
	<body>
		<p><strong><?=count($registeredTickets)?></strong> registrierte Tickets</p>
		<table>
			<thead>
				<tr>
					<th>Ticketcode</th>
					<th>Name</th>
				</tr>
			</thead>
			<tbody>
<?php

	foreach ($registeredTickets as $ticket) {
	
		// TODO: convert charset in database
		$ticket->name = str_replace('Ã„', 'Ä', $ticket->name);
		$ticket->name = str_replace('Ã¤', 'ä', $ticket->name);
		$ticket->name = str_replace('Ã–', 'Ö', $ticket->name);
		$ticket->name = str_replace('Ã¶', 'ö', $ticket->name);
		$ticket->name = str_replace('Ãœ', 'Ü', $ticket->name);
		$ticket->name = str_replace('Ã1⁄4', 'ü', $ticket->name);
		$ticket->name = str_replace('ÃŸ', 'ß', $ticket->name);
		
		$name_str = $ticket->name;
		
		if (!isset($name_str)||$name_str=='') {
			$companion_ticket = Ticket::getCompanionTicket($ticket);
			if (isset($companion_ticket)) {
				$name_str = '<i>bezahlt von '.$companion_ticket->name.' ('.$companion_ticket->ticketcode.')</i>';
			}
		}

		echo '<tr><td>'.$ticket->ticketcode.'</td><td>'.$name_str.'</td></tr>';

	}

?>
		</div>
	</body>
</html>