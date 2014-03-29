<?php
    include_once('data/news-items.php');

    foreach ($news_manager->allItems() as $item) {
?>
<div class="news-item">
	<h2 id="<?=$item->title?>"><a href="/news/<?=$item->getID()?>" class="unstyled"><?=$item->title?> <small><?=$item->getDateAsString()?></small></a></h2>
	<?=$item->content?>
</div>
<?php
        
    }

?>