<?php

    /*
    Site structure is managed by the VIPagemap class, see documentation in VIPagemap.php for info.
    */
    require_once(dirname(__FILE__).'/pagemap_setup.php');
    
    $current_page = $pagemap->currentPage();
        
    //$pagemap->checkURL();


	require('header.php');

	require('content/'.$current_page->file);

	require('footer.php');    

?>