<?php

    require_once(dirname(__FILE__).'/VIWebFramework/VIPagemap/VIPagemap.php');

    $pagemap = new VIPagemap();
	    
    $pagemap->main_title = '26. Heidelberger Symposium';
        
    
    // Error Document
    
    $current_page = $pagemap->addPageWithID('404');
    $current_page->title = 'Seite nicht gefunden';
    $pagemap->error_page = $current_page;
    $current_page->file = 'content_placeholder.php';


    // Main
    
    $main_navi = new VINavigation();
    
    // Home
    
    $current_page = $pagemap->addPageWithID('home');
    $current_page->title = 'News';
    $current_page->options['splashscreen'] = True;
    $main_navi->addElement($current_page);
    $pagemap->default_page = $current_page;

    // Symposium

    $current_page = $pagemap->addPageWithID('symposium');
    $current_page->title = '26. Symposium';
    $main_navi->addElement($current_page);

    $current_page = $pagemap->addPageWithID('schirmherr');
    $current_page->title = 'Schirmherr';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('programm');
    $current_page->title = 'Programm';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('referenten');
    $current_page->title = 'Referenten';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);
    $current_page->forward = $pagemap->error_page;
	
    $current_page = $pagemap->addPageWithID('mitmachen');
    $current_page->title = 'Mitmachen';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('spenden');
    $current_page->title = 'Spenden';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    // Veranstaltungsort
    
    $current_page = $pagemap->addPageWithID('veranstaltungsort');
    $current_page->title = 'Veranstaltungsort';
    $main_navi->addElement($current_page);

    $current_page = $pagemap->addPageWithID('anfahrt');
    $current_page->title = 'Anfahrt';
    $pagemap->pageWithID('veranstaltungsort')->addChildPage($current_page);
    $current_page->forward = $pagemap->error_page;

    $current_page = $pagemap->addPageWithID('uebernachten');
    $current_page->title = 'Übernachten';
    $pagemap->pageWithID('veranstaltungsort')->addChildPage($current_page);
	
	// Veranstalter
	
    $current_page = $pagemap->addPageWithID('veranstalter');
    $current_page->title = 'Veranstalter';
    $main_navi->addElement($current_page);

    $current_page = $pagemap->addPageWithID('hcwk');
    $current_page->title = 'Der HCWK';
    $pagemap->pageWithID('veranstalter')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('team');
    $current_page->title = 'Team 2014';
    $pagemap->pageWithID('veranstalter')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('kuratoren');
    $current_page->title = 'Kuratoren';
    $pagemap->pageWithID('veranstalter')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('kontakt');
    $current_page->title = 'Kontakt';
    $pagemap->pageWithID('veranstalter')->addChildPage($current_page);

    // Tickets
    
    $current_page = $pagemap->addPageWithID('tickets');
    $current_page->title = 'Tickets';
    $main_navi->addElement($current_page);
    
    
    // Footer
    
    $footer_navi = new VINavigation();

    // Archiv
    
    $current_page = $pagemap->addPageWithID('archiv');
    $current_page->title = 'Archiv';
    $footer_navi->addElement($current_page);
    
    // Impressum
    
    $current_page = $pagemap->addPageWithID('impressum');
    $current_page->title = 'Impressum';


?>