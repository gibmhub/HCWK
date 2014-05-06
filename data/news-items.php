<?php

    require_once(__DIR__.'/../VIWebFramework/VINewsManager.php');
    require_once(__DIR__.'/referenten.php');
    require_once(__DIR__.'/vortraege.php');
	
	$item = VINewsManager::addItem('07-05-2014', 'Das Zelt steht');
	$item->content ='
		<p>Nach <em>grenzenloser</em> Aufbauarbeit steht endlich das Zelt am Uniplatz und einem gelungenen Symposium damit nichts mehr im Wege.</p>
		<p>Das Preopening, das dieses Jahr zum ersten Mal die Veranstaltung einläutet, wird bereits am Mittwoch, den 07.05 stattfinden: Im Hörsaal 13 in der Neuen Universität wird ab 20.00 Uhr (Einlass ab 19.30 Uhr) der Film <a href="https://www.youtube.com/watch?v=uc_oaYgdl_k">"Die Wand"</a> gezeigt. Die Vorstellung kann sowohl von Symposiums Besuchern, als auch von Interessierten ohne Karte kostenfrei besucht werden und bietet damit auch die letzte Gelegenheit sich eine Karte im Vorverkauf zu sichern.</p>
		<p>Die <a href="/tickets">Online Registrierung</a> ist noch bis Mittwoch 07.05 um 24.00 Uhr möglich, danach erfolgt die Anmeldung direkt am Counter und ist eventuell mit längeren Wartezeiten verbunden</p>
		<p>Wir danken euch für eure Unterstützung und freuen uns auf ein <em>grenzenlos</em> mitreißendes Heidelberger Symposium 2014!<br />
		<p>Euer Organisationsteam</p>
		';
		

	$item = VINewsManager::addItem('05-05-2014', 'Der Countdown läuft');
	$item->content ='<p>Die Symposiumswoche ist angebrochen!<br />
	Voller Vorfreude möchten wir daher auf eine ganz besondere Veranstaltung hinweisen: Am Freitag, den 9.5., bekommen 120 Teilnehmer die einmalige Chance, das Musical "The Black Rider" ab 19 Uhr 30 im Alten Saal des Theaters Heidelberg zu einem sehr günstigen Preis von 7,50€ zu erleben. In einer anschließenden exklusiven Diskussionsrunde stellen sich die Dramaturgin Sonja Winkel und mehrere am Stück beteiligte SchauspielerInnen Ihren Fragen. Lassen Sie sich dieses Event nicht entgehen! Die Karten sind begrenzt! Erhältlich sind sie bei der Abholung Ihrer Teilnehmertasche und Ihres Namensschildes im Festzelt.</p>
	<p>Desweiteren freuen wir uns sehr über die Zusage von Dr. Christopher Daase, seines Zeichens Professor für Internationale Organisationen an der Goethe-Universität Frankfurt, der an der Podiumsdiskussion zum Völkerrecht teilnehmen wird.</p>'.Referent::get('christopherdaase')->getReferentBox().'
	<p>Zudem wird es <a href="/tickets">Tickets</a> zum Vorverkaufspreis nur noch bis Mittwoch geben, es lohnt sich daher schnell zuzuschlagen</p>';

	
	$item = VINewsManager::addItem('16-04-2014', 'Start des Ticketvorverkaufs');
	$item->content ='
	<p>Das Symposium rückt in greifbare Nähe, daher freuen wir uns dass der <a href="/tickets">Online-Ticketverkauf</a> nun zugänglich ist.
	Folgende Ticketkategorien können dabei ausgewählt werden:</p>
	<ul>
		<li><strong>Ermäßigt 15€</strong> <small>für Schüler, Studenten, Auszubildende und Menschen mit Behinderung</small></li>
		<li><strong>Normal 30€</strong></li>
	</ul>
	<p>Zusätzlich wird es dieses Jahr ein Special zum 26. Heidelberger Symposium geben, wobei zwei ermäßigte Tickets zu einem <strong>Sonderpreis von 26€</strong> erworben werden können.</p>
	<p>Die Informationen zu den Vorverkaufsstellen in Heidelberg werden in Kürze bereitgestellt.</p>
	<p>Die Tickets gewähren dabei Zugang zu allen Veranstaltungen des 26. Heidelberger Symposiums sowie zur Verköstigung während den angekündigten Essenszeiten.</p>
	<p>Zudem freuen wir uns sehr, dass Brigardegeneral Dag Baehr, Kommandeur des Kommando Spezialkräfte der deutschen Bundeswehr, am Freitag morgen ein Kolloquium mit dem Titel "Grenzen der physischen und psychischen Belastbarkeit" abhalten wird.</p>'.Referent::get('dagbaehr')->getReferentBox();
	
	$item = VINewsManager::addItem('13-04-2014', 'Ankündigung Bernd Kölmel');
	$item->content ='
<p>Wir freuen uns über die Zusage von Bernd Kölmel, Sprecher des Landesverbandes Baden-Württemberg der Partei Alternative für Deutschland. Er wird an der Diskussion „Europäische Union – Grenzenlose Freiheit?“ teilnehmen und mit einer kritischen Position die Debatte um eine wichtige Perspektive ergänzen.</p>'.Referent::get('berndkoelmel')->getReferentBox();
	
	$item = VINewsManager::addItem('12-04-2014', 'Nur noch ein Monat bis zum Symposium');
	$item->content ='
<p>Wir freuen uns sehr bekannt geben zu dürfen, dass Anke Domscheit-Berg, Landesvorsitzende der Piraten Brandenburg an der Diskussion mit dem Titel "Entgrenzung der Privatsphäre" teilnehmen wird.
</p>'.Referent::get('ankedomscheitberg')->getReferentBox().'
<p> Auch das Abendprogramm nimmt Gestalt an. So wird Kevin Kuhn am Donnerstag Abend aus seinem Roman "Hikikomori" lesen und in Dialog mit den Zuhörern treten.</p>'.Referent::get('kevinkuhn')->getReferentBox().'
<p>Zudem freuen wir uns für den Abschlussvortrag mit Christoph Bangert einen renommierten Kriegsfotographen für das Symposium gewonnn zu haben. Er wird in seinem Vortrag "Kriegsfotografie: Bilder und ihre Grenzen" über seine Arbeit berichten und die damit verbundenen Grenzen und Grenzüberschreitungen näher beleuchten.</p> '.Referent::get('christophbangert')->getReferentBox().'
<p>	Außerdem wurde in den letzten Tagen die Homepage aktualisiert, sodass jetzt Informationen zu den teilnehmenden <a href="/referenten">Referenten</a> sowie ein aktualisiertes <a href="/programm">Programm</a> auf der Homepage zu finden sind. Informationen zum bald beginnenden Ticketverkauf werden in Kürze bekannt gegeben.</p>
		';
	
	$item = VINewsManager::addItem('21-03-2014', 'Die heiße Phase beginnt');
	$item->content ='
<p>Nur noch 47 Tage bis zum Symposium! Da wird es höchste Zeit die nächsten Referenten bekannt zu geben.</p>
<p>Wir freuen uns sehr mit Wolfgang Putz einen der qualifiziertesten deutschen Juristen auf dem Gebiet des Medizinrechts für unsere Diskussionsrunde mit dem Titel "Das Lebensende als Grenzsetzung? Diskussion ethischer Grenzen in der Medizin" gewinnen zu können.</p>'.Referent::get('wolfgangputz')->getReferentBox().'
<p>Auch die Kolloquien nehmen langsam Gestalt an: Vom Heidelberger Asylarbeitskreis wird Dennis Hebbelmann ein Kolloquium zum Thema "Innerdeutsche Grenzen – wie Asylsuchende Fremde bleiben" abhalten und näher die Problematik vieler Flüchtlinge in Deutschland beleuchten</p>'.Referent::get('dennishebbelmann')->getReferentBox();

	$item = VINewsManager::addItem('14-03-2014', 'Ankündigung Dr. Paul Kirchhof');
	$item->content ='
<p>Wir freuen uns über die Zusage von Herrn Prof. Dr. Paul Kirchhof, der die Völkerrechts-Diskussion mit seiner langjährigen wissenschaftlichen Expertise und beruflichen Erfahrung als Richter am Bundesverfassungsgericht bereichern wird. </p>'.Referent::get('paulkirchhof')->getReferentBox().'
		';
		
	$item = VINewsManager::addItem('14-03-2014', 'Ankündigung Ernst Uhrlau');
	$item->content ='
<p>Mit Freude können wir den Redner für unseren Eröffnungsvortrag präsentieren: Herr Ernst Uhrlau, bis 2011 Präsident des Bundesnachrichtendienstes, wird persönliche und berufliche Erfahrungen zum Thema Grenzen vortragen und somit das 26. Heidelberger Symposium eröffnen! </p>'.Referent::get('ernstuhrlau')->getReferentBox().'
		';
	    
	$item = VINewsManager::addItem('03-03-2014', 'Zusage von Alois Serwaty');
	$item->content ='
		<p>In der Kolloquienreihe am Fr, den 09. Mai, von 09:00 bis 11:00 Uhr wird sich 
Herr Alois Serwaty unter dem Titel "Spirituelle Grenzerfahrungen -
Einfallstore des Unendlichen" mit den Erfahrungen eines
Nahtoderlebnisses auseinandersetzen. Er publizierte umfassende Beiträge
und referierte vielfach zu eben jener Thematik. Wir freuen uns, ihn als
Mitbegründer und derzeitigen Vorsitzenden (2004) des Netzwerk
Nahtoderfahrung e.V. begrüßen zu dürfen.</p>'.Referent::get('aloisserwaty')->getReferentBox();
	
	$item = VINewsManager::addItem('28-02-2014', 'Neuigkeiten zum Vortrag "Wirtschaftliche Ordnung - eine willkürliche Grenzziehung?"');
	$item->content ='
		<p>Wir freuen uns auf Frank Augustin, den Chefredakteur des philosophischen Wirtschaftsmagazins agora42 und einen spannenden Vortrag zum Thema "Wirtschaftliche Ordnung - eine willkürliche Grenzziehung?"</p>'.Referent::get('frankaugustin')->getReferentBox();
	
	$item = VINewsManager::addItem('27-02-2014', 'Das Symposium rückt immer näher');
	$item->content ='
	<p>Nur noch 70 Tage bis zum 26. Heidelberger Symposium! Es wird daher höchste Zeit die nächsten Referenten bekannt zu geben.</p>
	<p>Zunächst freuen wir uns sehr Dr. Gerrit Hohendorf, seines Zeichens Wissenschaftlicher Mitarbeiter am Institut für Geschichte und Ethik der Medizin an der TU München, beim Symposium begrüßen zu dürfen. Er wird an der Diskussionsrunde zum Thema Medizinethik mitwirken.</p>'.Referent::get('gerrithohendorf')->getReferentBox().'
	<p>Außerdem freuen wir uns sehr den Jurist Rainer Beckmann bei der Diskussion zur Medizinethik willkommen heißen zu dürfen. Er befasst sich seit vielen Jahren mit Fragen des Lebensschutzes und ist damit prädestiniert für eine interessante Diskussion.</p>'.Referent::get('rainerbeckmann')->getReferentBox().'
	<p>Zudem konnten wir den mehrfach prämierten Schriftsteller Ralf Bönt für die Diskussionsrunde über Feminismus gewinnen.</p>'.Referent::get('ralfboent')->getReferentBox().'
		<p>Ebenfalls wird die Sozialpädagogin Monika Ebeling an der Feminismusdiskussion telnehmen und sicherlich für eine spannende Debatte sorgen.</p>'.Referent::get('monikaebeling')->getReferentBox().'
		<p>Auch ist es uns eine große Ehre die mehrfach ausgezeichnete Politikwissenschaftlerin Prof. Dr. Dr. h. c. Beate Kohler bei unserer Diskussion über die Europäische Union begrüßen zu dürfen</p>'.Referent::get('beatekohler')->getReferentBox().'
		<p>Wir möchten außerdem darauf hinweisen, dass nun eine erste Übersicht über das <a href="/programm">Programm</a> des 26. Heidelberger Symposiums herunter geladen werden kann.</p>
		';
	
	$item = VINewsManager::addItem('08-02-2014', 'Politisches Know-how aus Heidelberg');
	$item->content ='
	<p>Wir freuen uns bekannt zu geben, dass Dr. Wolf J. Schünemann, seit September 2013 Akademischer Mitarbeiter am Institut für Politische Wissenschaft (IPW) in Heidelberg, die Moderation der EU-Diskussion leiten wird. Seine Forschungsschwerpunkte in Bereichen der europäische Integration, vergleichende Diskursanalyse und Netzpolitik prädestinieren ihn für diese Rolle und wir sind gespannt auf eine kontroverse und angeregte Diskussion.</p>'.Referent::get('wolfschuenemann')->getReferentBox();
	
	$item = VINewsManager::addItem('06-02-2014', 'Die nächste Referentenwelle rollt an');
	$item->content ='
		<p>Nur noch 91 Tage bis zum 26. Heidelberger Symposium!<br />
	Aus diesem Grund freuen wir uns ganz besonders die nächsten Referenten für das kommende Symposium bekannt geben zu dürfen.
	So dürfen wir uns zum einen auf einen sehr spannenden Vortrag des mit dem "Goldenen Kompass" prämierten Autors Samuel Koch zum Thema "Körperliche Grenzen" freuen.</p>'.Referent::get('samuelkoch')->getReferentBox().'
	<p>Darüber hinaus freuen wir uns sehr, dass Jörg Armbruster am 26. Symposium teilnehmen wird. Der bekannte Journalist wird sich an der Diskussion zum Thema "Grenzen des Völkerrechts" beteiligen</p>'.Referent::get('joergarmbruster')->getReferentBox().'
	<p>Außerdem möchten wir nochmal darauf hinweisen, dass der Einsendeschluss des Heidelberger Kunst- und Kulturpreises auf den 14.02.2014 verlängert wurde. Also legt euch noch einmal ins Zeug!</p>
	<p>Euer Orga-Team 2014</p>
	';
	
	$item = VINewsManager::addItem('25-01-2014', 'Der HCWK als „Vorläufer der Exzellenzinitiative“!');
		$item->content='
	<p> Am 24.1.14 fand in den altehrwürdigen Räumen der alten Universität die feierliche Übergabe des "<a href="http://foerderer.uni-hd.de/gdf/index.html">Preises der Freunde</a>" statt. Dieser wird seit 1995 alljährlich von der „Gesellschaft der Freunde“ verliehen und würdigt besonders engagierte und kreative studentische Unternehmungen. Dementsprechend geehrt sind die Mitglieder des HCWK, zu den Preisträger des Jahres 2013 gewählt worden zu sein und den Förderungspreis in Höhe von 2500€ in Empfang nehmen zu dürfen. Noch besser wurde der Abend, zu dem  Unterstützer des HCWK und der Gesellschaft der Freunde geladen waren, noch durch manch lobende Worte. So beschrieb der Rektor der Universität Heidelberg, Prof. Dr. Eitel, die Aktivität des HCWK und dessen Anspruch nach Interdisziplinarität als „Vorläufer der Exzellenzinitiative“. Ferner wurde das Heidelberger Symposiums mit einer „intellektuelle Festtafel“ verglichen, an der sich Gleichgesinnte austauschen und bereichern könnten. Geehrt sind wir durch diese Auszeichnungen und entschlossen, das Symposium auch dieses Jahr wieder zu einem vollen Erfolg zu machen. <br />
		Über die langjährige große Unterstützung des HCWK durch die Kuratoren, von denen u.a. Prof. Dr. Dres. h.c. Peter-Christian Müller-Graff,  Prof. Dr. Jürgen Siebke und Peter Rippen an der Preisverleihung teilnahmen, sind wir überaus dankbar! Ebenso freuen wir uns über die zahlreichen Glückwünsche, die uns erreicht haben.</p>
<p>Wir danken allen Sponsoren, Helfern und Besuchern, die uns in diesem Vorhaben unterstützen und das Heidelberger Symposium überhaupt erst möglich machen!</p>
<p>Euer Orga-Team 2014</p>
<img class="img-responsive" src="/img/content/Preisverleihung.jpg">
';
 
	$item = VINewsManager::addItem('09-01-2014', 'Erste Referentenzusagen');
		$item->content='
	<p>Nach langer Vorbereitung freuen wir uns sehr neben unserem diesjährigen <a href="/schirmherr">Schirmherren</a> Frank Plasberg weitere Referenten für das 26. Heidelberger Symposium bekannt geben zu dürfen.</p>
	<p style="overflow:hidden">So konnten wir die Sozialwissenschaftlerin und Bundestagsabgeordnete Dr. Franziska Brantner für das Symposium gewinnen, die an einer Diskussion zum Thema "Europäische Union" teilnehmen wird.</p>'.Referent::get('franziskabrantner')->getReferentBox().'
	<p>Desweiteren freuen wir uns sehr mit Prof. Dr. Dr. Ernst Messerschmid einen der ersten deutschen Astronauten beim Symposium begrüßen zu dürfen. Als einer der führenden Wissenschaftler auf dem Gebiet der Astronautik und ehemaliger Leiter des Europäischen Astronautenzentrums der ESA wird er in seinem Vortrag sowohl von seinen eigenen Erfahrungen im All berichten, als auch Einblicke in aktuelle Forschungsgebiete und die mittel- bzw. langfristigen Ziele der Raumfahrt bieten.</p>'.Referent::get('ernstmesserschmid')->getReferentBox().'
	<p>Weitere Referenten werden in den kommenden Wochen folgen!</p>';
	
	$item = VINewsManager::addItem('02-01-2014', 'Unser guter Vorsatz für das neue Jahr');
	$item->content = '
		<p>Unser guter Vorsatz für das neue Jahr: Das Symposium für Euch zu einem tollen und einzigartigen Erlebnis zu gestalten.  Wie wir das anstellen wollen? Mit Eurer Hilfe natürlich! </p>
		<p>Dazu haben die kreativen Köpfe unter Euch haben noch bis zum 14.02.2014 die Möglichkeit, am Designwettbewerb teilzunehmen. Grenzen(los) ist das Thema und dementsprechend frei seid Ihr in Euren Gestaltungsmöglichkeiten. Entwerft ein Plakat, einen Flyer und ein Logo und vielleicht seid Ihr am Ende die Glücklichen, die den Hauptpreis von 500€ einstreichen können! Genauere Infos findet Ihr auf unserer Homepage.</p>
		<p>Wir freuen uns auf Eure Einsendungen und wünschen Euch eine schöne Woche,<br />
		Euer Orga-Team 2014.</p>
		';
	
	$item = VINewsManager::addItem('24-11-2013', 'Das 26. Heidelberger Symposium nimmt Fahrt auf!');
    $item->content = '
<p>Grenzenlos scheint nicht nur das Thema des diesjährigen Symposiums zu sein, sondern auch die Begeisterung der Organisatoren. Am 23.11.2013 traf sich das Team aus Heidelberger Studenten zum sogenannten Powersamstag und der Name war Programm. Wind und Wetter trotzend, traf sich das Team an der alten Brücke und ließ sich die Laune beim <a href="/team">Fotoshooting</a> trotz Wolken nicht verderben. Zurück in den behaglicheren Clubräumen wurden die Erfolge der Kleingruppen mit den anderen geteilt, wichtige noch anstehende Aufgaben vergeben und kreative Ideen rund ums Symposium gesammelt. Zwischendurch wurde die Moral mit Pizza und Gebäck gestärkt und bot der Truppe so einen entspannten Rahmen für konstruktives Schaffen. Rückblickend also ein erfolgreicher Tag und wichtiger Meilenstein auf dem langen Weg hin zum diesjährigen Symposium. Ein Weg, der mit dieser Gruppe allemal zu schaffen ist!</p>';
    
	$item = VINewsManager::addItem('24-11-2013', 'Grußwort des Vorstands');
    $item->content = '
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