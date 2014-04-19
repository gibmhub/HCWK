<?php

	require_once(__DIR__.'/data-structures.php');

	$faq_items = array();

	$faq = new FAQItem();
	$faq->frage = 'Ist das Essen/Trinken beim Ticketpreis mit eingeschlossen?';
	$faq->antwort = 'Ja, Dank unserer zahlreichen Unterstützer wird es während des Symposiums zu festen Uhrzeiten jeweils eine Mahlzeit geben, die von unserem Helferteam zubereitet wird. Die Verpflegung ist im Ticketpreis enthalten. Die jeweiligen Zeiten für die Essensausgabe können dem Programm entnommen werden. Zudem wird den Teilnehmern des Symposiums von unseren Sponsoren kostenfrei eine Auswahl an Softdrinks und Bier zur Verfügung gestellt.';
	$faq_items[] = $faq;

	$faq = new FAQItem();
	$faq->frage = 'Wozu dient die Registrierung meines Tickets?';
	$faq->antwort = 'Mit dem Namen, den Sie hier bei der Registrierung angeben, werden wir Ihnen ein Namensschild drucken. Dieses dient Ihnen außerdem während der Veranstaltungszeit als Eintrittskarte.';
	$faq_items[] = $faq;

	$faq = new FAQItem();
	$faq->frage = 'Wo kann ich mein Namensschild abholen?';
	$faq->antwort = 'Zu Beginn des Symposiums erhalten Sie Ihr Namensschild bei der Anmeldung am Uniplatz. Bitte bringen Sie einen Lichtbildausweis mit, der den bei der Registrierung angegebenen Namen trägt.';
	$faq_items[] = $faq;

	$faq = new FAQItem();
	$faq->frage = 'Kann ich meinen Namen, der auf dem Namensschild erscheint, nach der Registrierung noch ändern?';
	$faq->antwort = 'Ja, Sie können die Registrierung ihres Ticket-Codes einfach mit den geänderten Daten erneut durchführen. Die bei uns hinterlegten Daten werden dabei aktualisiert.';
	$faq_items[] = $faq;
	
	$faq = new FAQItem();
	$faq->frage = 'Muss ich mich auch registrieren, wenn ich ein Online-Ticket gekauft habe?';
	$faq->antwort = 'Nein, beim Online-Kauf wird ihr Name direkt bei uns hinterlegt. Sie haben diesbezüglich bereits eine Bestätigung per Email von uns erhalten.';
	$faq_items[] = $faq;
	
	$faq = new FAQItem();
	$faq->frage = 'Ich möchte das Ticketspecial kaufen. Soll ich den Namen für das zweite Ticket auch direkt mit eintragen?';
	$faq->antwort = 'Nein, geben Sie beim Online-Kauf nur Ihre eigenen Daten an. Sie erhalten dann den zweiten Ticket-Code per Email und können ihn an die zweite Person weitergeben. Er oder sie kann sich anschließend selbst mit diesem Ticket-Code registrieren.';
	$faq_items[] = $faq;
	
?>