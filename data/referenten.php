<?php

	require_once('data/data_structures.php');
	
	/*
	$referent = Referent::get('__referent_id__');
	$referent->name = '__referent_name__';
	$referent->desc = '__referent_desc__';
	$referent->setVortrag(Vortrag::get('__vortrag_id__'));
	*/
	
	$referent = Referent::get('ernstmesserschmid');
	$referent->name = 'Prof. Dr. Dr. Ernst Messerschmid';
	$referent->desc = 'Professor für Astronautik und Raumstationen, ehem. Astronaut und Leiter des Europäischen Astronautenzentrums der ESA';
	$referent->vita = '<p>Ernst Messerschmid wurde 1945 in Reutlingen geboren. Nach seinem Physikstudium in Tübingen und Bonn und seiner Promotion kam er 1978 zur Deutschen Forschungsanstalt für Luft- und Raumfahrt (DLR) in Oberpfaffenhofen. Ab 1983 war Messerschmid dort Wissenschaftsastronaut und flog 1985 mit dem amerikanischen Space-Shuttle "Challenger" für die D1-Spacelab-Mission eine Woche in den Weltraum. 1986 wurde er zum ordentlichen Professor und Direktor des Instituts für Raumfahrtsysteme der Universität Stuttgart berufen, war von 1990 bis 1992 Dekan der Fakultät Luft- und Raumfahrttechnik und von 1996 bis 1998 Prorektor für Forschung und Technologie. Im Zeitraum 2000 bis 2004 war er von der Universität Stuttgart beurlaubt, um in Köln-Porz die Leitung des Europäischen Astronautenzentrums der ESA wahrzunehmen. Er war dort unter anderem verantwortlich für das Astronautentraining und die Auswahl der europäischen Astronauten für Flüge zur Internationalen Raumstation ISS. Zu den derzeitigen Forschungsschwerpunkten gehören die Entwicklung von zukünftigen Raumstationen, Strategien und Szenarien für Raumflugmissionen zu Mond, erdnahen Asteroiden und Mars. Von 2007 bis 2010 war er  im Vorstand des Innovationsrats Baden-Württemberg.</p>';
	$referent->setVortrag(Vortrag::get('grenzen-des-alls'));
	
	$referent = Referent::get('samuelkoch');
	$referent->name = 'Samuel Koch';
	$referent->desc = 'Buchautor';
	$referent->vita = '<p>Jahrgang 1987, schon früh galt seine Begeisterung dem Sport. Bereits mit 6 Jahren begann er als Kunstturner und turnte 17 Jahre lang bei unzähligen Wettkämpfen in der deutschen (2.) wie französischen Liga. Nach dem Abitur war er im Rahmen seines Wehrdienstes als Vertrauensperson und redaktionell in der Presse- und Öffentlichkeitsarbeit der deutsch-französischen Brigade tätig. Währenddessen leitete er Kinderfreizeiten für das Bundeswehrsozialwerk.<br />
Danach studierte er Schauspiel erst in Hamburg, später an der Hochschule für Musik, Theater und Medien in Hannover. Zwischendurch übernahm er zunächst Kinderbetreuung und militärische Beratung, später Regieassistenz bei namhaften Film- und Fernsehproduktionsfirmen in München, Hamburg und Berlin. Sporadisch jobbte er immer wieder bei Veranstaltungen als Kleinunternehmer und freier Akrobat. Nach seinem Unfall 2010 wurde er im Schweizer Paraplegiker-Zentrum in Nottwil rehabilitiert. Sein Buch “Zwei Leben” avancierte zum Spiegel-Bestseller und erhielt 2012 den Medienpreis „Goldener Kompass“.</p>
';
	$referent->setVortrag(Vortrag::get('koerperliche-grenzen'));
	
	$referent = Referent::get('dennishebbelmann');
	$referent->name = 'Dennis Hebbelmann';
	$referent->desc = 'Sozialpsychologe, Asylarbeitskreis Heidelberg';
	$referent->vita = '<p>Dennis Hebbelmann studierte in Hamburg und New York Psychologie und Philosophie und promoviert derzeit im Arbeitsbereich Sozialpsychologie der Universität Heidelberg. An der Hochschule Fresenius in Hamburg lehrte er Allgemeine Psychologie und psychologische Diagnostik. Er engagiert sich neben seiner Promotion im Asylarbeitskreis Heidelberg, der auch das Kolloquium maßgeblich mitgestalten wird. Seit den Neunzigerjahren setzt sich der Asylarbeitskreis Heidelberg e.V. für Menschen aus aller Welt ein, die in Deutschland Schutz vor Verfolgung suchen. Neben politischer Arbeit für eine menschenwürdige Asylpolitik wird durch Programme wie kostenlose Sprachkurse und Nachhilfeunterricht für Kinder und Jugendliche versucht, Flüchtlingen eine Perspektive in Deutschland zu ermöglichen. Die wichtigste und schwierigste Hürde, die Asylsuchende dabei zu bewältigen haben, ist das Asylverfahren, in dem über die langfristige Aufenthaltsberechtigung bzw. eine Abschiebung entschieden wird. Der Asylarbeitskreis unterstützt Flüchtlinge dabei unter anderem durch eine kostenlose Rechtsberatung und Begleitung bei Behördengängen. Ziel ist es, möglichst vielen Verfolgten in Deutschland ein sicheres und menschenwürdiges Leben zu ermöglichen.</p>
';
	$referent->setVortrag(Vortrag::get('innerdeutsche-grenzen'));
	
	
	$referent = Referent::get('paulkirchhof');
	$referent->name = 'Dr. Paul Kirchhof';
	$referent->desc = 'ehem. Bundesverfassungsrichter, Seniorprofessor distinctus Universität Heidelberg';
	$referent->vita = '<p>Paul Kirchhof studierte Rechtswissenschaften an den Universitäten Freiburg und München. Von 1975 bis 1981 war er ordentlicher Professor für Öffentliches Recht und Direktor des Instituts für Steuerrecht der Universität Münster, dessen Prorektor er zeitweise war. Seit 1981 lehrt er als Ordentlicher Professor für öffentliches Recht an der Universität Heidelberg, war dort bis 2013 der Direktor des Instituts für Finanz- und Steuerrecht und zweitweise der Dekan der Juristischen Fakultät. 1987 erfolgte die Berufung als Bundesverfassungsrichter. Seit 2000 ist er zum ordentlichen Mitglied der Heidelberger Akademie der Wissenschaften gewählt worden und wurde 2013 ihr Präsident. Seit 2013 ist er Seniorprofessor distinctus der Universität Heidelberg.</p>
';
	$referent->setVortrag(Vortrag::get('voelkerrecht'));
	
	
	$referent = Referent::get('birgitkelle');
	$referent->name = 'Birgit Kelle';
	$referent->desc = 'Freie Journalistin und Buchautorin';
	$referent->vita = '<p>Birgit Kelle, geb. 1975 in Siebenbürgen (Rumänien), verheiratet, Mutter von vier Kindern, Freie Journalistin und Buchautorin (Dann mach doch die Bluse zu – Ein Aufschrei gegen den Gleichheitswahn, Adeo Verlag) Kolumnistin bei The European, Focus u.a. Vorsitzende des Vereins Frau 2000plus e.V., Vorstandsmitglied New Women For Europe (NWFE), Brüssel, stellv. Vorsitzende Familienarbeit e.V. Engagiert für einen neuen Feminismus abseits von Gender Mainstreaming und Quotenwahnsinn. 2012 als Sachverständige berufen vor dem Familienausschuss in der Debatte zum Betreuungsgeld.</p>';
	$referent->setVortrag(Vortrag::get('feminismus'));
	
	$referent = Referent::get('monikaebeling');
	$referent->name = 'Monika Ebeling';
	$referent->desc = 'Sozialpädagogin';
	$referent->vita = '<p>Monika Ebeling (Jg. 59) studierte Sozialarbeit/Sozialpädagogik und absolvierte eine Zusatzausbildung zur systemischen Familientherapeutin. In der sozialen Arbeit hat Ebeling stets eine ganzheitliche und systemische Herangehensweise gewählt. Sie war viele Jahre Pflegemutter und lebte zeitweise mit bis zu 9 Kindern unter einem Dach. Sie ist heute in zweiter Ehe verheiratet.<br />
		Ebeling ist mit der Frauenbewegung aufgewachsen und hat sich mit Fragen der Gleichstellung aus der Perspektive von Frauen viele Jahre intensiv auseinander gesetzt. Heute, findet Ebeling, sei es an der Zeit sich mit der Diskriminierung von Männern zu befassen und männliche Gleichstellungsbedürfnisse in die öffentliche Debatte zu bringen.<br />
Sie war in der Zeit von 2008 bis 2011 Gleichstellungsbeauftragte der Stadt Goslar. Weil sie sich auch für Männer einsetzte wurde sie abberufen. Ihre Abberufung als kommunale Gleichstellungsbeauftragte sorgte bundesweit für Aufsehen. Alle großen Leitmedien,  die Frankfurter Allgemeine Rundschau, die Stuttgarter Nachrichten, Die WELT, die Bildzeitung, die ZEIT, der Focus, die Süddeutsche, der Spiegel usw. berichteten über die Vorkommnisse in Goslar.<br />
Ebeling verarbeitete ihre Erfahrungen aus dieser Zeit in dem Buch „Die Gleichberechtigungsfalle“ (Herder Verlag 2012). Seit den Ereignissen in Goslar  tritt Ebeling verstärkt auch öffentlich für die Sache der Männer ein. Sie war in einigen TV Talkrunden z.B. WESTart, Log-in, Anne Will und Fakt ist zu Besuch. Ebeling hält Vorträge auf Einladung von Universitäten, auf Tagungen und vor Fachpublikum. Sie schreibt Artikel in der allgemeinen Presse und in Fachmedien.  Aktuell arbeitet Ebeling an einem zweiten Buchprojekt für das sie noch einen Verlag sucht.</p>';
	$referent->setVortrag(Vortrag::get('feminismus'));
	
$referent = Referent::get('wolfgangputz');
$referent->name = 'Wolfgang Putz';
$referent->desc = 'Jurist, Lehrbeauftragter für Medizinrecht und Medizinethik';
$referent->vita = '<p>Wolfgang Putz studierte Rechte, Politik und Humanmedizin. Als Rechtsanwalt spezialisierte er sich auf das Medizinrecht und befasste sich seit 1985 auf ärztlichen Kongressen, bei Schulungen und Vorträgen mit dem Thema Sterberecht. Seit 1995 übernahm Putz zunehmend Mandate rund um das Sterben von Patienten. Er war Mitbegründer der medizin-rechtlichen Sozietät „Putz und Teipel“ in  Berlin und München, die sich auf Arzthaftungsrecht und Recht am Lebensende spezialisierte. Als Berater des Bayerischen Justizministeriums war er an der Erstellung der Broschüre „Vorsorgen für Alter und Krankheit“ mit Texten zu Patientenverfügungen und Vorsorgevollmachten beteiligt. Putz berät Krankenhäuser und Ärzte im Bereich Medizinethik und Sterberecht. Seit 2003 ist er Lehrbeauftragter für Medizinrecht und Medizinethik an der Ludwig-Maximilians-Universität München. 2004 wurde Putz als Sachverständiger vor der Enquete-Kommission des Deutschen Bundestags und vor dem nationalen Ethikrat angehört.</p>';
$referent->setVortrag(Vortrag::get('medizinethik'));


	$referent = Referent::get('ernstuhrlau');
	$referent->name = 'Ernst Uhrlau';
	$referent->desc = 'ehem. Präsident des Bundesnachrichtendienstes';
	$referent->vita = '<p>Ernst Uhrlau war von 2005 bis Ende 2011 Präsident des Bundesnachrichtendienstes und ist seit 2012 freiberuflich für die Deutsche Bank tätig. Dem Studium der Politikwissenschaft, Soziologie und Volkswirtschaft an der Universität Hamburg folgten Tätigkeiten an Landespolizeihochschule und der Behörde für Inneres in Hamburg. 1966 wurde Ernst Uhrlau zum Hamburger Polizeipräsidenten ernannt. Mit dem Wechsel nach Berlin 1998 begann die Tätigkeit als Ministerialdirektor im Bundeskanzleramt und war dort für die Koordinierung der Nachrichtendienste des Bundes zuständig. Wiederholt setzte sich Ernst Uhrlau als „ehrlicher Makler“ bei Vermittlungen zum Gefangenenaustausch zwischen Israel und Hisbollah und leistete auch bei den Ermittlungen zur Steuerflucht nach Lichtenstein viel positiv wahrgenommene Arbeit.  </p>';
	$referent->setVortrag(Vortrag::get('eroeffnungsvortrag'));
	
	
	$referent = Referent::get('gerrithohendorf');
	$referent->name = 'Dr. Gerrit Hohendorf';
	$referent->desc = 'wissenschaftlicher Mitarbeiter am Institut für Geschichte und Ethik der Medizin an der Technischen Universität München';
	$referent->vita = 'PD Dr. med. Gerrit Hohendorf, geb. 1963, studierte Medizin und evangelische Theologie in Bonn und Heidelberg und ließ sich in Heidelberg zum Facharzt für Psychiatrie und Psychotherapie ausbilden. Seit 2006 ist er wissenschaftlicher Mitarbeiter am Institut für Geschichte und Ethik der Medizin an der Technischen Universität München. Seit 2010 leitet er ein Motivationsprogramm für Menschen mit Abhängigkeitserkrankungen im Klinikum rechts der Isar in München.
Forschungsschwerpunkte: Geschichte der Psychiatrie und Psychoanalyse und Geschichte der Euthanasie und der Eugenik im 19. und 20. Jahrhundert, Medizin im Nationalsozialismus, Nationalsozialismus und Erinnerungskulturen in Europa;
Ethik der Sterbehilfe, der Psychiatrie und der Reproduktionsmedizin.
Aktuelle Forschungsprojekte: Gedenkbuch für die Münchner Euthanasie-Opfer;
Die verfasste Bayerische Ärzteschaft und die Praxis der Medizin im Nationalsozialismus; Die nationalsozialistische ‚Euthanasie‘ und der historische Ort Berliner Tiergartenstraße 4 (Erarbeitung der Inhalte für den Gedenk- und Informationsort).';
	$referent->setVortrag(Vortrag::get('medizinethik'));
	
	$referent = Referent::get('joergarmbruster');
	$referent->name = 'Jörg Armbruster';
	$referent->desc = 'Journalist';
	$referent->vita = '<p>Hans Jörg Armbruster wurde 1947 in Tübingen geboren. Nach dem Abitur studierte er Sozialwissenschaften, Politikwissenschaften, Volkswirtschaft, Theaterwissenschaft und Sprachwissenschaft. Im Anschluss war er von 1973 bis 1978 freier Mitarbeiter im Hörfunk des WDR, ab 1979 im Süddeutschen Rundfunk Heidelberg. 1982 wechselte er zum Fernsehen. Bis 1986 war er Fernsehreporter und -moderator im SDR-Studio Mannheim, von 1986 bis 1988 war er Redakteur in der Redaktion „Innenpolitik“ in der Chefredaktion des SDR-Fernsehens. Von 1989 bis 1994 war Armbruster Redakteur und Reisekorrespondent in der Auslandsredaktion des SDR und von 1995 bis 1998 Leiter der Abteilung "Ausland" des SDR-Fernsehens.<br />
Für die ARD war er von 1999 bis 2005 Auslandskorrespondent und Studioleiter des ARD-Büros in Kairo für die arabische Welt. Seit Beginn des Irakkrieges befand er sich jedoch meist in Bagdad. 2005 kehrte er nach Deutschland zurück. Hier wurde er Leiter der Abteilung Ausland/Europa des SWR Fernsehens und Moderator des „Weltspiegel“. Von 2010 bis 2012 war er erneut ARD-Fernsehkorrespondent für die Arabische Welt. Bei der Revolution in Revolution in Ägypten 2011 war Armbruster Berichterstatter vor Ort. Armbruster berichtete zudem aus Damaskus über den Syrien-Konflikt, wobei die Berichterstattung durch die Aufsicht des Regimes erschwert wurde. Nach dem Ende seiner Arbeit als Reporter für das ARD schreibt Armbruster weiterhin politische Analysen über die Situation in der Arabischen Welt, unter anderem für vorwaerts.de</p>
';
	$referent->setVortrag(Vortrag::get('voelkerrecht'));
	
	$referent = Referent::get('beatekohler');
	$referent->name = 'Prof. Dr. Dr. h. c. Beate Kohler';
	$referent->desc = 'Politikwissenschaftlerin';
	$referent->vita = '<p>Prof. Dr. Dr. h. c.. Beate Kohler (Autorennamen Kohler-Koch) hat an den Universitäten Darmstadt, Mannheim und Bremen gelehrt und ist auch im Ruhestand noch in der Forschung am Mannheimer Zentrum für Europäische Sozialforschung aktiv. Sie war Gastprofessorin an verschiedenen in- und ausländischen Universitäten und erhielt den Ehrendoktor der Universitäten Maastricht und Oslo. Ihr Forschungsschwerpunkt ist die EU; für ihren Beitrag zur Europaforschung hat sie mehrere Auszeichnungen erhalten. In letzten Jahren hat sie sich mit dem möglichen Beitrag der Zivilgesellschaft zur Demokratisierung der EU und mit dem EU Lobbying von Wirtschaftsverbänden befasst. Sie ist Mitglied der Berlin-Brandenburg Akademie der Wissenschaften und Ehrenprofessorin der Nankai Universität, China.</p>';
	$referent->setVortrag(Vortrag::get('europaeische-union'));
	
	$referent = Referent::get('franziskabrantner');
	$referent->name = 'Dr. Franziska Brantner';
	$referent->desc = 'Politikwissenschaftlerin und Bundestagsabgeordnete';
	$referent->vita = '<p>Geboren am 24. August 1979 in Lörrach, ein Kind.
Abitur am Deutsch-Französischen Gymnasium im Freiburg, Studium der Politikwissenschaften und Volkswirtschaft, Master- und Diplomabschluss an der Sciences Po in Paris und der School of Public International Affairs an der Columbia Universität in New York, Master of International Affairs. 2010 Promotion an der Universität Mannheim zur Reformfähigkeit der Vereinten Nationen.
2006 bis 2007 wissenschaftliche Mitarbeiterin am European Studies Centre St Antony’s College in Oxford, mehrere Jahre Tätigkeit als Beraterin für die UN-Frauenrechtsorganisation (UNIFEM), 2008 in Brüssel Mitarbeit an einem Projekt der französischen Ratspräsidentschaft zu UN-Resolution 1325, Mitautorin einer Studie zur EU-Menschenrechtspolitik in der UN für den European Council on Foreign Relations, Arbeit für die Bertelsmann-Stiftung in Brüssel zur europäischen Außen- und Sicherheitspolitik.
1996 bis 1997 Mitglied im Landesvorstand der Grünen Jugend Baden-Württemberg, 1997 bis 1999 Mitglied im Bundesvorstand der Grünen Jugend. Von 2009 bis 2013 Mitglied des Euorpäischen Parlaments für die Fraktion Grüne/EFA, außenpolitische Sprecherin und Berichterstatterin für das EU-Stabilitätsinstrument für Konfliktlösung und Krisenreaktion.
Mitglied des Deutschen Bundestags seit 2013.</p>
';
	$referent->setVortrag(Vortrag::get('europaeische-union'));
	
	$referent = Referent::get('petermartin');
	$referent->name = 'Peter Martin';
	$referent->desc = 'Politikwissenschaftler';
	$referent->vita = '<p>Geboren am 3. Oktober 1967 in Bad Homburg v.d. Höhe.
Peter Martin begann seine Karriere bei der Europäischen Kommission 1999 und arbeitete zunächst als Projektmanager in der Generaldirektion Informationsgesellschaft mit dem Schwerpunkt elektronischer Handel. Danach wurde er abgeordnet zur Generaldirektion Forschung, wo er als Projektleiter für die effizientere Implementierung von EU-Forschungsprogrammen verantwortlich war. Im Anschluss daran arbeitete er als Referent für internationale Forschungszusammenarbeit zwischen der EU und Drittstaaten.
Peter Martin hat Politikwissenschaft, Europa- und Völkerrecht, neuere Geschichte und Kommunikation an der Johannes Gutenberg-Universität in Mainz und an der Johann Wolfgang Goethe-Universität in Frankfurt am Main studiert. An der London School of Economics and Political Science (LSE) erwarb er einen Mastertitel. Er war außerdem Forschungsreferent am "European Institute" der LSE und widmete sich dort u.a. internationalen Regulierungsfragen.
Vor seiner Beschäftigung bei der Kommission war Martin für das Londoner Büro einer Unternehmensberatung im Medienbereich tätig.</p>';
	$referent->setVortrag(Vortrag::get('europaeische-union'));
	
	$referent = Referent::get('rainerbeckmann');
	$referent->name = 'Rainer Beckmann';
	$referent->desc = 'Jurist';
	$referent->vita = '<p>Rainer Beckmann ist verheiratet und hat vier Kinder. Als Jurist befasst er sich seit vielen Jahren mit Fragen des Lebensschutzes. Er war in verschiedenen Lebensrechtsorganisationen aktiv und ist gegenwärtig stellvertretender Vorsitzender der Juristen-Vereinigung Lebensrecht e. V. (Köln). Seit April 2001 ist er Schriftleiter der Zeitschrift für Lebensrecht. In der 14. Wahlperiode des Deutschen Bundestages gehörte er als sachverständiges Mitglied der Enquete-Kommission „Recht und Ethik der modernen Medizin“ an (2000 bis 2003). Auch in die neue Enquete-Kommission „Ethik und Recht der modernen Medizin“ wurde er als Sachverständiger berufen. Er hat zahlreiche Publikationen zu medizinisch-rechtlichen Fragen veröffentlicht.</p>';
	$referent->setVortrag(Vortrag::get('medizinethik'));
	
	$referent = Referent::get('ingorollwagen');
	$referent->name = 'Dr. Ingo Rollwagen';
	$referent->desc = 'Senior Analyst bei der Deutschen Bank';
	$referent->vita = '<p>Dr. Ingo Rollwagen, Senior Analyst bei der Deutschen Bank, arbeitet seit 2004 als Experte für Zukunftsfragen, Technologien und Bildung beim bankinternen think-tank DB Research. Dem voraus ging eine mehrjährige Tätigkeit in der Society and Technology Research Group der DaimlerChrysler in dessen Rahmen Zukunfts- und Innovationsforschung betrieben wird.
Der Schwerpunkt der Arbeit bei der Deutschen Bank Research liegt auf der Analyse der Wissenswirtschaft. Ferner ist Herr Rollwagen als Experte im Bereich Bildung, Wissenschaft und Forschung, Zukunftsforschung und Wissens- und Technologietransfer für Industrieverbände, außeruniversitäre Forschungsorganisationen, die deutsche und verschiedene ausländische Regierungen, die OECD und die Europäische Kommission tätig. Er war u.a. Mitglied der High Level Expert Group ‚Europe 2050’. </p>';
	$referent->setVortrag(Vortrag::get('europaeische-union'));

	$referent = Referent::get('aloisserwaty');
	$referent->name = 'Alois Serwaty';
	$referent->desc = '';
	$referent->vita = '';
	$referent->setVortrag(Vortrag::get('spirituelle-grenzen'));

	$referent = Referent::get('frankaugustin');
	$referent->name = 'Frank Augustin';
	$referent->desc = '';
	$referent->vita = '';
	$referent->setVortrag(Vortrag::get('wirtschaftliche-grenzen'));
		
	$referent = Referent::get('ralfboent');
	$referent->name = 'Ralf Bönt';
	$referent->desc = '';
	$referent->vita = '';
	$referent->setVortrag(Vortrag::get('feminismus'));

	$referent = Referent::get('wolfschuenemann');
	$referent->name = 'Dr. Wolf J. Schünemann';
	$referent->desc = '';
	$referent->vita = '';
	$referent->setVortrag(Vortrag::get('europaeische-union'));
		
?>