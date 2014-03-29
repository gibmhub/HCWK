<div class="brand-box">
	<a href="/"><img src="/img/brand/logo-light.png"></a>
	<div class="date"><i>8. – 10. Mai 2014</i></div>
</div>

<?php

	if (count($current_page->childPages)>0) {
    	$parentPage = $current_page;
	} else if (isset($current_page->parentPage)) {
    	$parentPage = $current_page->parentPage;
	}
	if (isset($parentPage)&&count($parentPage->childPages)>0) {
        echo '<h3>'.$parentPage->title.'</h3>';
		echo '<ul class="submenu-box">';
		foreach ($parentPage->childPages as $child) {
			echo '<li';
			if ($pagemap->isCurrentPage($child)) {
    			echo ' class="active"';
			}
			echo '><a href="'.$pagemap->getUrlForPage($child).'">'.$child->title.'</a></li>';
		}
		echo '</ul>';
	}
	
?>

<?php
	
//	if ($current_page->id!='news') {
        include_once('data/news-items.php');

        echo '<h3><a href="/news">Aktuell</a></h3>';
        echo $news_manager->getNewsBox(5);
	
//	}	
    
?>

<!--<div id="rnd-referent">
	<h3>Wir stellen vor:</h3>
	<?php
	    include_once('data/referenten.php');
	    include_once('data/vortraege.php');
	    $referenten = Referent::allReferenten();
	    $referent = $referenten[array_rand($referenten)];
	    echo $referent->getReferentBox('vertical');
	?>
</div>-->
