<?php
	
	require_once('data/data-structures.php');

	/*
	$vortrag = Vortrag::get('__vortrag_id__');
	$vortrag->title = '__vortrag_title__';
	$vortrag->desc = '__vortrag_desc__';
	*/

	$vortrag = Vortrag::get('grenzen-des-alls');
	$vortrag->title = 'Raumfahrt zu neuen Horizonten';
	$vortrag->desc = '
		<p>Die Raumfahrt zählt zu den letzten Abenteuern der Menschheit. Auch 40 Jahre nach den ersten Apollo-Missionen hat sie nichts von ihrer Faszination verloren. Dennoch fragen kritische Stimmen – vor allem nach tragischen Rückschlägen – nach ihrem Nutzen. Prestige und Anerkennung für technische Höchstleistungen sind untrennbar verbunden mit hohen Kosten, unvorhersehbaren Schwierigkeiten und lebensgefährlichen Risiken. Doch auf der „Ertragsseite“ steht ein immenser Zugewinn an Wissen und schafft eine neue Basis für wirtschaftlichen Erfolg. Der Grundlagenforschung im Weltall verdanken wir wichtige Erkenntnisse – von der Materialforschung bis zur Medizin. <br />
Der erfolgreiche Wissenstransfer vom All in den Alltag hat nicht nur wichtige Voraussetzungen geschaffen für Telekommunikation und Navigation, für die Erd- und Wetterbeobachtung, sondern auch den Blick geschärft auf unseren unsren Heimatplaneten.</p>
<p>Professor Ernst Messerschmid gibt in seinem Vortrag einen Überblick über die bisherige Raumfahrtnutzung und seine eigenen Erfahrungen als Wissenschaftsastronaut an Bord der D1-Spacelab-Mission. Er berichtet über das aktuelle Projekt der Internationalen Raumstation ISS, welche seit 1998 unter Führung der USA und weiteren 25 Staaten, darunter Russland, Japan und Europa aufgebaut wird, mit wichtigen Beiträgen der Europäischen Raumfahrtagentur ESA  (Columbus-Labor, das Autonome Transfer-Vehikel ATV und Nutzung mit eigenen Astronauten). Er geht dabei auch auf die Aufgaben ein, für die er von 2000 bis 2005 verantwortlich war, nämlich Auswahl, Training, Flugeinsatz und medizinische Betreuung der europäischen Astronauten, sowie das Leben und Arbeiten der Astronauten für mehrere Monate in der Raumstation. Des weiteren werden die Ziele und bisher gewonnenen Erkenntnisse wissenschaftlichen Forschens im Weltraum angesprochen, insbesondere die Auswirkung von Strahlung und Schwerelosigkeit auf den menschlichen Körper, wie sie vor allem auch für Langzeitflüge auf der ISS und erst recht für zukünftige Raumflugmissionen zum Mond und weiter zum Mars relevant sind und daher besser verstanden und beherrscht werden müssen. Abschließend werden die mittel- bzw. langfristigen Ziele der Raumfahrt sowie dazu die derzeitigen Überlegungen der ESA und NASA angesprochen.</p>
';
	
	$vortrag = Vortrag::get('koerperliche-grenzen');
	$vortrag->title = 'Körperliche Grenzen';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('spirituelle-grenzen');
	$vortrag->title = 'Spirituelle Grenzerfahrungen - Einfallstore des Unendlichen';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('25-jahre-mauerfall');
	$vortrag->title = '25 Jahre Mauerfall';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('grenzen-der-ressourcen');
	$vortrag->title = 'Grenzen der Ressourcen';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('grenzen-des-konsums');
	$vortrag->title = 'Grenzen des Konsums';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('gespraechsrunde-mit-frank-plasberg');
	$vortrag->title = 'Gesprächsrunde mit Frank Plasberg';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('feminismus');
	$vortrag->title = '<i>Assez!?</i> Chancen und Grenzen des modernen Feminismus';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('medizinethik');
	$vortrag->title = 'Das Lebensende als Grenzsetzung? Diskussion ethischer Grenzen in der Medizin';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('voelkerrecht');
	$vortrag->title = 'Völkerrecht';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('europaeische-union');
	$vortrag->title = 'Europäische Union - Freiheit ohne Grenzen?';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('eroeffnungsvortrag');
	$vortrag->title = 'Eröffnungsvortrag';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('innerdeutsche-grenzen');
	$vortrag->title = 'Innerdeutsche Grenzen – wie Asylsuchende Fremde bleiben';
	$vortrag->desc = 'Haben Asylsuchende es über die deutsche Landesgrenze geschafft, schauen sie oft auf eine beschwerliche, traumatisierende Flucht zurück. Doch den Flüchtlingen stellen sich, einmal angekommen, ganz neue Hürden in den Weg: Die deutsche Gesellschaft hat auch innerhalb des Landes feste Grenzen um sich gezogen. So bleiben Asylsuchende nicht nur in rechtlicher und politischer Hinsicht, sondern meist sogar räumlich vom Rest der Gemeinschaft, in der sie Schutz suchen, ausgeschlossen. Wir wollen verschiedene Formen von Grenzen und Ausgrenzung beleuchten und im besten Falle gemeinsam neue Ideen entwickeln, wie diese überwunden werden können. Dabei sollen auch Flüchtlinge selbst mit ihren Geschichten und Erfahrungen zu Wort kommen. Das Kolloquium soll auch zur Selbstreflexion anregen, welche sozialen und psychologischen Prozesse Ausgrenzung aufrechterhalten und rechtfertigen, also die unsichtbaren, unbewussten Grenzen thematisieren. Denn: „Was sichtbar wird, wenn man sich an den Rand begibt und die Umfangslinie abschreitet, sind nicht sie, sondern wir.“ (Carolin Emcke, Zeit Magazin)';

	$vortrag = Vortrag::get('100-jahre-erster-weltkrieg');
	$vortrag->title = '100 Jahre Erster Weltkrieg';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('privatsphaere');
	$vortrag->title = 'Privatsphäre';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('wirtschaftliche-grenzen');
	$vortrag->title = 'Wirtschaftliche Ordnung - eine willkürliche Grenzziehung?';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('abschlussvortrag');
	$vortrag->title = 'Abschlussvortrag';
	$vortrag->desc = '';
	

?>