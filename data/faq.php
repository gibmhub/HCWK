<?php

	require_once(__DIR__.'/data-structures.php');

	$faq_items = array();

	$faq = new FAQItem();
	$faq->frage = 'Kann ich meinen Namen, der auf dem Namensschild erscheint, nach der Registrierung noch ändern?';
	$faq->antwort = 'Ja, Sie können die Registrierung ihres Ticket-Codes einfach mit den geänderten Daten erneut durchführen. Die bei uns hinterlegten Daten werden dabei aktualisiert.';
	$faq_items[] = $faq;
	
	$faq = new FAQItem();
	$faq->frage = 'Ist das Essen/Trinken beim Ticketpreis mit eingeschlossen?';
	$faq->antwort = 'Ja, Dank unserer zahlreichen Unterstützer wird es während des Symposiums zu festen Uhrzeiten jeweils eine Mahlzeit geben, die von unserem Helferteam zubereitet wird. Die Verpflegung ist im Ticketpreis enthalten. Die jeweiligen Zeiten für die Essensausgabe können dem Programm entnommen werden. Zudem wird den Teilnehmern des Symposiums von unseren Sponsoren kostenfrei eine Auswahl an Softdrinks und Bier zur Verfügung gestellt.';
	$faq_items[] = $faq;
	
	
?>