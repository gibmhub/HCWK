<div id="sidebar">

	<div class="brand-box">
		<a href="/"><img class="logo" src="/img/brand/logo-light.svg"></a>
		<div class="date"><i>8. – 10. Mai 2014</i></div>
	</div>
	
<?php // include(__DIR__.'/content/tickets-box.php'); ?>

<?php // include(__DIR__.'/content/current-box.php'); ?>
	
	<?php
	
		if (count($current_page->getChildPages())>0) {
	    	$parentPage = $current_page;
		} else if ($current_page->getParentPage()!=null) {
	    	$parentPage = $current_page->getParentPage();
		}
		if (isset($parentPage)&&count($parentPage->getChildPages())>0) {
	        echo '<h3>'.$parentPage->title.'</h3>';
			echo '<ul class="submenu-box">';
			foreach ($parentPage->getChildPages() as $child) {
				echo '<li';
				if (VIPagemap::isCurrentPage($child)) {
	    			echo ' class="active"';
				}
				echo '><a href="'.$child->displayURL().'">'.$child->title.'</a></li>';
			}
			echo '</ul>';
		}
		
	?>
	
	<?php
		
	//	if ($current_page->id!='news') {
	        require_once(__DIR__.'/data/news-items.php');
	
	        echo '<h3><a href="/news">Aktuell</a></h3>';
	        echo VINewsManager::getNewsBox(5);
		
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
	
</div>