<?php

	require_once(__DIR__.'/config-secret.php');

    if (VIConstants::$env==VI_ENV_DEBUG) {
        ini_set('display_startup_errors',1);
	    ini_set('display_errors',1);
	    error_reporting(-1);
    } else {
	    error_reporting(0);
    }

    require_once(__DIR__.'/pagemap_setup.php');

    $current_page = VIPagemap::getCurrentPage();
        
    VIPagemap::checkURL();

	require(__DIR__.'/header.php');

	include(__DIR__.'/content/'.$current_page->getFile());

	require(__DIR__.'/footer.php');

?>