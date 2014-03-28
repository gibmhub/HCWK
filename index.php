<?php

    /*
    Site structure is managed by the VIPagemap class, see documentation in VIPagemap.php
    */
    require_once('pagemap_setup.php');
    
    $current_page = $pagemap->currentPage();
        
//    $pagemap->checkURL();

	require('header.php');

	include('content/'.$current_page->file);

	require('footer.php');    

?>