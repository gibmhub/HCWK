<?php

	require_once(__DIR__.'/config-secret.php');

	require_once(__DIR__.'/VIWebFramework/VILogger.php');
	VILogger::get('default')->configureErrorReporting(VI_LOG_LEVEL_DEBUG);


    require_once(__DIR__.'/pagemap_setup.php');

    $current_page = VIPagemap::getCurrentPage();
        
    VIPagemap::checkURL();

	require(__DIR__.'/header.php');

	include(__DIR__.'/content/'.$current_page->getFile());

	require(__DIR__.'/footer.php');

?>