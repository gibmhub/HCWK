<?php
	
	if (!isset($item)) {
		echo '<p>Kein Artikel ausgewählt</p>';
	} else {
?>
<?php
	if (!isset($_GET['id'])||$_GET['id']=='undefined') {
		die('<div class="alert alert-danger"><strong>Kein Artikel ausgewählt.</strong> Unter <a href="/news">News</a> finden Sie eine vollständige Liste.</div>');
	}
	require_once(__DIR__.'/../data/news-items.php');
	$item = VINewsManager::getItem($_GET['id']);
	if ($item==null) {
		die('<div class="alert alert-danger"><strong>Es existiert keine Seite für diesen Artikel.</strong> Unter <a href="/news">News</a> finden Sie eine vollständige Liste.</div>');
	}
	
?>

<ol class="breadcrumb">
  <li><a href="/news">News</a></li>
  <li class="active"><?=$item->title?></li>
</ol>

<div class="news-item">
	<h1><?=$item->title?> <small><?=$item->getDateAsString()?></small></h1>
	<?=$item->content?>
</div>

<a href="/news" class="pull-right">Alle News >></a>

<?php
	}
?>