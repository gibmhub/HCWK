<?php

    require_once('VIWebFramework/VIPagemap/VIPagemap.php');
    require_once('config-secret.php');

    $pagemap = new VIPagemap();
	    
    $pagemap->main_title = '26. Heidelberger Symposium';
    $pagemap->baseurl = $baseurl;
    $pagemap->basedir = $basedir;

	require_once(__DIR__.'/config-secret.php');
	$pagemap->env = $env;
        
    
    // Error Document
    
    $current_page = $pagemap->addPageWithID('404');
    $current_page->title = 'Seite nicht gefunden';
    $pagemap->error_page = $current_page;
    $current_page->file = 'placeholder.php';

    // Splashscreen
    
    $current_page = $pagemap->addPageWithID('home');
    $current_page->title = 'Willkommen';
    $current_page->options['noframe'] = True;
    $pagemap->default_page = $current_page;


    // Main
    
    $main_navi = new VINavigation();

    // News

    $current_page = $pagemap->addPageWithID('news');
    $current_page->title = 'News';
    $current_page->options['sidebar_exclude'] = array('news');
    $main_navi->addElement($current_page);

    $current_page = $pagemap->addPageWithID('news-item');
    $current_page->title = 'News';
	$current_page->options['hide_title'] = true;
	$current_page->display_url = '/news/$id';

    // Symposium

    $current_page = $pagemap->addPageWithID('symposium');
    $current_page->title = '26. Symposium';
    $main_navi->addElement($current_page);

    $current_page = $pagemap->addPageWithID('grenzenlos');
    $current_page->title = 'Grenzen[los]';
    $pagemap->pageWithID('symposium')->forward = $current_page;
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('schirmherr');
    $current_page->title = 'Schirmherr';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('programm');
    $current_page->title = 'Programm';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('referenten');
    $current_page->title = 'Referenten';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('vortrag');
    $current_page->title = 'Vortrag';
	$current_page->options['hide_title'] = true;    
	$current_page->display_url = '/vortrag/$id';
	
    $current_page = $pagemap->addPageWithID('mitmachen');
    $current_page->title = 'Mitmachen';
	$current_page->options['hide_title'] = true;    
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('spenden');
    $current_page->title = 'Spenden';
    $pagemap->pageWithID('symposium')->addChildPage($current_page);

    // Veranstaltungsort
    
    $current_page = $pagemap->addPageWithID('veranstaltungsort');
    $current_page->title = 'Veranstaltungsort';
    $main_navi->addElement($current_page);

    $current_page = $pagemap->addPageWithID('heidelberg');
    $current_page->title = 'Heidelberg';
	$current_page->options['hide_title'] = true;    
    $pagemap->pageWithID('veranstaltungsort')->forward = $current_page;
    $pagemap->pageWithID('veranstaltungsort')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('anfahrt');
    $current_page->title = 'Anfahrt';
    $pagemap->pageWithID('veranstaltungsort')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('uebernachten');
    $current_page->title = 'Übernachten';
    $pagemap->pageWithID('veranstaltungsort')->addChildPage($current_page);
	
	// Veranstalter
	
    $current_page = $pagemap->addPageWithID('veranstalter');
    $current_page->title = 'Veranstalter';
    $main_navi->addElement($current_page);

    $current_page = $pagemap->addPageWithID('hcwk');
    $current_page->title = 'Der HCWK';
    $pagemap->pageWithID('veranstalter')->forward = $current_page;
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

    $current_page = $pagemap->addPageWithID('presse');
    $current_page->title = 'Presse';
//    $pagemap->pageWithID('veranstalter')->addChildPage($current_page);

    $current_page = $pagemap->addPageWithID('archiv');
    $current_page->title = 'Archiv';
    $pagemap->pageWithID('veranstalter')->addChildPage($current_page);

    // Tickets
    
    $current_page = $pagemap->addPageWithID('tickets');
    $current_page->title = 'Tickets';
    $current_page->options['noframe'] = true;
    $main_navi->addElement($current_page);
    
/*    $current_page = $pagemap->addPageWithID('ticketverkauf');
    $current_page->title = 'Ticketverkauf';
    $pagemap->pageWithID('tickets')->addChildPage($current_page);
    
    $current_page = $pagemap->addPageWithID('registrierung');
    $current_page->title = 'Ticket registrieren';
    $pagemap->pageWithID('tickets')->addChildPage($current_page);*/

    // Footer    
    
    // Impressum
    
    $current_page = $pagemap->addPageWithID('impressum');
    $current_page->title = 'Impressum';


?>