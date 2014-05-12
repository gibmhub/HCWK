<div class="tickets-box">
<?php
	include_once(__DIR__.'/../ajax/database-model.php');
	echo 'Nur noch <strong>'.ticketsLeftCount().'</strong> Tickets verfügbar.';
?>
	<a href="/tickets" class="btn btn-primary">Tickets registrieren<br>oder kaufen</a><br>
</div>
