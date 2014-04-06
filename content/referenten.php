<?php

	include_once('data/referenten.php');
	
	// sort by vortrag->title > name
	function referenten_sort(Referent $a, Referent $b) {
		$cmp_days = $a->getVortrag()->day - $b->getVortrag()->day;
		if ($cmp_days==0) {
			$cmp_slots = $a->getVortrag()->slot - $b->getVortrag()->slot;
			if ($cmp_slots==0) {
				$cmp_titles = strcmp($a->getVortrag()->title, $b->getVortrag()->title);
				if ($cmp_titles==0) {
					return strcmp($a->name, $b->name);
				} else {
					return $cmp_titles;
				}
			} else {
				return $cmp_slots;
			}
		} else {
			return $cmp_days;
		}
	}
	
	$all_referenten = Referent::allReferenten();
	usort($all_referenten, "referenten_sort");
	
	foreach($all_referenten as $referent) {
?>

		<div class="referent-item-large">
			<h2 id="<?=$referent->getID()?>"><?=$referent->name?> <small><?=$referent->desc?></small></h2>
			<img class="referent-img" src="/img/referenten/<?=$referent->getID()?>.jpg">
			<p><?=$referent->vita?></p>
			<dl class="dl-horizontal"><dt>Veranstaltung:</dt><dd><a href="/vortrag/<?=$referent->getVortrag()->getID()?>"><?=$referent->getVortrag()->title?></a></dd></dl>
		</div>
<?php
	}	
?>