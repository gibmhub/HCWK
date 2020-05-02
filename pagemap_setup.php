<?php

    require_once(__DIR__.'/config-secret.php');
    require_once(__DIR__.'/VIWebFramework/VIPagemap.php');

    VIPagemap::$main_title = 'Redox Simposio';


    // Error Document

    $page = VIPagemap::addPage('404');
    $page->title = 'Seite nicht gefunden';
    $page->filename = 'placeholder.php';
    VIPagemap::$error_page = $page;

    // Splashscreen

    $page = VIPagemap::addPage('home');
    $page->title = 'Willkommen';
    $page->options['show_banner'] = true;
    $page->options['hide_sidebar'] = true;
    $page->options['hide_title'] = true;
    VIPagemap::$default_page = $page;


    // Main

    $main_navi = new VINavigation('main-navi');

    // News

    $page = VIPagemap::addPage('news');
    $page->title = 'News';
    $page->options['sidebar_exclude'] = array('news');
    $main_navi->addElement($page);

    $page = VIPagemap::addPage('news-item');
    $page->title = 'News';
	$page->options['hide_title'] = true;
	$page->display_url = '/news/$id';

    // Symposium

    $page = VIPagemap::addPage('symposium');
    $page->title = '26. Symposium';
    $main_navi->addElement($page);

    $page = VIPagemap::addPage('grenzenlos');
    $page->title = 'Grenzen[los]';
    VIPagemap::getPage('symposium')->forward = $page;
    VIPagemap::getPage('symposium')->addChildPage($page);

    $page = VIPagemap::addPage('schirmherr');
    $page->title = 'Schirmherr';
    VIPagemap::getPage('symposium')->addChildPage($page);

    $page = VIPagemap::addPage('programm');
    $page->title = 'Programm';
    VIPagemap::getPage('symposium')->addChildPage($page);

    $page = VIPagemap::addPage('referenten');
    $page->title = 'Referenten';
    VIPagemap::getPage('symposium')->addChildPage($page);

    $page = VIPagemap::addPage('referent');
    $page->title = 'Referent';
	$page->options['hide_title'] = true;
	$page->display_url = '/referent/$id';

    $page = VIPagemap::addPage('vortrag');
    $page->title = 'Vortrag';
	$page->options['hide_title'] = true;
	$page->display_url = '/vortrag/$id';

    $page = VIPagemap::addPage('mitmachen');
    $page->title = 'Mitmachen';
	$page->options['hide_title'] = true;
    VIPagemap::getPage('symposium')->addChildPage($page);

    $page = VIPagemap::addPage('spenden');
    $page->title = 'Spenden';
    VIPagemap::getPage('symposium')->addChildPage($page);

    // Veranstaltungsort

    $page = VIPagemap::addPage('veranstaltungsort');
    $page->title = 'Veranstaltungsort';
    $main_navi->addElement($page);

    $page = VIPagemap::addPage('heidelberg');
    $page->title = 'Heidelberg';
	$page->options['hide_title'] = true;
    VIPagemap::getPage('veranstaltungsort')->forward = $page;
    VIPagemap::getPage('veranstaltungsort')->addChildPage($page);

    $page = VIPagemap::addPage('anfahrt');
    $page->title = 'Anfahrt';
    VIPagemap::getPage('veranstaltungsort')->addChildPage($page);

    $page = VIPagemap::addPage('uebernachten');
    $page->title = 'Übernachten';
    VIPagemap::getPage('veranstaltungsort')->addChildPage($page);

	// Veranstalter

    $page = VIPagemap::addPage('veranstalter');
    $page->title = 'Veranstalter';
    $main_navi->addElement($page);

    $page = VIPagemap::addPage('hcwk');
    $page->title = 'Der HCWK';
    VIPagemap::getPage('veranstalter')->forward = $page;
    VIPagemap::getPage('veranstalter')->addChildPage($page);

    $page = VIPagemap::addPage('team');
    $page->title = 'Team 2014';
    VIPagemap::getPage('veranstalter')->addChildPage($page);

    $page = VIPagemap::addPage('kuratoren');
    $page->title = 'Kuratoren';
    VIPagemap::getPage('veranstalter')->addChildPage($page);

    $page = VIPagemap::addPage('kontakt');
    $page->title = 'Kontakt';
    VIPagemap::getPage('veranstalter')->addChildPage($page);

    $page = VIPagemap::addPage('presse');
    $page->title = 'Presse';
    VIPagemap::getPage('veranstalter')->addChildPage($page);

    $page = VIPagemap::addPage('archiv');
    $page->title = 'Archiv';
    VIPagemap::getPage('veranstalter')->addChildPage($page);

#    // Tickets
#
#    $page = VIPagemap::addPage('tickets');
#    $page->title = 'Tickets';
#    $page->options['show_banner'] = true;
#    $page->options['hide_sidebar'] = true;
#    $page->options['hide_title'] = true;
#    $main_navi->addElement($page);

/*    $page = VIPagemap::addPage('ticketverkauf');
    $page->title = 'Ticketverkauf';
    VIPagemap::getPage('tickets')->addChildPage($page);

    $page = VIPagemap::addPage('registrierung');
    $page->title = 'Ticket registrieren';
    VIPagemap::getPage('tickets')->addChildPage($page);*/

    // Footer

    // Impressum

    $page = VIPagemap::addPage('impressum');
    $page->title = 'Impressum';


?>
