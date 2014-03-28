<p><img class="img-responsive" src="/img/content/team.png"></p>
<p>Wir sind ein Team aus engagierten Studierenden verschiedener Fachrichtungen und Fachsemester der Universität Heidelberg. Motiviert  durch ein großes Interesse an aktuellen Themen und allgemeinen Fragen des gesellschaftlichen Lebens sowie Freude am Planen und Organisieren haben wir uns dazu entschieden, aktiv bei der Gestaltung und Durchführung des Heidelberger Symposiums mitzuwirken. Ein Jahr lang befassen wir uns mit den verschiedensten Tätigkeiten von der Spendenakquise bis zum Zeltabbau, um ein interessantes Symposium mit vielen Vertretern aus Politik, Wissenschaft, Wirtschaft und Kultur auf die Beine zu stellen. In den verschiedenen Aufgabenbereichen der Referenten-, Public Relations- oder Spendengruppe kann jeder seine Stärken einbringen.</p>
<p>Unterstützt und beraten werden wir, vor allem in der Anfangszeit, vom Vorstand und Beirat des Clubs, die jedes Jahr aus ehemaligen Organisatoren neu gewählt werden und die uns einerseits mit ihrer Erfahrung zur Seite stehen, uns aber andererseits genug Freiraum für unsere eigenen Ideen und Kreativität lassen. 
Wir freuen uns, dieses Jahr Teil der Tradition des HCWK geworden zu sein und hoffen, mit dem 26. Symposium zum Thema „Grenzen(los)!“ ein weiteres Kapitel zur Erfolgsgeschichte des Heidelberger Symposiums hinzufügen zu können.</p>

<h2>Organisationsteam <small>Sagen Sie jetzt nichts...!</small></h2>

<ul id="teamlist">
<?php

	include_once('data/team.php');
	$i = 0;
	foreach($personen as $person) {
		if ($i%2==0) {
			echo '<div class="row">';
		}
?>
		<li class="teamitem">
			<div class="bild"><img src="/img/team/<?=$person->bild?>"></div>
			<div class="title"><strong><?=$person->name?></strong> <span class="bars-before"><?=$person->fach?></span></div>
			<div class="extra"><i><?=$person->extra?></i></div>
		</li>
<?php
		if ($i%2!=0) {
			echo '</div>';
		}
		$i++;
	}
?>
</ul>

<div class="row">
	<div class="col-sm-6">
		<h3>Vorstand</h3>
		<ul class="list-unstyled">
			<li><strong>Felicitas Eichhorn</strong> <span class="bars-before">Geschichtswissenschaften und Politische Wissenschaft</span></li>
			<li><strong>David McLaren</strong> <span class="bars-before">Volkswirtschaftslehre</span></li>
			<li><strong>Gabriel Noll</strong> <span class="bars-before">Rechtswissenschaften</span></li>
		</ul>
	</div>
	<div class="col-sm-6">
		<h3>Beirat</h3>
		<ul class="list-unstyled">
			<li><strong>Sophie von Holleben</strong> <span class="bars-before">Rechtswissenschaften</span></li>
			<li><strong>Aenne Thormaelen</strong> <span class="bars-before">Medizin</span></li>
		</ul>
	</div>
</div>
