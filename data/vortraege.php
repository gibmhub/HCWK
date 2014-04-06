<?php
	
	require_once('data/data-structures.php');

	/*
	$vortrag = Vortrag::get('__vortrag_id__');
	$vortrag->title = '__vortrag_title__';
	$vortrag->desc = '__vortrag_desc__';
	*/

	$vortrag = Vortrag::get('grenzen-des-alls');
	$vortrag->day = 2;
	$vortrag->slot = 5;
	$vortrag->title = 'Raumfahrt zu neuen Horizonten';
	$vortrag->desc = '
		<p>Es gibt Grenzen, von denen dachte man, dass die Menschheit sie nie überschreiten würde. Ernst Messerschmid überschritt eine dieser Grenzen: Er flog 1985 für eine Woche in den Weltraum. In seinem Vortrag wird er von seinen persönlichen Erfahrungen im All berichten und auf die aktuelle Situation der Raumfahrt eingehen. Dabei steht die Internationale Raumstation im Mittelpunkt, die seit 1998 aufgebaut wurde und zur Forschung bis mindestens 2020 verfügbar sein wird. Messerschmid wird auch über die Aufgaben sprechen, für die er bei der European Space Agency (ESA) einige Zeit verantwortlich war: Über Auswahl, Training, Flugeinsatz und medizinische Betreuung von Astronauten, sowie über das Leben und Arbeiten in der Raumstation. Zudem wird er die bisher gewonnenen Erkenntnisse wissenschaftlichen Forschens im Weltraum und die derzeitigen Überlegungen für Raumfahrtmissionen zum Mond und weiter zum Mars ansprechen. Was motiviert die Menschen zu solchen Unternehmungen? Welchen Dienst leistet die Raumfahrt für Wissenschaft, Wirtschaft und Gesellschaft? Freuen wir uns auf eine ganz besondere Grenzüberschreitung.</p>
';
	
	$vortrag = Vortrag::get('koerperliche-grenzen');
	$vortrag->day = 2;
	$vortrag->slot = 2;
	$vortrag->title = 'Körperliche Grenzen';
	$vortrag->desc = '<p>Wer in den letzten Jahren hin und wieder die TV-Show „Wetten, dass..?“ gesehen hat, dem wird die Sendung vom 4. Dezember 2010 in Erinnerung geblieben sein. Die Sendung, die nicht nur den Rücktritt von Thomas Gottschalk mit sich brachte, sondern auch das Leben eines damals 23-jährigen Schauspielstudenten von Grund auf änderte.</ br>
Samuel Koch ist seit seinem schweren Unfall vor laufenden Kameras und über zehn Millionen Fernsehzuschauern vom Hals abwärts gelähmt und auf diese bizarre Weise berühmt geworden. Von einem Tag auf den anderen sah er sich im Alltag mit gänzlich anderen Aufgaben konfrontiert, die für die meisten Menschen nicht das geringste Problem darstellen. Und das, wo doch gerade Bewegung und Sport eine zentrale Rolle in seinem Leben spielten.</ br>
Doch Samuel Koch gibt nicht auf, nutzt seine Bekanntheit, schreibt ein Buch über seine Situation und setzt sich für Menschen mit ähnlichen Schicksalen ein!
</p>
';
	
	$vortrag = Vortrag::get('grenzen-der-moral');
	$vortrag->day = 3;
	$vortrag->slot = 1;
	$vortrag->title = 'Grenzenlos gut? Offene Moralkonzepte in der zeitgenössischen Diskussion um das Verhältnis von Literatur und Ethik';
	$vortrag->desc = '<p>Die feindlichen Verwandten Literatur und Philosophie stehen seit jeher in einem spannungsreichen Verhältnis, innerhalb dessen die Literatur lange Zeit als Medium für die Reflexion, Veranschaulichung und Verbreitung philosophischer und theologischer Gedanken fungierte. Besonders zentral war dabei die Frage nach der gesellschaftlichen und das hieß immer auch moralischen Funktion von Literatur. Die zunehmende Individualisierung, Privatisierung und Autonomisierung traditioneller Werte im Zuge der Moderne hat zur Suspendierung dogmatischer Vorgaben und zur Entwicklung offener Moralkonzepte geführt. Parallel etablierte sich unter den Kunstproduzenten die Forderung nach grenzenloser künstlerischer Freiheit. Anstatt jedoch Ethik und Literatur streng voneinander zu separieren, hat diese Entwicklung dazu geführt, dass ästhetische Moralisten heutzutage auch in den Ambivalenzen und amoralischen Tendenzen von Kunstwerken unser ethisches Selbstverständnis berührt sehen. Anhand ausgewählter Beispiele der Literatur der zweiten Hälfte des 20. und beginnenden 21. Jahrhunderts gilt es daher die Frage zu diskutieren: Ist Literatur in ihrer Wirkung aus ethischer Sicht als <b>grenzenlos gut</b> zu bewerten?</p>';
	
	$vortrag = Vortrag::get('spirituelle-grenzen');
	$vortrag->day = 2;
	$vortrag->slot = 1;
	$vortrag->title = 'Spirituelle Grenzerfahrungen - Einfallstore des Unendlichen';
	$vortrag->desc = '<p>Leo N. Tolstoi ließ einmal einen König kurz vor seinem Ableben niedergeschmettert feststellen, dass er in seinem Leben alles gesehen habe, nur Gott nicht. In dem Text „Der König und der Hirte“ wird jener König angewiesen, in die Sonne zu schauen. Und obgleich sie nur ein Abglanz der Herrlichkeit Gottes ist, vermag er es nicht. Ist es also unmöglich, das Göttliche zu sehen? Für unsere Augen schon sagt der Hirte in Tolstois Geschichte, aber für unsere Herzen nicht.<br />
In diesem Kolloquium steht die Begegnung mit Personen im Vordergrund, deren Leben auf einzigartige Weise mit den Grenzen einer höheren Ordnung in Berührung kamen. Dazu gehören auch jene Menschen, die beispielsweise aufgrund einer Nahtoderfahrungen den schmalen Grat zwischen unserem Alltag und dem Metaphysischen überschritten haben. Es geht um jene Menschen, die Gott in ihrem Alltag noch immer erfahren und sich damit schon von einem Großteil der Gesellschaft abgrenzen. Wir möchten uns anhand eines persönlichen Erfahrungsschatzes der Frage nähern: Was macht Spiritualität heute aus?</p>';
	
	$vortrag = Vortrag::get('25-jahre-mauerfall');
	$vortrag->day = 2;
	$vortrag->slot = 1;
	$vortrag->title = 'Leben mit der Mauer: Innerdeutsche Grenzgeschichten';
	$vortrag->desc = '<p>Eine Grenze, die Deutschland durchschneidet.<br />
Eine Grenze, die aus einem Volk zwei machen will.<br />
Eine Grenze, die Familien trennt, die persönliche Freiheit begrenzt.<br />
Eine Grenze? Mehr noch: eine Mauer, Stacheldraht, Scharfschützen – mitten in Berlin!</p>
<p>Dieses Szenario erscheint uns heute beinahe surreal. Hineingeboren in ein wiedervereintes Deutschland, in ein Europa der offenen Grenzen, kennen wir, die aktuelle Studentengeneration, die Mauer aus Familienerzählungen, Fernsehdokumentationen, dem Geschichtsunterricht.
Hat die innerdeutsche Grenze weiterhin Einfluss auf unsere Wahrnehmung? Fest steht: sie ist von den imaginären Landkarten in unseren Köpfen nicht gänzlich verschwunden. Sie besteht fort, gerade dann, wenn Zeitzeugen sich an das Leben mit und an ihr erinnern. Wo erschien das Leben in der DDR begrenzt, wo grenzenlos? Welche Gefahren drohten bei Widerstand gegen staatliche Grenzsetzungen, bei dem Versuch, die Mauer zu überqueren?<br />
Das 25. Jubiläum des Mauerfalls gibt Anlass zu einem besonderen Kolloqium: Ein Zeitzeuge aus der ehemaligen DDR spricht über persönliche Grenzerfahrungen.</p>
';
	
	$vortrag = Vortrag::get('sportliche-grenzen');
	$vortrag->day = 2;
	$vortrag->slot = 1;
	$vortrag->title = 'Grenzen der physischen und psychischen Belastbarkeit';
	$vortrag->desc = '<p>Es gibt Menschen, die lieber die Treppe nehmen als den Fahrstuhl. Solche, die ab und an einen Spaziergang durch den Park machen oder eine Fahrradtour entlang des Neckars, und deren sportlicher Ehrgeiz damit erschöpft ist.</ br>
Und es gibt Menschen, deren Lebensgeister erst richtig erwachen, wenn sie bei klirrender Kälte am Fuße eines 8000 Meter hohen Berges stehen. Solche, die bei brütender Hitze 200 Kilometer weit durch die Wüste joggen und beim Fahrradfahren ans Mountainbiking in den Alpen denken.</ br>
Solche Menschen bewegen sich am Rande des Machbaren, gehen körperlich, geistig und technisch bis ans Äußerste und zuweilen darüber hinaus. Doch was ist es, das den Menschen in die Extreme treibt, in die Peripherie seiner Möglichkeiten und oft in die abgelegensten und menschenfeindlichsten Winkel der Welt? Wie weit ist dieser Habitus für Dritte zugänglich und wo liegt der Unterschied zwischen dem Normalen und dem Extremen?</p>
';
	
	$vortrag = Vortrag::get('grenzen-der-ressourcen');
	$vortrag->day = 3;
	$vortrag->slot = 1;
	$vortrag->title = 'Grenzen der Ressource Mensch';
	$vortrag->desc = 'In diesem Workshop veranschaulicht der Referent Johannes Rascher von der Grundl Leadership Akademie, wie jeder Mensch persönliche Grenzen anhand der eigenen Führung (Selbstführung) ausdehnen und transformieren kann. Rascher legt dabei an eigenen Beispielen dar, wie er eigene Grenzen entwickelt und transformiert hat. In diesem anwendungsorientierten Workshop steht neben vielen praktischen Übungen der Teilnehmernutzen durch Implementierung der Workshop-Inhalte im Alltag an erster Stelle. Die Themen und Inhalte des Workshops sind in drei Gruppen bzw. Blöcke untergliedert. Zunächst werden die Aspekte Eigenverantwortung und freier Wille behandelt. Es schließt sich eine Einheit zu Motivation, Zielen und Selbstvertrauen an, bevor zuletzt auf die Werte und Stärken(orientierung) eingegangen wird. Rege Beteiligung während der Übungen und der Diskussion der Theorien zum Schluss ist gewünscht.';
	
	$vortrag = Vortrag::get('grenzen-des-konsums');
	$vortrag->day = 3;
	$vortrag->slot = 1;
	$vortrag->title = 'Grenzen des Konsums';
	$vortrag->desc = '';
	
	$vortrag = Vortrag::get('gespraechsrunde-mit-frank-plasberg');
	$vortrag->day = 1;
	$vortrag->slot = 3;
	$vortrag->title = 'Journalismus - grenzenlos? Ein Podiumsgespräch';
	$vortrag->desc = '<p>Frank Plasberg ist nicht nur Schirmherr des 26. Heidelberger Symposiums - er nimmt auch selbst an einer Veranstaltung der besonderen Art teil: An einem Schlagabtausch mit einem Studenten zum Thema "Journalismus - grenzenlos?". Eine Diskussion mit Plasberg  über die mögliche Grenzenlosigkeit und Begrenztheit seines Arbeitsfeldes, in das wir alle als Konsumenten von Nachrichten involviert sind. Welche Argumente werden die Diskutanten vorbringen? Wie sehen Vertreter verschiedener Generationen den Journalismus und seine Grenzen? Welche Grenzen sollten Journalisten nicht überschreiten? Welche Grenzen sind hingegen entbehrlich?</ br>
Während seiner journalistischen Laufbahn führte Plasberg 1988 ein Interview mit den Geiselnehmern von Gladbeck - überschritt er damit eine moralische Grenze? </ br>
Die Setzung von Grenzen für journalistische Arbeit betrifft uns alle, sind wir doch abhängig von Berichterstattungen, prägen sie doch unsere Wahrnehmung der Welt.</ br>
Sind wir also gespannt auf eine lebhafte Diskussion, die es garantiert in sich haben wird!</p>
';
	
	$vortrag = Vortrag::get('feminismus');
	$vortrag->day = 2;
	$vortrag->slot = 3;
	$vortrag->title = '<i>Assez!?</i> Chancen und Grenzen des modernen Feminismus';
	$vortrag->desc = '<p>Der Einfluss, den die feministische Bewegung seit Generationen auf unsere Gesellschaft ausübt, ist heute kaum mehr wegzudenken. Vom Frauenwahlrecht über feministische Sprachkritik bis hin zu sexueller Selbstbestimmung finden sich in vielen Facetten unseres Lebens die breit aufgestellten Themen des Feminismus.<br />
Trotz aller bereits erreichten Gleichberechtigung ist die Bewegung auch heute weiterhin lebendig und vertritt zahlreiche streitbare Anliegen. Themen wie Lohndiskriminierung und Frauenquote werden breit diskutiert und die Frage nach der Legalität von Prostitution bewegt die Gemüter. Im Rahmen des #Aufschrei-Protests (in Frankreich unter dem Hashtag #assez) ist die feministische Bewegung im letzten Jahr verstärkt ins Licht der Öffentlichkeit gerückt.<br />
Inwiefern stößt der Feminismus heute an seine Grenzen? Wo lässt sich die Grenze ziehen zwischen Gleichberechtigung und falscher Protektion, zwischen Sexismus und übertriebener Empfindlichkeit? Hat sich die feministische Bewegung inzwischen selbst überlebt? Diese Fragen möchten wir im Rahmen einer Podiumsdiskussion mit Vertreterinnen und Vertretern eines breiten und kontroversen Meinungsspektrums thematisieren.</p>
';
	
	$vortrag = Vortrag::get('medizinethik');
	$vortrag->day = 3;
	$vortrag->slot = 3;
	$vortrag->title = 'Das Lebensende als Grenzsetzung? Diskussion ethischer Grenzen in der Medizin';
	$vortrag->desc = '<p>Welche Aufgabe haben Humanmediziner? Die Heilung von Patienten – so die idealtypische Antwort. Eine Antwort, die übersieht, das eine vollständige Heilung selten möglich ist. Viel öfter mindern Ärzte Leid, verlängern Leben. </ br>
Dabei sind sie den Wünschen ihrer Patienten verpflichtet. Doch wer entscheidet über die Behandlung unzurechnungsfähiger Menschen? Ärzte können heute auf immer mehr Diagnosemethoden und Therapieformen zurückzugreifen, woraus nicht selten Entscheidungsdilemmata erwachsen. Das Lebensende scheint zeitlich immer weiter nach hinten verschiebbar, erscheint als Konstrukt, als Grenze, die Ärzte auf Grundlage geltenden Rechts setzen können. Der Tod bleibt eine unumgängliche Grenze. Doch wann kann sein Eintreten akzeptiert werden? Durch welche künstlichen Maßnahmen der Lebenserhaltung wird zu sehr in die Natur eingegriffen? Sollte die Aufgabe von Humanmedizinern Erhaltung von Leben um jeden Preis sein? Muss Leben solange verlängert werden, wie aus technischer Sicht möglich? Oder ist die Aufgabe der Medizin nicht vielmehr, ein Leben in Würde zu ermöglichen und somit auch ein Sterben in Würde?</p>';
	
	$vortrag = Vortrag::get('voelkerrecht');
	$vortrag->day = 2;
	$vortrag->slot = 3;
	$vortrag->title = 'Völkerrecht - Grenzen und Verpflichtungen im internationalen System';
	$vortrag->desc = '<p><i>Alle Völker haben das Recht auf Selbstbestimmung. Kraft dieses Rechts entscheiden sie frei über ihren politischen Status und gestalten in Freiheit ihre wirtschaftliche, soziale und kulturelle Entwicklung.</i> Dies legt die UN-Charta zum „Grundsatz der Gleichberechtigung und Selbstbestimmung der Völker“ fest. Doch wie verhält es sich mit dem Selbstbestimmungsrecht in der heutigen Zeit? Wann darf und wann muss von außerhalb eingegriffen werden, wenn Menschenrechte bedroht sind, verletzt zu werden? Welchen Begrenzungen unterliegt diese Einmischung, wieweit sind es Prinzipien, an die sich jeder halten sollte und wieweit implementierbare und sanktionierbare Regeln? Auch der kürzlich aufgeworfene NSA-Daten-Skandal wirft die Frage auf, welche Grenzen dem Völkerrecht bei der Regulierung des Datenschutzes aufgezeigt werden. Wir wollen in dieser Podiumsdiskussion anhand aktueller Beispiele besprechen, wie immanenten Grenzen des Völkerrechts, moralische Pflichten und verfassungsrechtlichen Grenzen ineinandergreifen und inwiefern dies Einfluss auf die Demokratie der betroffenen Länder hat.</p>';
	
	$vortrag = Vortrag::get('europaeische-union');
	$vortrag->day = 3;
	$vortrag->slot = 2;
	$vortrag->title = 'Europäische Union - Freiheit ohne Grenzen?';
	$vortrag->desc = '<p>Der Ausbruch des Ersten Weltkrieges jährt sich 2014 zum hundertsten Mal und ruft der europäischen Bevölkerung ins Gedächtnis, dass Frieden und Stabilität in Europa kein Zufallsprodukt sind, sondern das Ergebnis eines einzigartigen Prozesses von Verständnis, Freundschaft und Kompromiss. Für die meisten von uns europäischen Studenten sind die Worte Krieg in Europa lediglich ein Phänomen aus dem Geschichtsbuch. Doch gerade im Nachspiel der Finanzkrise werden die Rufe nach Austritten lauter und radikale Parteien erhalten immer mehr Zuspruch in der Wählerschaft. Wie finden spanische Jugendliche wieder Arbeit? Wann können alle Kinder in Europa zur Schule gehen? Die Krise zeigt vielen Menschen wie sie unter der EU nicht nur frei sondern auch gebunden sein können.  Wo sollen der EU Grenzen gesetzt werden? Wo erreicht die Haftungspflicht starker Länder für schwache Staaten ihre Grenze? Brauchen wir eine grenzenlose Integration, grenzenloses Abtreten von Souveränität? Es werden Antworten gesucht, denn die Frage „Europa – quo vadis?“ wird größer geschrieben als je zuvor.</p>';
	
	$vortrag = Vortrag::get('eroeffnungsvortrag');
	$vortrag->day = 1;
	$vortrag->slot = 2;
	$vortrag->title = 'Eröffnungsvortrag';
	$vortrag->desc = '<p>Das Merkmal, das jeder Grenze innewohnt ist der Aspekt der Trennung. Doch was trennen wir eigentlich mit Grenzen? Freunde von Feinden, Freiheit von Zwang, das Gute vom Bösen? Grenzen können aber auch geöffnet, gewissermaßen abgeschafft werden und uns auf diese Weise Zugang zu Neuem, Unbekanntem verschaffen.</ br>
Als ehemaliger Präsident des Bundesnachrichtendienstes kann Ernst Uhrlau auf eine erfolgreiche Karriere zurückblicken, die gleichermaßen Augenmaß und Leidenschaft für Grenzen voraussetzte. Nicht immer ist die Trennung zwischen Freiheit und Zwang eindeutig. Und nicht immer lassen sich Freunde von Feinden klar unterscheiden. Herr Uhrlaus erfolgreiche Vermittlungen bei Gefangenenaustauschen zwischen Israel und Hisbollah beispielsweise, zeigen, dass auch scheinbar unverrückbare Grenzen überwunden werden können.</ br>
Ernst Uhrlau wird auch mit seinem Vortrag eine Grenze öffnen und mit uns den ersten Schritt auf  der dreitägigen Reise gehen, die durch die Vielfalt an Themen, Fragen und Inhalten des diesjährigen Symposiums führt. Beginnen wir nun die Suche nach Unbekanntem und nach Antworten und schaffen wir einen Teil unserer Grenzen ab! </p>';
	
	$vortrag = Vortrag::get('innerdeutsche-grenzen');
	$vortrag->day = 3;
	$vortrag->slot = 1;
	$vortrag->title = 'Innerdeutsche Grenzen – wie Asylsuchende Fremde bleiben';
	$vortrag->desc = '<p>Haben Asylsuchende es über die deutsche Landesgrenze geschafft, schauen sie oft auf eine beschwerliche, traumatisierende Flucht zurück. Doch den Flüchtlingen stellen sich, einmal angekommen, ganz neue Hürden in den Weg: Die deutsche Gesellschaft hat auch innerhalb des Landes feste Grenzen um sich gezogen. So bleiben Asylsuchende nicht nur in rechtlicher und politischer Hinsicht, sondern meist sogar räumlich vom Rest der Gemeinschaft, in der sie Schutz suchen, ausgeschlossen. Wir wollen verschiedene Formen von Grenzen und Ausgrenzung beleuchten und im besten Falle gemeinsam neue Ideen entwickeln, wie diese überwunden werden können. Dabei sollen auch Flüchtlinge selbst mit ihren Geschichten und Erfahrungen zu Wort kommen. Das Kolloquium soll auch zur Selbstreflexion anregen, welche sozialen und psychologischen Prozesse Ausgrenzung aufrechterhalten und rechtfertigen, also die unsichtbaren, unbewussten Grenzen thematisieren. Denn: „Was sichtbar wird, wenn man sich an den Rand begibt und die Umfangslinie abschreitet, sind nicht sie, sondern wir.“ (Carolin Emcke, Zeit Magazin)</p>';

	$vortrag = Vortrag::get('100-jahre-erster-weltkrieg');
	$vortrag->day = 1;
	$vortrag->slot = 4;
	$vortrag->title = 'Die Antiquitiertheit territorialer Grenzen (1914)';
	$vortrag->desc = '<p>Im Sommer 2014 jährt sich der Ausbruch des Ersten Weltkrieges, der sogenannten „Urkatastrophe des 20. Jahrhunderts“ nun zum 100. Mal. Dieses, mittlerweile geflügelte Wort des US-amerikani- schen Historikers George F. Kennan versucht die epochale, zeitgeschichtliche Wirkungskraft dieses europäischen, wie globalen Großereignisses zu benennen. Die zentralen Entwicklungen des 20. Jahrhunderts, der Ausbruch des Zweiten Weltkrieges und der Kalte Krieg, seien bereits im Keim im Ersten Weltkrieg angelegt gewesen und die Zivilisationskrise der europäischen Moderne nahm ihren Lauf.<br />
Der Erste Weltkrieg ist ein historisches „Grenzereignis“ in doppelter Hinsicht. So markierte er als geschichtliche Zäsur nicht nur die Epochengrenze des „langen 19. Jahrhunderts“, welches mit dem Beginn des „kurzen 20. Jahrhunderts“, dem „Zeitalter der Extreme“ (Eric Hobsbawm) endete. Dieser erste „totale Krieg“ der Geschichte überschritt in seinem Ausmaß auch territoriale, industrielle, gesellschafts-politische und humanitäre Grenzen der bisher gekannten Kriegsführung.<br />
Dieser Vortrag möchte Einblicke gewähren in die Geschichte des Ersten Weltkrieges, der in jeder Hinsicht eine Geschichte von Grenzüberschreitungen darstellt, wie sie die moderne Welt zuvor, noch nicht kannte.</p>';

	
	$vortrag = Vortrag::get('privatsphaere');
	$vortrag->day = 2;
	$vortrag->slot = 4;
	$vortrag->title = 'Entgrenzung der Privatsphäre';
	$vortrag->desc = '<p>Das Internet – ein grenzenloses Universum voll Informationen und Kommunikationsmöglichkeiten, eine Plattform, die dem Nutzer immer neue Möglichkeiten bietet, neue Grenzüberschreitungen ermöglicht. Als vom Menschen genutztes Medium kann das Internet selbst nur Grenzen technischer Möglichkeiten aufzeigen. Die Definition von rechtlichen Grenzen der Internetnutzung obliegt dem Menschen selbst.<br />
Doch können wir als Nutzer dem Internet überhaupt noch Herr werden? Ob beim Onlineshopping, Emailschreiben oder twittern – zahlreiche Informationen über uns als Privatperson geben wir hierbei preis. Sind wir uns dabei immer der Tatsache bewusst, dass unsere Daten Macht begründen könnten? Wissen wir, was facebook, Amazon oder ebay mit ihnen tun?<br />
Spätestens wenn wir unser eigenes Internetverhalten reflektieren, wird uns meist bewusst, dass Grenzen fehlen, die wir als Einzelpersonen nicht setzen können. Effektive rechtliche Grenzen, die Politiker ausarbeiten müssen, wenn wir nicht zum gläsernen Bürger werden wollen. Grenzen, die unsere Privatsphäre schützen. Doch wie definieren wir heute überhaupt „Privatsphäre“? Können wir auch ohne sie selbstbestimmt und frei leben?</p>';
	
	$vortrag = Vortrag::get('wirtschaftliche-grenzen');
	$vortrag->day = 1;
	$vortrag->slot = 5;
	$vortrag->title = 'Wirtschaftliche Ordnung - eine willkürliche Grenzziehung?';
	$vortrag->desc = '<p>Die Krisen der vergangenen Jahre ziehen weitreichende, dramatische Konsequenzen nach sich. Die europäische Währungsunion droht seit der Euro-Krise 2008 von Rettungsschirm zu Rettungsschirm immer weiter zu zerbrechen, die Antwort der Regierungen besteht aus einer Politik des Aussitzens und des Sparens. Die Schere zwischen Arm und Reich klafft europaweit immer weiter auseinander, das Thema Altersarmut ist einstweilen auch in Deutschlandkangekommen.Diese Entwicklungen stellen unsere Gesellschaft vor die Frage, ob unser wachstumsbasiertes Wirtschaftsmodell wirklich zukunftsfähig ist, ob stetig steigende Wachstumsraten die oberste Prämisse der Politik bleiben müssen und ob grenzenlose wirtschaftliche Progression in einem entwickelten Land überhaupt möglich ist. Gerade Krisen wie die Europäische Wirtschats- und Finanzkrise zwingen uns zur Rückbesinnung auf ethische Werte und fördern die Bereitwilligkeit zu Paradigmenwechseln. Dennoch scheinen diese Reformen eher aus der Not heraus zu entstehen und werden deshalb nur unwillig vorangetrieben. Umso mehr drängt sich die Frage auf: Sind wir erst handlungsfähig wenn es schon zu spät ist? </p>';

	$vortrag = Vortrag::get('poetryslam');
	$vortrag->day = 3;
	$vortrag->slot = 6;
	$vortrag->title = 'Grenzenlose Wortkunst - Poetry Slam';
	$vortrag->desc = '<p>Dichterwettstreite gab es ja schon einige in Heidelberg. Überall geht dieses Gespenst um, das Gespenst namens Poetry Slam. Doch das Publikum schreit „Mehr!“. Auch wir veranstalten zum Abschluss des Symposiums einen Slam, der unter dem Thema „Grenzenlos“ stehen wird. Grenzenlose Beiträge und grenzenlos witzige oder nachdenkliche Anekdoten werden von neun Poeten einem Publikum vorgetragen, worauf dieses mittels Applausstärke entscheiden kann, welche drei Beiträge ins Finale kommen dürfen. Möge der beste Wortathlet gewinnen und einen würdigen Preis abstauben! Mit dabei sein werden unter anderem Mario Henn, Caro Kübler und Dominique Crisand.</p>';
	
	$vortrag = Vortrag::get('theater');
	$vortrag->day = 2;
	$vortrag->slot = 6;
	$vortrag->title = '„The Black Rider" – Musical mit Diskussion im Theater und Orchester Heidelberg';
	$vortrag->desc = '<p></p>';
	
	$vortrag = Vortrag::get('aerzte-ohne-grenzen');
	$vortrag->day = 2;
	$vortrag->slot = 1;
	$vortrag->title = 'Ärzte ohne Grenzen';
	$vortrag->desc = '<p></p>';
	
	$vortrag = Vortrag::get('lesung');
	$vortrag->day = 1;
	$vortrag->slot = 6;
	$vortrag->title = 'Lesung: Kevin Kuhn - Hikikomori';
	$vortrag->desc = '<p>Hikikomori (jap. für „sich einschließen; gesellschaftlicher Rückzug")</p>
<p>Ein Zimmer und ein Entschluss: die Tür schließen, sich endlich ausklinken, nicht für immer, aber für Tage, für Wochen, Monate, Jahre vielleicht.</p>
<p>Till hat alle Freiheiten: er geht auf »die freieste Waldorfschule der Welt«, seine Eltern - ein anthroposophisch motivierter Schönheitschirurg und die Kuratorin eines innovativen SchauRaums - fördern ihn, wo sie nur können. Als er nicht zum Abitur zugelassen wird, ist er plötzlich auf sich selbst zurückgeworfen und beginnt nachzudenken: Was soll aus mir werden, fragt er sich und beschließt so lange in seinem Zimmer auszuharren, bis er darauf eine Antwort weiß. Aus dem Zimmer wird ein Kokon, im Rückzug auf sich selbst glaubt er voranzukommen. Schließlich beginnt Till mit der Kreation einer autarken, nach seinen Regeln funktionierenden Separatwelt: Welt 0 - ein Zufluchtsort für alle, denen die reale Welt zu fordernd oder auch zu eingeschränkt ist. Und Till ist ihr Garant, denn er kämpft nicht nur für sich, sondern für eine ganze Generation, die in ihren Zimmern sitzt.</p>
<p>„Kevin Kuhn ist ein sehr gut komponiertes, scharfsichtiges Buch gelungen. Es ist große Kunst.“- Nils Minkmar, Frankfurter Allgemeine Zeitung</p>';
		
	$vortrag = Vortrag::get('abschlussvortrag');
	$vortrag->day = 3;
	$vortrag->slot = 4;
	$vortrag->title = 'Kriegsfotografie: Bilder und ihre Grenzen';
	$vortrag->desc = '';
	

?>