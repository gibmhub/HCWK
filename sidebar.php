<?php

    $sidebar_include = array();
    if (isset($current_page->options['sidebar_include'])) {
        $sidebar_include = $current_page->options['sidebar_include'];
    }
    $sidebar_exclude = array();
    if (isset($current_page->options['sidebar_exclude'])) {
        $sidebar_exclude = $current_page->options['sidebar_exclude'];
    }
    
?>

<div id="brand-logo">
	
</div>

<?php
    
    echo '<h3>Tage bis zum Symposium</h3>';
    echo '<div id="countdown"></div>';

	if (!in_array('submenu', $sidebar_exclude, false)) {
    	if (count($current_page->childPages)>0) {
        	$parentPage = $current_page;
    	} else if (isset($current_page->parentPage)) {
        	$parentPage = $current_page->parentPage;
    	}
    	if (isset($parentPage)&&count($parentPage->childPages)>0) {
            echo '<h2>'.$parentPage->title.'</h2>';
    		echo '<ul class="submenu text" id="'.$page->id.'">';
    		foreach ($parentPage->childPages as $child) {
    			echo '<li class="page_item';
    			if ($pagemap->isCurrentPage($child)) {
    				echo ' current_page_item';
    			}
    			echo '"><a href="'.$pagemap->getUrlForPage($child).'">'.$child->title.'</a></li>';
    		}
    		echo '</ul>';
    	}
	}
	
	if (!in_array('news', $sidebar_exclude, false)) {
        include_once('../web/news_items.php');

        echo '<h3>Aktuell</h3>';
        echo '<ul id="sidebar_news" class="text">';
        foreach ($news_manager->allItems() as $item) {
            echo '<li><a href="'.$pagemap->getUrlForPage($pagemap->pageWithID('home')).'#'.$item->title.'"><i>'.$item->getDateAsString().'</i> - '.$item->title.'</a></li>';        
        }
        echo '</ul>';
	
	}	
    
    if (in_array('fb', $sidebar_include, false)) {
?>

<h3>Das Symposium auf Facebook</h3>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=214796535250344";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" data-href="http://www.facebook.com/HeidelbergerSymposium" data-width="300" data-height="The pixel height of the plugin" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>

<?php
    }

	if (false&&!in_array('rnd_referent', $sidebar_exclude, false)) {

	    include_once('data_referenten.php');
	    include_once('data_vortraege.php');
	    $referenten = Referent::allReferenten();
	    $referent = $referenten[array_rand($referenten)];

?>

<h2><?=$referent->name?></h2>
<img src="<?=$pagemap->root_url?>img/<?=$referent->getID()?>"/>
<p><?=$referent->desc?></p>

<?php
	
	}
	
?>