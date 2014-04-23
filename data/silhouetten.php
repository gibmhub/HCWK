<?php

	class Silhouette {
		public $id;
		public $spruch;
	}
	
	$silhouetten = array();
	
	$item = new Silhouette();
	$item->id = 'ghandi';
	$item->spruch = 'Grenzen<i>lose</i> Freiheit';
	$silhouetten[] = $item;

	$item = new Silhouette();
	$item->id = 'einstein';
	$item->spruch = 'Grenzen<i>loses</i> Wissen';
	$silhouetten[] = $item;

	$item = new Silhouette();
	$item->id = 'chaplin';
	$item->spruch = 'Grenzen<i>loser</i> Humor';
	$silhouetten[] = $item;

	$item = new Silhouette();
	$item->id = 'dali';
	$item->spruch = 'Grenzen<i>lose</i> Fantasie';
	$silhouetten[] = $item;

	$item = new Silhouette();
	$item->id = 'nietzsche';
	$item->spruch = 'Grenzen<i>lose</i> Freiheit';
	$silhouetten[] = $item;

	$item = new Silhouette();
	$item->id = 'teresa';
	$item->spruch = 'Grenzen<i>lose</i> Güte';
	$silhouetten[] = $item;

?>