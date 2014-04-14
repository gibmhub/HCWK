<?php

	require_once(__DIR__.'/data-structures.php');

	$faq_items = array();

	$faq = new FAQItem();
	$faq->frage = 'Wird für das leibliche Wohl gesorgt?';
	$faq->antwort = 'klaaaro';
	$faq_items[] = $faq;
	
?>