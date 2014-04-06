<?php
	$vortrag = Vortrag::getVortrag($_GET['id']);
	
	if (!isset($vortrag)) {
		echo '<p>Kein Vortrag ausgewählt</p>';
	} else {
?>

<h1><?=$vortrag->title?> <small><?=$vortrag->get_timeslot_string()?></small></h1>

<?=$vortrag->desc?>

<h2>Referenten</h2>

<?php
	foreach ($vortrag->getReferenten() as $referent) {
		echo $referent->getReferentBox('horizontal');
	}
?>

<?php
	}
?>