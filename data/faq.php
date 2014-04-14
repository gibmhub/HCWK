<?php

	require_once(__DIR__.'/data-structures.php');

	$faq_items = array();

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
	
?>