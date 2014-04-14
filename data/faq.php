<?php

	require_once(__DIR__.'/data-structures.php');

	$faq_items = array();

	$faq = new FAQItem();
	$faq->frage = 'Kann ich meinen Namen, der auf dem Namensschild erscheint, nach der Registrierung noch ändern?';
	$faq->antwort = 'Ja, Sie können die Registrierung ihres Ticket-Codes einfach mit den geänderten Daten erneut durchführen. Die bei uns hinterlegten Daten werden dabei aktualisiert.';
	$faq_items[] = $faq;
	
?>