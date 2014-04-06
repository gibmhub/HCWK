<?php

    require_once('pagemap_setup.php');

    if ($pagemap->env==VI_ENV_DEBUG) {
        ini_set('display_startup_errors',1);
	    ini_set('display_errors',1);
	    error_reporting(-1);
    } else {
	    error_reporting(0);
    }
    
    $current_page = $pagemap->currentPage();
        
//    $pagemap->checkURL();

	require('header.php');

	include('content/'.$current_page->file);

	require('footer.php');

?>