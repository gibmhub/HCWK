<?php

	include_once('data_referenten.php');
	foreach(Referent::allReferenten() as $id => $referent) {
		echo '<h2 class="clear">'.$referent->name.'</h2>';
		echo '<p><strong>'.$referent->desc.'</strong></p>';
		echo '<p><img src="'.$pagemap->root_url.'img/referenten/'.$id.'.jpg" class="portrait_thumb right" style="margin: 2em 0 2em 2em">';
		echo $referent->vita.'</p>';
	}
	
?>