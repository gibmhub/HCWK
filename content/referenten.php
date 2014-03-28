<?php

	include_once('data/referenten.php');
	foreach(Referent::allReferenten() as $id => $referent) {
?>

		<div class="referent-item-large">
			<h2 id="<?=$referent->getID()?>"><?=$referent->name?> <small><?=$referent->desc?></small></h2>
			<img class="referent-img" src="/img/referenten/<?=$id?>.jpg">
			<p><?=$referent->vita?></p>
			<dl class="dl-horizontal"><dt>Veranstaltung:</dt><dd><a href="/vortrag/<?=$referent->getVortrag()->getID()?>"><?=$referent->getVortrag()->title?></a></dd></dl>
		</div>
<?php
	}	
?>