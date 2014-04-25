<?php
	if (!isset($_GET['id'])||$_GET['id']=='undefined') {
		die('<div class="alert alert-danger"><strong>Kein Referent ausgewählt.</strong> Unter <a href="/referenten">Referenten</a> finden Sie eine vollständige Liste.</div>');
	}
	include_once(__DIR__.'/../data/referenten.php');
	$referent = Referent::getReferent($_GET['id']);
	if ($referent==null) {
		die('<div class="alert alert-danger"><strong>Es existiert keine Seite für diesen Referenten.</strong> Unter <a href="/referenten">Referenten</a> finden Sie eine vollständige Liste.</div>');
	}
	
?>

<ol class="breadcrumb">
  <li><a href="/symposium">26. Symposium</a></li>
  <li><a href="/referenten">Referenten</a></li>
  <li class="active"><?=$referent->name?></li>
</ol>

<div class="referent-item-large">
	<h2><?=$referent->name?> <small><?=$referent->desc?></small></h2>
	<img class="referent-img" src="/img/referenten/<?=$referent->getID()?>.jpg">
	<p><?=$referent->vita?></p>
	<dl class="dl-horizontal"><dt>Veranstaltung:</dt><dd><a href="/vortrag/<?=$referent->getVortrag()->getID()?>"><?=$referent->getVortrag()->title?></a></dd></dl>
</div>
