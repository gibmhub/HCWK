<?php
	if (!isset($_GET['id'])||$_GET['id']=='undefined') {
		die('<div class="alert alert-danger"><strong>Kein Vortrag ausgewählt.</strong> Unter <a href="/programm">Programm</a> finden Sie eine vollständige Liste.</div>');
	}
	$vortrag = Vortrag::getVortrag($_GET['id']);
	if ($vortrag==null) {
		die('<div class="alert alert-danger"><strong>Es existiert keine Seite für diesen Vortrag.</strong> Unter <a href="/programm">Programm</a> finden Sie eine vollständige Liste.</div>');
	}
	
?>

<ol class="breadcrumb">
  <li><a href="/symposium">26. Symposium</a></li>
  <li><a href="/programm">Programm</a></li>
  <li class="active"><?=$vortrag->title?></li>
</ol>

<h1><?=$vortrag->title?> <small><?=$vortrag->get_timeslot_string()?></small></h1>

<?=$vortrag->desc?>

<h2>Referenten</h2>

<?php
	foreach ($vortrag->getReferenten() as $referent) {
		echo $referent->getReferentBox('horizontal');
	}
?>
