<?php
	include_once('data/news-items.php');

	$item = $news_manager->getItem($_GET['id']);
	
	if (!isset($item)) {
		echo '<p>Kein Artikel ausgewählt</p>';
	} else {
?>

<div class="news-item">
	<h1><?=$item->title?> <small><?=$item->getDateAsString()?></small></h1>
	<?=$item->content?>
</div>

<a href="/news" class="pull-right">Alle News >></a>

<?php
	}
?>