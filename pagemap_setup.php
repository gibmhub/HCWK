<?php

    require_once(dirname(__FILE__).'/VIWebFramework/VIPagemap/VIPagemap.php');

    $pagemap = new VIPagemap();
    
    $pagemap->root_url = 'http://hcwk.viwid.com/';
    
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
    $current_page->title = 'Aktuell';
    $current_page->options['sidebar_include'] = array('fb');
    $current_page->options['sidebar_exclude'] = array('news');
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
	
    $current_page = $pagemap->addPageWithID('team');
    $current_page->title = 'Team 2014';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

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

    // Tickets
    
    $current_page = $pagemap->addPageWithID('tickets');
    $current_page->title = 'Tickets';
    $main_navi->addElement($current_page);

    // KKP

    $current_page = $pagemap->addPageWithID('designwettbewerb');
    $current_page->title = 'Designwettbewerb';
    $main_navi->addElement($current_page);
    
    
    // Footer
    
    $footer_navi = new VINavigation();
    
    // HCWK

    $current_page = $pagemap->addPageWithID('hcwk');
    $current_page->title = 'HCWK';
    $footer_navi->addElement($current_page);


    $current_page = $pagemap->addPageWithID('kuratoren');
    $current_page->title = 'Kuratoren';
    $pagemap->pageWithID('hcwk')->addChildPage($current_page);
    //$current_page->forward = $pagemap->error_page;
    $current_page->options['sidebar_items'] = 'fb';

    // Kontakt

    $current_page = $pagemap->addPageWithID('kontakt');
    $current_page->title = 'Kontakt';
    $footer_navi->addElement($current_page);

    // Archiv
    
    $current_page = $pagemap->addPageWithID('archiv');
    $current_page->title = 'Archiv';
    $footer_navi->addElement($current_page);
    
    // Impressum
    
    $current_page = $pagemap->addPageWithID('impressum');
    $current_page->title = 'Impressum';


    // Sponsors
    
    $sponsor_list = new VINavigation();

    $current_page = $pagemap->addPageWithID('sponsor_one');
    $current_page->title = 'Sponsor One';
    $sponsor_list->addElement($current_page);
    
    $current_page = $pagemap->addPageWithID('sponsor_two');
    $current_page->title = 'Sponsor Two';
    $sponsor_list->addElement($current_page);
    
    $current_page = $pagemap->addPageWithID('sponsor_three');
    $current_page->title = 'Sponsor Three';
    $sponsor_list->addElement($current_page);
    
    $current_page = $pagemap->addPageWithID('sponsor_four');
    $current_page->title = 'Sponsor Four';
    $sponsor_list->addElement($current_page);
    
    


?>