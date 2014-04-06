<?php

    /*
    	Site structure is managed by the VIPagemap class, see documentation in VIPagemap.php
    	
    	A config-secret.php is required to provide the following variables:
    	
    	$env = VI_ENV_DEBUG | VI_ENV_RELEASE
    	
    	$mysql_server
		$mysql_username
		$mysql_password
	
		$sofortueberweisung_configkey = '__userID__:__projectID__:__APIKey__';

    */

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