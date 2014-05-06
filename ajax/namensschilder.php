<?php

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
			.namensschild {
				border: 1px dotted black;
				width: 7cm;
				height: 5cm;
				display: table;
				margin: 1cm;
				float: left;
				page-break-inside: avoid;
			}
			.name {
				display: table-cell;
				vertical-align: middle;
				text-align: center;
			}
		</style>
	</head>
	<body>
<?php

	foreach ($registeredTickets as $ticket) {
	
		if (isset($ticket->name)&&$ticket->name!='') {

			// TODO: convert charset in database
			$ticket->name = str_replace('Ã„', 'Ä', $ticket->name);
			$ticket->name = str_replace('Ã¤', 'ä', $ticket->name);
			$ticket->name = str_replace('Ã–', 'Ö', $ticket->name);
			$ticket->name = str_replace('Ã¶', 'ö', $ticket->name);
			$ticket->name = str_replace('Ãœ', 'Ü', $ticket->name);
			$ticket->name = str_replace('Ã1⁄4', 'ü', $ticket->name);

			echo '<div class="namensschild">';
			
			echo '<span class="name">'.$ticket->name.'</div>';
			
			echo '</div>';
		}

	}

?>
		</div>
	</body>
</html>