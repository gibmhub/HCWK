<?php
    include_once('content/data_news_items.php');

    foreach ($news_manager->allItems() as $item) {
?>
<h2 id="<?=$item->title?>"><?=$item->title?></h2>
<p><small><?=$item->getDateAsString()?></small></p>
<div><?=$item->content?></div>
<?php
        
    }

?>