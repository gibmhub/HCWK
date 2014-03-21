<img src="<?=$pagemap->root_url?>img/Content/team.png">
<p>Wir sind ein Team aus engagierten Studierenden verschiedener Fachrichtungen und Fachsemester der Universität Heidelberg. Motiviert  durch ein großes Interesse an aktuellen Themen und allgemeinen Fragen des gesellschaftlichen Lebens sowie Freude am Planen und Organisieren haben wir uns dazu entschieden, aktiv bei der Gestaltung und Durchführung des Heidelberger Symposiums mitzuwirken. Ein Jahr lang befassen wir uns mit den verschiedensten Tätigkeiten von der Spendenakquise bis zum Zeltabbau, um ein interessantes Symposium mit vielen Vertretern aus Politik, Wissenschaft, Wirtschaft und Kultur auf die Beine zu stellen. In den verschiedenen Aufgabenbereichen der Referenten-, Public Relations- oder Spendengruppe kann jeder seine Stärken einbringen.</p>
<p>Unterstützt und beraten werden wir, vor allem in der Anfangszeit, vom Vorstand und Beirat des Clubs, die jedes Jahr aus ehemaligen Organisatoren neu gewählt werden und die uns einerseits mit ihrer Erfahrung zur Seite stehen, uns aber andererseits genug Freiraum für unsere eigenen Ideen und Kreativität lassen. 
Wir freuen uns, dieses Jahr Teil der Tradition des HCWK geworden zu sein und hoffen, mit dem 26. Symposium zum Thema „Grenzen(los)!“ ein weiteres Kapitel zur Erfolgsgeschichte des Heidelberger Symposiums hinzufügen zu können.</p>

<h2 style="clear:both">Organisationsteam</h2>
<h4 style="clear:both"> Sagen Sie jetzt nichts...! </h4>

<ul class="double teamlist">
<?php

	include_once('data_team.php');
	foreach($personen as $person) {
		echo '<li><ul class="teamitem text"><li class="bild"><img src="'.$pagemap->root_url.'img/team/'.$person->bild.'" class="portrait_thumb"></li><li class="name">'.$person->name.'</li><li class="fach">'.$person->fach.'</li><li class="extra">'.$person->extra.'</li></ul></li>';
	}
	
?>
</ul>

<div style="width: 50%; float: left; clear:both;">
	<h3>Vorstand</h3>
	<p><b>Felicitas Eichhorn</b><br />Geschichtswissenschaften und Politische Wissenschaft</p>
	<p><b>David McLaren</b><br />Volkswirtschaftslehre</p>
	<p><b>Gabriel Noll</b><br />Rechtswissenschaften</p>
</div>
<div style="width: 50%; float: left">
	<h3>Beirat</h3>
	<p><b>Sophie von Holleben</b><br />Rechtswissenschaften</p>
	<p><b>Aenne Thormaelen</b><br />Medizin</p>
</div>
