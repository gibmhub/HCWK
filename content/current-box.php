<?php
	include_once(__DIR__.'/../data/vortraege.php');
	
	$current_time = time() - mktime(0,0,0,5,7,2014); // ab Mittwoch 0.00h
	
	$current_day = floor($current_time/(60*60*24));
	$current_slot = (($current_time-$current_day*60*60*24)-9*60*60)/(60*60);
	if ($current_slot<4) {
		$current_slot++;
	}
	$current_slot = floor(($current_slot-1)/2)+1;
	if ($current_slot<0) $current_slot = 0;
	
	$current_vortraege = Vortrag::vortraege_in_timeslot($current_day, $current_slot);
	
	if (count($current_vortraege)>0) {

		echo '<h3>Momentan findet statt…</h3>';
	
		foreach ($current_vortraege as $vortrag) {
			echo $vortrag->tableItem();
		}
		
	}
	
	$next_day = $current_day;
	$next_slot = $current_slot+1;
	while (count(Vortrag::vortraege_in_timeslot($next_day, $next_slot))==0) {
		$next_slot++;
		if ($next_slot>6) {
			$next_day++;
			$next_slot = 1;
		}
		if ($next_day>3) break;
	}

	$next_vortraege = Vortrag::vortraege_in_timeslot($next_day, $next_slot);
	
	if (count($next_vortraege)>0) {

		echo '<h3>Als nächstes um '.Vortrag::slot_string($next_slot).'…</h3>';
	
		foreach ($next_vortraege as $vortrag) {
			echo $vortrag->tableItem();
		}
		
		echo '<a class="pull-right" href="/programm">Zum Programm >></a><div>&nbsp</div>';
		
	}
	
?>
