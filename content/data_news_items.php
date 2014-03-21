<?php

    include_once('VIWebFramework/VINewsManager/VINewsManager.php');
    
    $news_manager = new VINewsManager();


	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('14-03-2014');
	$current_item->title = 'Ankündigung Dr. Paul Kirchhof';
	$current_item->content ='
<p>Wir freuen uns über die Zusage von Herrn Prof. Dr. Paul Kirchhof, der die Völkerrechts-Diskussion mit seiner langjährigen wissenschaftlichen Expertise und beruflichen Erfahrung als Richter am Bundesverfassungsgericht bereichern wird. </p>
	<div class="content-center"><img src="img/referenten/paulkirchhof.jpg" class="portrait_thumb"></div>
		';
		
		
	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('14-03-2014');
	$current_item->title = 'Ankündigung Ernst Uhrlau';
	$current_item->content ='
<p>Mit Freude können wir den Redner für unseren Eröffnungsvortrag präsentieren: Herr Ernst Uhrlau, bis 2011 Präsident des Bundesnachrichtendienstes, wird persönliche und berufliche Erfahrungen zum Thema Grenzen vortragen und somit das 26. Heidelberger Symposium eröffnen! </p>
	<div class="content-center"><img src="img/referenten/ernstuhrlau.jpg" class="portrait_thumb"></div>
		';
	
	    
	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('03-03-2014');
	$current_item->title = 'Zusage von Alois Serwaty';
	$current_item->content ='
		<p>In der Kolloquienreihe am Fr, den 09. Mai, von 09:00 bis 11:00 Uhr wird sich 
Herr Alois Serwaty unter dem Titel "Spirituelle Grenzerfahrungen -
Einfallstore des Unendlichen" mit den Erfahrungen eines
Nahtoderlebnisses auseinandersetzen. Er publizierte umfassende Beiträge
und referierte vielfach zu eben jener Thematik. Wir freuen uns, ihn als
Mitbegründer und derzeitigen Vorsitzenden (2004) des Netzwerk
Nahtoderfahrung e.V. begrüßen zu dürfen.</p>
<div class="content-center"><img src="img/referenten/aloisserwaty.jpg" class="portrait_thumb"></div>
		';
	
	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('28-02-2014');
	$current_item->title = 'Neuigkeiten zum Vortrag "Wirtschaftliche Ordnung - eine willkürliche Grenzziehung?"';
	$current_item->content ='
		<p>Wir freuen uns auf Frank Augustin, den Chefredakteur des philosophischen Wirtschaftsmagazins agora42 und einen spannenden Vortrag zum Thema "Wirtschaftliche Ordnung - eine willkürliche Grenzziehung?"</p>
	<div class="content-center"><img src="img/referenten/frankaugustin.jpg" class="portrait_thumb"></div>
		';
	
	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('27-02-2014');
	$current_item->title = 'Das Symposium rückt immer näher';
	$current_item->content ='
	<p>Nur noch 70 Tage bis zum 26. Heidelberger Symposium! Es wird daher höchste Zeit die nächsten Referenten bekannt zu geben.</p>
	<p>Zunächst freuen wir uns sehr Dr. Gerrit Hohendorf, seines Zeichens Wissenschaftlicher Mitarbeiter am Institut für Geschichte und Ethik der Medizin an der TU München, beim Symposium begrüßen zu dürfen. Er wird an der Diskussionsrunde zum Thema Medizinethik mitwirken.</p>
		<div class="content-center"><img src="img/referenten/gerrithohendorf.jpg" class="portrait_thumb"></div>
	<p>Außerdem freuen wir uns sehr den Jurist Rainer Beckmann bei der Diskussion zur Medizinethik willkommen heißen zu dürfen. Er befasst sich seit vielen Jahren mit Fragen des Lebensschutzes und ist damit prädestiniert für eine interessante Diskussion.</p>
	<div class="content-center"><img src="img/referenten/rainerbeckmann.jpg" class="portrait_thumb"></div>
	<p>Zudem konnten wir den mehrfach prämierten Schriftsteller Ralf Bönt für die Diskussionsrunde über Feminismus gewinnen.</p>
		<div class="content-center"><img src="img/referenten/ralfboent.jpg" class="portrait_thumb"></div>
		<p>Ebenfalls wird die Sozialpädagogin Monika Ebeling an der Feminismusdiskussion telnehmen und sicherlich für eine spannende Debatte sorgen.</p>
		<div class="content-center"><img src="img/referenten/monikaebeling.jpg" class="portrait_thumb"></div>
		<p>Auch ist es uns eine große Ehre die mehrfach ausgezeichnete Politikwissenschaftlerin Prof. Dr. Dr. h. c. Beate Kohler bei unserer Diskussion über die Europäische Union begrüßen zu dürfen</p>
		<div class="content-center"><img src="img/referenten/beatekohler.jpg" class="portrait_thumb"></div>
		<p>Wir möchten außerdem darauf hinweisen, dass nun eine erste Übersicht über das <a href="'.$pagemap->getUrlForPage($pagemap->pageWithID('programm')).'"> Programm</a> des 26. Heidelberger Symposiums in der entsprechenden Rubrik herunter geladen werden kann.</p>

		';
	
	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('08-02-2014');
	$current_item->title = 'Politisches Know-how aus Heidelberg';
	$current_item->content ='
	<p>Wir freuen uns bekannt zu geben, dass Dr. Wolf J. Schünemann, seit September 2013 Akademischer Mitarbeiter am Institut für Politische Wissenschaft (IPW) in Heidelberg, die Moderation der EU-Diskussion leiten wird. Seine Forschungsschwerpunkte in Bereichen der europäische Integration, vergleichende Diskursanalyse und Netzpolitik prädestinieren ihn für diese Rolle und wir sind gespannt auf eine kontroverse und angeregte Diskussion.</p>
	<div class="content-center"><img src="img/news/wolf_schuenemann.jpg" class="portrait_thumb"></div>
		';
	
	
	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('06-02-2014');
	$current_item->title = 'Die nächste Referentenwelle rollt an';
	$current_item->content ='
		<p>Nur noch 91 Tage bis zum 26. Heidelberger Symposium!<br />
	Aus diesem Grund freuen wir uns ganz besonders die nächsten Referenten für das kommende Symposium bekannt geben zu dürfen.
	So dürfen wir uns zum einen auf einen sehr spannenden Vortrag des mit dem "Goldenen Kompass" prämierten Autors Samuel Koch zum Thema "Körperliche Grenzen" freuen.</p>
	<div class="content-center"><img src="img/news/samuel_koch.jpg" class="portrait_thumb"></div>
	<p>Darüber hinaus freuen wir uns sehr, dass Jörg Armbruster am 26. Symposium teilnehmen wird. Der bekannte Journalist wird sich an der Diskussion zum Thema "Grenzen des Völkerrechts" beteiligen</p>
	<div class="content-center"><img src="img/news/joerg_armbruster.jpg" class="portrait_thumb"></div>
	<p>Außerdem möchten wir nochmal darauf hinweisen, dass der Einsendeschluss des <a href="'.$pagemap->getUrlForPage($pagemap->pageWithID('designwettbewerb')).'">Heidelberger Kunst- und Kulturpreises</a> auf den 14.02.2014 verlängert wurde. Also legt euch noch einmal ins Zeug!</p>
	<p>Euer Orga-Team 2014</p>
	';
	
	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('25-01-2014');
	$current_item->title = 'Der HCWK als „Vorläufer der Exzellenzinitiative“!';
		$current_item->content='
	<p> Am 24.1.14 fand in den altehrwürdigen Räumen der alten Universität die feierliche Übergabe des "<a href="http://foerderer.uni-hd.de/gdf/index.html">Preises der Freunde</a>" statt. Dieser wird seit 1995 alljährlich von der „Gesellschaft der Freunde“ verliehen und würdigt besonders engagierte und kreative studentische Unternehmungen. Dementsprechend geehrt sind die Mitglieder des HCWK, zu den Preisträger des Jahres 2013 gewählt worden zu sein und den Förderungspreis in Höhe von 2500€ in Empfang nehmen zu dürfen. Noch besser wurde der Abend, zu dem  Unterstützer des HCWK und der Gesellschaft der Freunde geladen waren, noch durch manch lobende Worte. So beschrieb der Rektor der Universität Heidelberg, Prof. Dr. Eitel, die Aktivität des HCWK und dessen Anspruch nach Interdisziplinarität als „Vorläufer der Exzellenzinitiative“. Ferner wurde das Heidelberger Symposiums mit einer „intellektuelle Festtafel“ verglichen, an der sich Gleichgesinnte austauschen und bereichern könnten. Geehrt sind wir durch diese Auszeichnungen und entschlossen, das Symposium auch dieses Jahr wieder zu einem vollen Erfolg zu machen. <br />
		Über die langjährige große Unterstützung des HCWK durch die Kuratoren, von denen u.a. Prof. Dr. Dres. h.c. Peter-Christian Müller-Graff,  Prof. Dr. Jürgen Siebke und Peter Rippen an der Preisverleihung teilnahmen, sind wir überaus dankbar! Ebenso freuen wir uns über die zahlreichen Glückwünsche, die uns erreicht haben.</p>

<p>Wir danken allen Sponsoren, Helfern und Besuchern, die uns in diesem Vorhaben unterstützen und das Heidelberger Symposium überhaupt erst möglich machen!</p>

<p>Euer Orga-Team 2014</p>

<img src="img/content/Preisverleihung.jpg">

';
 
	$current_item = $news_manager->addNewItem();
	$current_item->setDateFromString('09-01-2014');
	$current_item->title = 'Erste Referentenzusagen';
		$current_item->content='
	<p>Nach langer Vorbereitung freuen wir uns sehr neben unserem diesjährigen <a href="'.$pagemap->getUrlForPage($pagemap->pageWithID('schirmherr')).'"> Schirmherren</a> Frank Plasberg weitere Referenten für das 26. Heidelberger Symposium bekannt geben zu dürfen.</p>
	<p style="overflow:hidden">So konnten wir die Sozialwissenschaftlerin und Bundestagsabgeordnete Dr. Franziska Brantner für das Symposium gewinnen, die an einer Diskussion zum Thema "Europäische Union" teilnehmen wird.</p>
	<div class="content-center"><img src="img/news/Franziska_Brantner.png" class="portrait_thumb"></div>
	<p>Desweiteren freuen wir uns sehr mit Prof. Dr. Dr. Ernst Messerschmid einen der ersten deutschen Astronauten beim Symposium begrüßen zu dürfen. Als einer der führenden Wissenschaftler auf dem Gebiet der Astronautik und ehemaliger Leiter des Europäischen Astronautenzentrums der ESA wird er in seinem Vortrag sowohl von seinen eigenen Erfahrungen im All berichten, als auch Einblicke in aktuelle Forschungsgebiete und die mittel- bzw. langfristigen Ziele der Raumfahrt bieten.</p>
	<div class="content-center"><img src="img/news/Ernst_Messerschmid.png" class="portrait_thumb"></div>
	<p>Weitere Referenten werden in den kommenden Wochen folgen!</p>';
	
    $current_item = $news_manager->addNewItem();
    $current_item->setDateFromString('02-01-2014');
    $current_item->title = 'Unser guter Vorsatz für das neue Jahr';
	$current_item->content = '
		<p>Unser guter Vorsatz für das neue Jahr: Das Symposium für Euch zu einem tollen und einzigartigen Erlebnis zu gestalten.  Wie wir das anstellen wollen? Mit Eurer Hilfe natürlich! </p>
		<p>Dazu haben die kreativen Köpfe unter Euch haben noch bis zum 14.02.2014 die Möglichkeit, am <a href=" '.$pagemap->getUrlForPage($pagemap->pageWithID('designwettbewerb')).'">Designwettbewerb</a> teil zu nehmen. Grenzen(los) ist das Thema und dementsprechend frei seid Ihr in Euren Gestaltungsmöglichkeiten. Entwerft ein Plakat, einen Flyer und ein Logo und vielleicht seid Ihr am Ende die Glücklichen, die den Hauptpreis von 500€ einstreichen können! Genauere Infos findet Ihr auf unserer Homepage.</p>
		<p>Wir freuen uns auf Eure Einsendungen und wünschen Euch eine schöne Woche,<br />
		Euer Orga-Team 2014.</p>
		';
	
	
    $current_item = $news_manager->addNewItem();
    $current_item->setDateFromString('24-11-2013');
    $current_item->title = 'Das 26. Heidelberger Symposium nimmt Fahrt auf!';
    $current_item->content = '
<p>Grenzenlos scheint nicht nur das Thema des diesjährigen Symposiums zu sein, sondern auch die Begeisterung der Organisatoren. Am 23.11.2013 traf sich das Team aus Heidelberger Studenten zum sogenannten Powersamstag und der Name war Programm. Wind und Wetter trotzend, traf sich das Team an der alten Brücke und ließ sich die Laune beim <a href="'.$pagemap->getUrlForPage($pagemap->pageWithID('team')).'">Fotoshooting</a> trotz Wolken nicht verderben. Zurück in den behaglicheren Clubräumen wurden die Erfolge der Kleingruppen mit den anderen geteilt, wichtige noch anstehende Aufgaben vergeben und kreative Ideen rund ums Symposium gesammelt. Zwischendurch wurde die Moral mit Pizza und Gebäck gestärkt und bot der Truppe so einen entspannten Rahmen für konstruktives Schaffen. Rückblickend also ein erfolgreicher Tag und wichtiger Meilenstein auf dem langen Weg hin zum diesjährigen Symposium. Ein Weg, der mit dieser Gruppe allemal zu schaffen ist!</p>';
    
    $current_item = $news_manager->addNewItem();
    $current_item->setDateFromString('24-11-2013');
    $current_item->title = 'Grußwort des Vorstands';
    $current_item->content = '
<p>Wir freuen uns sehr, dass sich auch in diesem Jahr ein hochengagiertes Team aus Studierenden verschiedener Fachgruppen zusammengefunden hat und so ein breites Spektrum an Ideen, Impulsen und Initiativen in die Vorbereitung des 26. Heidelberger Symposiums einfließt. Es ist beeindruckend, wie viel Arbeit und Herzblut in die langfristige Organisation fließen, angefangen von der Themenfindung bis hin zum Spendensammeln, Vermarkten und Zusammenstellen anregender Podien. Das Symposium lebt jedes Jahr aufs Neue von diesem Engagement und der Bereitschaft des Teams, sich Herausforderungen eigenverantwortlich zu stellen!</p>

<p>In Dankbarkeit greifen wir auf die Erfahrungen aus den vergangenen 25 Jahren des Heidelberger Clubs für Wirtschaft und Kultur zurück und ergänzen diese durch einige Neuerungen in diesem Jahr: So hat das Team unter anderem die neue Website mit wöchentlichen Updates zusammengestellt.</p>

<p>Als Vorstand und Beirat geben wir die Erkenntnisse aus den vergangenen Jahren an das neue Organisationsteam weiter, koordinieren die Arbeit in wöchentlichen Sitzungen und tragen die Verantwortung für die Gesamtveranstaltung.</p>

<p>Dem Kuratorium gilt unser großer Dank für die langjährige, aktive Unterstützung der Symposien. Mit Rat und Tat ermöglichen sie das Fortbestehen des HCWK und bilden das Fundament für die jährlich stattfindende Großveranstaltung.</p>

<p>Wir sind begeistert über das große Engagement des Organisationsteams!</p>

<p>In großer Vorfreude auf das kommende Heidelberger Symposium 2014,</p>

<p>der Vorstand<br />
Felicitas Eichhorn, Gabriel Noll und David McLaren<br />
und der Beirat<br />
Aenne Thormaelen und Sophie von Holleben</p>
';

?>