<?php

	require_once(__DIR__.'/data-structures.php');
	
	/*
	$referent = Referent::get('__referent_id__');
	$referent->name = '__referent_name__';
	$referent->desc = '__referent_desc__';
	$referent->vita = '__referent_vita__';
	$referent->setVortrag(Vortrag::get('__vortrag_id__'));
	*/
	
	$referent = Referent::get('ernstmesserschmid');
	$referent->name = 'Prof. Dr. Dr. Ernst Messerschmid';
	$referent->desc = 'Professor für Astronautik und Raumstationen, ehem. Astronaut und Leiter des Europäischen Astronautenzentrums der ESA';
	$referent->vita = '<p>Nach seinem Physikstudium und seiner Promotion kam Ernst Messerschmid 1978 zur Deutschen Forschungsanstalt für Luft- und Raumfahrt in Oberpfaffenhofen. Ab 1983 war Messerschmid dort Wissenschaftsastronaut und flog 1985 mit dem amerikanischen Space-Shuttle "Challenger" eine Woche in den Weltraum. 1986 wurde er zum ordentlichen Professor und Direktor des Instituts für Raumfahrtsysteme der Universität Stuttgart berufen. Im Zeitraum 2000 bis 2004 übernahm er in Köln-Porz die Leitung des Europäischen Astronautenzentrums der ESA. Er war dort unter anderem verantwortlich für das Astronautentraining und die Auswahl der europäischen Astronauten für Flüge zur Internationalen Raumstation. Zu den derzeitigen Forschungsschwerpunkten gehören die Entwicklung von zukünftigen Raumstationen, Strategien und Szenarien für Raumflugmissionen zu Mond, erdnahen Asteroiden und Mars.</p>';
	$referent->setVortrag(Vortrag::get('grenzen-des-alls'));
	
	$referent = Referent::get('fabiantrau');
	$referent->name = 'Fabian Trau';
	$referent->desc = 'Student';
	$referent->vita = '<p>Fabian Trau studiert seit 2010 an der Ruprecht-Karls-Universität Heidelberg Slavistik und Geschichte. Parallel zum Studium absolvierte er Praktika in verschiedenen Redaktion bei Print, Radio und Fernsehen. Sein Schwerpunkt liegt auf Osteuropa, wo er unter anderem im ARD-Studio Warschau und dem Studio der Deutschen Welle in Moskau hospitierte. Während der Europameisterschaft 2012 in Polen und der Ukraine und den Olympischen Winterspielen 2014 in Sochi war er für den ARD-Hörfunk vor Ort tätig. Seit Herbst 2013 ist er Stipendiat der studienbegleitenden Journalistenausbildung des Instituts zur Förderung des publizistischen Nachwuchses in München.</p>';
	$referent->setVortrag(Vortrag::get('gespraechsrunde-mit-frank-plasberg'));
	
	$referent = Referent::get('berndkoelmel');
	$referent->name = 'Bernd Kölmel';
	$referent->desc = 'Sprecher des Landesverbands Baden-Württemberg der AfD';
	$referent->vita = '<p>Einer Ausbildung und anschließendem sechsjährigen Dienst bei der Polizei folgte ein Studium auf dem Zweiten Bildungsweg als Rechtspfleger. Nach Tätigkeiten beim Amtsgericht Baden-Baden und dem Bundesverfassungsgericht wechselte er 1993 zum Rechnungshof Baden-Württemberg und ist seit dem in verschiedenen Funktionen unter Anderem für die Justiz und Analysen zum Landeshaushalt zuständig.Von 1982 bis 2012 war Kölmel Mitglied bei der CDU, wechselte im März 2013 zu der Alternative für Deutschland und bereitete die Gründung des Landesverbands Baden-Württemberg mit vor. Bei der Gründungsversammlung des Landesverbandes und auch beim Landesparteitag am 24.11.2013 wurde Kölmel als einer der Sprecher gewählt und war auch bei der Bundestagswahl 2013 Spitzenkandidat des Landesverbandes. 
</p>';
	$referent->setVortrag(Vortrag::get('europaeische-union'));
	
	$referent = Referent::get('samuelkoch');
	$referent->name = 'Samuel Koch';
	$referent->desc = 'Buchautor';
	$referent->vita = '<p>Jahrgang 1987, schon früh galt seine Begeisterung dem Sport. Bereits mit 6 Jahren begann er als Kunstturner und turnte 17 Jahre lang bei unzähligen Wettkämpfen in der deutschen (2.) wie französischen Liga. Nach dem Abitur war er im Rahmen seines Wehrdienstes als Vertrauensperson und redaktionell in der Presse- und Öffentlichkeitsarbeit der deutsch-französischen Brigade tätig. Währenddessen leitete er Kinderfreizeiten für das Bundeswehrsozialwerk.<br />
Danach studierte er Schauspiel erst in Hamburg, später an der Hochschule für Musik, Theater und Medien in Hannover. Zwischendurch übernahm er zunächst Kinderbetreuung und militärische Beratung, später Regieassistenz bei namhaften Film- und Fernsehproduktionsfirmen in München, Hamburg und Berlin. Sporadisch jobbte er immer wieder bei Veranstaltungen als Kleinunternehmer und freier Akrobat. Nach seinem Unfall 2010 wurde er im Schweizer Paraplegiker-Zentrum in Nottwil rehabilitiert. Sein Buch “Zwei Leben” avancierte zum Spiegel-Bestseller und erhielt 2012 den Medienpreis „Goldener Kompass“.</p>
';
	$referent->setVortrag(Vortrag::get('koerperliche-grenzen'));
	
	$referent = Referent::get('hansheinrichnolte');
	$referent->name = 'Prof. Dr. Hans-Heinrich Nolte';
	$referent->desc = 'Professor em. für Osteuropäische Geschichte Universität Hannover';
	$referent->vita = '<p>Prof. Dr. Hans-Heinrich Nolte ist Universitätsprofessor für Osteuropäische Geschichte an der Universität Hannover im Ruhestand. Geboren 1938 in Ulm absolvierte er seine Schulzeit an Schulen in Zerbst, Detmold, bei Marburg, Oberhausen und Elmhurst, Illinois, bevor er 1957 sein Abitur erneut in Oberhausen absolvierte. Nach einem Studium der Germanistik und der Geschichte in Marburg, Münster und Göttingen promovierte er 1967 zum Thema „Religiöse Toleranz in Russland 1600 - 1725“. Die Habilitation folgte 1975. Nolte ist Herausgeber der Zeitschrift für Weltgeschichte und Ehrenvorsitzender des Vereins für Geschichte des Weltsystems, sowie Gastprofessor für Weltgeschichte in Wien. Er ist in zweiter Ehe verheiratet und hat fünf Kinder.</p>';
	$referent->setVortrag(Vortrag::get('100-jahre-erster-weltkrieg'));
	
	$referent = Referent::get('monikaebeling');
	$referent->name = 'Monika Ebeling';
	$referent->desc = 'Autorin';
	$referent->vita = '<p>Monika Ebeling (Jg. 59) studierte Sozialarbeit/Sozialpädagogik und absolvierte eine Zusatzausbildung zur systemischen Familientherapeutin. Sie ist mit der Frauenbewegung aufgewachsen und hat sich mit Fragen der Gleichstellung aus der Perspektive von Frauen viele Jahre intensiv auseinander gesetzt. Heute, findet Ebeling, sei es an der Zeit sich mit der Diskriminierung von Männern zu befassen und männliche Gleichstellungsbedürfnisse in die öffentliche Debatte zu bringen.</ br>
Ebeling war in der Zeit von 2008 bis 2011 Gleichstellungsbeauftragte der Stadt Goslar. Weil sie sich auch für Männer einsetzte wurde sie abberufen. Ihre Abberufung als kommunale Gleichstellungsbeauftragte sorgte bundesweit für Aufsehen. Ebeling verarbeitete ihre Erfahrungen aus dieser Zeit in dem Buch „Die Gleichberechtigungsfalle“ (Herder Verlag 2012).</p>';
	$referent->setVortrag(Vortrag::get('feminismus'));
	
	$referent = Referent::get('jasminmittag');
	$referent->name = 'Jasmin Mittag';
	$referent->desc = 'Historikerin';
	$referent->vita = '<p>Jasmin Mittag setzt sich mit der Kampagne „Wer braucht Feminismus?“ für die Imageverbesserung von dem Begriff Feminismus ein. Die Kampagne – ursprünglich von amerikanischen Studierenden initiiert – sammelt Argumente für Feminismus, die online verbreitet und ab Sommer 2014 in einer Wanderausstellung präsentiert werden. Jasmin Mittag ist Historikerin und hat jahrelang im Bereich Kommunikation und Marketing an Hochschulen gearbeitet. Zurzeit ist sie freiberuflich als Projektmanagerin und Beraterin tätig. Dass manche Kreise die soziale Bewegung, die sich für Frauenrechte und Gleichstellung einsetzt, missbilligen, findet sie bedenklich.</p>';
	$referent->setVortrag(Vortrag::get('feminismus'));
	
	$referent = Referent::get('silkeburmester');
	$referent->name = 'Silke Burmester';
	$referent->desc = 'Journalistin';
	$referent->vita = '<p>Silke Burmester lebt und arbeitet als freie Journalistin und Dozentin in Hamburg. Zu ihren Auftraggebern gehören u.a. Die Zeit und Manager Magazin. Sie ist bekannt für ihre streitbaren und unterhaltsamen Kolumnen, die sie mittwochs in der taz „Die Kriegsreporterin – Berichte von der Medienfront“ und sonnabends auf Spiegel Online „Helden der Gegenwart“ veröffentlicht. Ihr Themengebiet ist die Gesellschaftspolitik und die Medien. Ihr Pamphlet gegen die Hysterie der Medien „Beruhigt Euch!“ ist ebenso wie „Das geheime Tagebuch der Carla Bruni“ bei Kiepenheuer & Witsch als Buch erschienen. Burmester bezeichnet sich als „natural born feminist“. Sie ist Mitglied bei der Journalistinnenvereinigung „Pro Quote“ und ist froh, dass Alice Schwarzer endlich weg vom Fenster ist.</p>';
	$referent->setVortrag(Vortrag::get('feminismus'));
	
	$referent = Referent::get('christophbangert');
	$referent->name = 'Christoph Bangert';
	$referent->desc = 'Fotojournalist, Autor';
	$referent->vita = '<p>Christoph Bangert ist ein international anerkannter Fotojournalist, der sich auf Reportagen von politischen Ereignissen und aus Kriegs- und Krisengebieten spezialisiert hat. Er berichtete unter anderem aus dem Irak, Afghanistan, Pakistan, Darfur, dem Libanon und dem Gazastreifen. Seine Bilder erscheinen in Publikationen wie New York Times, Stern und Neue Zürcher Zeitung. Er ist der Autor mehrerer Bücher, darunter Iraq: The Space Between (powerHouse 2007), Africa Overland (National Geographic 2013) und War Porn (Kehrer 2014). Christoph Bangert lebt mit seiner Familie in Uster bei Zürich.</p>';
	$referent->setVortrag(Vortrag::get('abschlussvortrag'));
	
	$referent = Referent::get('johannesrascher');
	$referent->name = 'Johannes Rascher';
	$referent->desc = 'Wirtschaftspsychologe';
	$referent->vita = '<p>Johannes Rascher, M.A., ist seit 2013 Trainer und Coach bei der Grundl Leadership Akademie. Er wurde 1986 in Bad Friedrichshall geboren. Nach seinem Studium des Wirtschaftsingenieurswesen an der HS Esslingen und Wirtschaftspsychologie an der HS Erding arbeitete Johannes Rascher zunächst im Trainingsbereich eines Beratungsunternehmens im Bereich Prozessoptimierung. Bei der Grundl Leadership Akademie unterstützt Johannes Rascher vor allem die Implementierung des Führungssystems Leading Simple in Unternehmen. Die Trainer der Grundl Leadership Akademie sind Experten für Führung, Kommunikation und Menschenentwicklung mit System. Rascher ist ledig und hat keine Kinder.</p>';
	$referent->setVortrag(Vortrag::get('grenzen-der-ressourcen'));
	
	$referent = Referent::get('oliverstengel');
	$referent->name = 'Dr. Oliver Stengel';
	$referent->desc = 'Soziologe';
	$referent->vita = '<p>Dr. Oliver Stengel studierte von 1995 bis 1997 Philosophie, Ethnologie und Erziehungswissenschaften in Heidelberg. Seit 1997 bis 2003 studierte er Soziologie, Psychologie und Politikwissenschaften in Jena und promovierte 2011 zu dem Thema: "Suffizienz: Die Konsumgesellschaft in der ökologischen Krise" und erhielt dafür den Kapp-Preis des Instituts für Soziologie der Universität Jena.Von 2004-2006 war er wissenschaftler Mitarbeiter am Institut für Soziologie der Uni Jena, danach wechselte er in die Forschungsgruppe "Nachhaltiges Produzieren und Konsumieren" des Wuppertal Instituts. Seit März 2014 abreitet er als wissenschaftlicher Mitarbeiter an der Hochschule Bochum. In dieser Funktion wirkte er an etlichen Projekten rund um das Thema Nachhaltigkeit im Konsumverhalten mit, wie zum Beispiel zur Rückgabe und Nutzung gebrauchter Handys als Ausgangspunkt für nachhaltiges Konsumentenverhalten im Rahmen des BMBF-Wissenschaftsjahres 2012 "Zukunftsprojekt Erde" oder war aktiv bei  "The European Topic Centre on Sustainable Consumption and Production", welches ein internationales Konsortium aus europäischen Partnerorganisationen ist, zur Europäischen Umweltagentur (EEA) gehört und dessen Aufgabe die empirische Erhebung von Informationen und Daten zu einem nachhaltigen Konsum- und Produktionsverhalten ist.</p>';
	$referent->setVortrag(Vortrag::get('grenzen-des-konsums'));
	
	$referent = Referent::get('berndwittich');
	$referent->name = 'Bernd Wittich';
	$referent->desc = 'Politikwissenschaftler';
	$referent->vita = '<p>Bernd Wittich engagierte sich nach dem Studium zunächst für die DDR. Er arbeitete in einer Forschungsgruppe zu Veränderungen im politischen System der DDR. Angesichts der Weigerung der SED sich für die Glasnost- und Perestroikapolitik Gorbatschows zu öffnen, eskalierten hier innere Konflikte. Widersprüche zwischen Propaganda und gesellschaftlicher Realität wurden Wittich immer deutlicher bewusst. Zum Bruch mit dem System kam es für ihn, als er vor der Entscheidung stand, entweder seinen Beruf zu verlieren oder eine ihm nahestehende Person zu verraten. Infolge der Weigerung, sich an Denkverbote und Befehle der Partei zu halten, erhielt Wittich später Berufsverbot. Im Dezember 1988 verließ er "freiwillig" die DDR, wurde also faktisch ausgebürgert und entging so einer Haft. </p>';
	$referent->setVortrag(Vortrag::get('25-jahre-mauerfall'));
	
	$referent = Referent::get('siegfriedbuchholz');
	$referent->name = 'Siegfried Buchholz';
	$referent->desc = 'Zeitzeuge';
	$referent->vita = '<p>Herr Buchholz; geboren 1939, lebte nach dem Krieg in Britz, das 1948 im Zuge einer Grenzbegradigung zum sowjetischen Sektor kam, ging aber weiterhin in Westberlin zur Schule, d. h. er wechselte täglich über die Sektorengrenze von Ost nach West und zurück. Den 17. Juni 1953 erlebte er mit, als sein Vater an den Demonstration in Stalin-Allee teilnahm. Er flüchtete dann 1959, nachdem seine Mutter wegen geschmuggelter Eier verhaftet worden war, in den Westen. Seine Mutter kam nach 2 Monaten Haft wegen des Wirtschaftsvergehens ebenfalls in die Bundesrepublik Deutschland.</p>';
	$referent->setVortrag(Vortrag::get('25-jahre-mauerfall'));
	
	$referent = Referent::get('josefschuster');
	$referent->name = 'Prof. Dr. Josef Schuster SJ';
	$referent->desc = 'Professor für Moraltheologie';
	$referent->vita = '<p>Josef Schuster SJ studierte Philosophie und Katholische Theologie und wurde 1974 zum Priester geweiht. Anschließend war er Lehrer für Religion und Philosophie, sowie Erzieher für die Jahrgangsstufen 12 und 13 am Aloisiuskolleg in Bonn-Bad Godesberg. Nachdem Schuster 1982 in Theologischer Ethik promoviert hatte, wurde er Leiter des Jugendzentrums „Mergener Hof“ in Trier, nebenamtlich arbeitete er weiterhin als Religionslehrer. Nachdem Schuster einige Jahre lang als Hochschulassistent an der Philosophisch-Theologischen Hochschule Sankt-Georgen in Frankfurt am Main tätig war, wurde er 1996 Professor für Moraltheologie. Schuster ist u.a. Mitglied im „Arbeitskreis Ethik in der Medizin – Haus am Dom Frankfurt“ und im „Frankfurter Forum für gesellschafts- und gesundheitspolitische Grundsatzfragen e.V.“.</p>';
	$referent->setVortrag(Vortrag::get('medizinethik'));
	
	$referent = Referent::get('frankplasberg');
	$referent->name = 'Frank Plasberg';
	$referent->desc = 'Journalist';
	$referent->vita = '<p>Frank Plasberg (geboren 1957) begann nach dem Abitur ein Volontariat bei der »Schwäbischen Zeitung«, im Anschluss ging Plasberg als Polizeireporter zur »Abendzeitung« München. Danach folgte ein Abstecher an die Uni Köln: Studium der Theaterwissenschaft, Politik und Pädagogik. Das blieb ein kurzer Ausflug, denn inzwischen lockte eine neue Herausforderung: beim SWF3 startete die Karriere des Radiomoderators Frank Plasberg.</ br>
1987 dann der Wechsel zum Fernsehen. 15 Jahre moderierte er die „Aktuelle Stunde“ im WDR. Mit „hart aber fair“ gelang Plasberg sein bisheriges Glanzstück. Zusammen mit Produzent Jürgen Schulte entwickelte er 2001 seinen Polit-Talk, der neue Maßstäbe für die politische Kommunikation im Fernsehen gesetzt hat. Seit 2007 läuft „hart aber fair“ mit großem Erfolg wöchentlich in der ARD. Darüber hinaus moderiert Plasberg in der Unterhaltung einige erfolgreiche Sendungen, so beispielsweise seit 2009 „Das große ARD-Jahresquiz“.
</p>';
	$referent->setVortrag(Vortrag::get('gespraechsrunde-mit-frank-plasberg'));
	
	
	$referent = Referent::get('ankedomscheitberg');
	$referent->name = 'Anke Domscheit-Berg';
	$referent->desc = 'Landesvorsitzende der Piraten Brandenburg';
	$referent->vita = '<p>Anke Domscheit-Berg studierte in der DDR Textilkunst. Ihr zweites Studium schloss sie mit dem Master in European Business Administration (Newcastle, UK) ab. Anschließend arbeitete sie in Managementfunktionen für die IT Beratung Accenture, für McKinsey und Microsoft Deutschland. 2011 gründete Domscheit-Berg die Plattform fempower.me, die Unternehmen bei der Erhöhung des Frauenanteils im Management berät. Mit ihrem Unternehmen opengov.me und ihrer Unterstützung verschiedener zivilgesellschaftlicher Initiativen setzt Domscheit-Berg sich für Transparenz in Verwaltungen und Bürgerbeteiligung ein. Als Expertin rund um die digitale Gesellschaft publiziert sie für print- und online-Medien und ist gefragte Rednerin und Interviewpartnerin im In- und Ausland. In der Wendezeit war Domscheit-Berg in der DDR an Widerstandsaktionen beteiligt. Nach einigen Jahren Mitgliedschaft bei Bündnis 90/die Grünen trat sie 2012 der Piratenpartei bei. Inzwischen Landesvorsitzende der Piraten in Brandenburg, kandidiert sie bei der Europawahl im Mai 2014.</p>';
	$referent->setVortrag(Vortrag::get('privatsphaere'));
	
	$referent = Referent::get('casparclemensmierau');
	$referent->name = 'Caspar Clemens Mierau';
	$referent->desc = 'Medienkulturwissenschaftler';
	$referent->vita = '<p>Caspar Clemens Mierau hat Medienkulturwissenschaft in Weimar studiert, wo er derzeit für eine Dissertation über Geschichte und Kultur von Programmierumgebungen betreut wird. Hauptberuflich berät er Berliner Startups im Technikumfeld. 2011 veranstaltete er in Berlin erstmals den medienpädagogischen „Post Privacy Day“ und organisierte die ersten beiden „Spackeriaden“ mit. Er betreibt mehrere Blogs (u.a. leitmedium.de) und Podcasts (u.a. leitmotiv.cc) und schrieb für ein Jahr das mittlerweile geschlossene Blog popcornpiraten.de. Thematisch setzt er derzeit sich mit dem veränderten Wechselspiel von öffentlicher/nicht-öffentlicher Kommunikation, digitaler Empörung, sowie Kulturtechniken auseinander. Die Vorträge und Veröffentlichungen der letzten Jahre fokussierten sich auf „Post Privacy“ und Hackerkultur.</p>';
	$referent->setVortrag(Vortrag::get('privatsphaere'));
	
	$referent = Referent::get('alexanderpschera');
	$referent->name = 'Dr. Alexander Pschera';
	$referent->desc = 'Autor';
	$referent->vita = '<p>Alexander Pschera studierte Germanistik und Philosophie in Heidelberg und arbeitete lange Zeit als Journalist. Heute ist er Geschäftsführer der Münchner Kommunikationsberatung Maisberger, freier Autor und Blogger. Pschera beschäftigt sich in seiner Arbeit vor allem mit den Auswirkungen des digital turns auf Gesellschaft, Arbeitswelt, Privatleben und Kultur. Zu seinen wichtigsten Arbeiten zählen „800 Millionen. Apologie der sozialen Medien“, „Dataismus. Kritik der anonymen Moral“ und „Vom Schweben. Romantik im Digitalen“ (alle bei Matthes & Seitz Berlin). Im Frühjahr erscheint ein Buch über den Einfluss des Internets auf das Naturbild des Menschen („Das Internet der Tiere“).</p>';
	$referent->setVortrag(Vortrag::get('privatsphaere'));
	
	$referent = Referent::get('nilszurawski');
	$referent->name = 'Dr. habil. Nils Zurawski';
	$referent->desc = 'Ethnologe';
	$referent->vita = '<p>Nach seinem Studium der Soziologie, Ethnologie und Geographie in Münster, das er 1999 mit der Promotion "Virtuelle Ethnizität. Studien zu Identität, Kultur und Internet" abschloss, begab Nils Zurawski sich zwecks Feldforschung zu den Themen Gewalt und Identität nach Nordirland. Seit 2003 ist er an Forschungsprojekten zu den Themen Videoüberwachung, Kundenkarten und Sicherheit beteiligt. Zurawski ist Direktor des Surveillance Studies Network und Mit-Herausgeber von "Kommunikation@Gesellschaft" und "Surveillance & Society". Er lehrt und forscht er an der Universität Hamburg. In seinem aktuellen Forschungsprojekt widmet er sich dem Thema "Increasing Resilience in Surveillance Societies". Seine aktuellen Publikationen beschäftigen sich mit dem Thema "Consuming Surveillance”.</p>';
	$referent->setVortrag(Vortrag::get('privatsphaere'));
	
	$referent = Referent::get('dagbaehr');
	$referent->name = 'BrigGen Dag Baehr';
	$referent->desc = 'Kommandeur KSK der Bundeswehr';
	$referent->vita = '<p>Dag Baehr, geb. 1965 in Koblenz, studierte nach seinem Eintritt 1985 als Offiziersanwärter beim Gebirgsjägerbataillon 231, Bad Reichenhall, in die Bundeswehr Staats-/Sozialwissenschaften und Philosophie in München von 1989 bis 1992. Sein weiterer militärischer Werdegang führte ihn 1996 zum Kommando Spezialkräfte. Ab 1999 ergaben sich sodann diverse nationale und internationale Verwendungen als Stabsoffizier. Im März 2013 wurde er zum Kommandeur des Kommando Spezialkräfte der Bundeswehr ernannt. Er hat zahlreiche Einsätze in Krisen- und Kriegsgebieten bestritten und ist Träger einer Vielzahl von nationalen und internationalen Auszeichnungen.</p>';
	$referent->setVortrag(Vortrag::get('sportliche-grenzen'));
	
	$referent = Referent::get('tanjakunz');
	$referent->name = 'Tanja Angela Kunz';
	$referent->desc = 'Literaturwissenschaftlerin';
	$referent->vita = '<p>Tanja Angela Kunz, geb. 1980 in Karlsruhe, studierte Neuere deutsche Literatur und Romanistik an der Humboldt-Universität zu Berlin mit anschließender Promotion im Fach Deutsche Literatur. Als Stipendiatin der Elsa-Neumann-Stiftung Berlin forschte sie intensiv zum spannungsreichen und vielgestaltigen Verhältnis von Literatur und Ethik im 20. und 21. Jahrhundert. Ihre interdisziplinär ausgerichtete Promotionsschrift mit dem Titel Die Sehnsucht nach dem Guten bei Peter Handke. Zum Verhältnis von Literatur und Ethik im epischen und dramatischen Werk reichte sie Ende 2013 ein. Sie ist Mitverfasserin der 2014 bei De Gruyter im Auftrag des Deutschen Literaturarchivs Marbach erscheinenden Forschungsbibliographie zu Peter Handke (in: Peter Handke. Stationen, Orte, Positionen).</p>';
	$referent->setVortrag(Vortrag::get('grenzen-der-moral'));
	
	$referent = Referent::get('paulkirchhof');
	$referent->name = 'Prof. Dr. Paul Kirchhof';
	$referent->desc = 'Jurist, ehem. Bundesverfassungsrichter';
	$referent->vita = '<p>Paul Kirchhof studierte Rechtswissenschaften an den Universitäten Freiburg und München. Von 1975 bis 1981 war er ordentlicher Professor für Öffentliches Recht und Direktor des Instituts für Steuerrecht der Universität Münster, dessen Prorektor er zeitweise war. Seit 1981 lehrt er als Ordentlicher Professor für öffentliches Recht an der Universität Heidelberg, war dort bis 2013 der Direktor des Instituts für Finanz- und Steuerrecht und zweitweise der Dekan der Juristischen Fakultät. 1987 erfolgte die Berufung als Bundesverfassungsrichter. Seit 2000 ist er zum ordentlichen Mitglied der Heidelberger Akademie der Wissenschaften gewählt worden und wurde 2013 ihr Präsident. Seit 2013 ist er Seniorprofessor distinctus der Universität Heidelberg.</p>';
	$referent->setVortrag(Vortrag::get('voelkerrecht'));
	
	$referent = Referent::get('michaellysanderfremuth');
	$referent->name = 'Dr. Michael-Lysander Fremuth';
	$referent->desc = 'Jurist';
	$referent->vita = '<p>Dr. Michael-Lysander Fremuth wuchs in Köln auf, wo er später auch sein Jurastudium absolvierte. Er blieb der Universität zu Köln als wissenschaftlicher Mitarbeiter und später Akademischer Rat am Lehrstuhl für Völker- und Europarecht, Europäisches und Internationales Wirtschaftsrecht verbunden. Sein Interesse am internationalen Recht und den internationalen Beziehungen reflektieren neben Vorlesungen zum Recht internationaler Organisationen und zu den Menschenrechten Aufenthalte bei der Ständigen Vertretung Deutschlands bei den Vereinten Nationen, New York, und der Europäischen Kommission, Brüssel. Dr. Fremuth ist Mitglied des Vorstandes der Deutschen Gesellschaft der Vereinten Nationen (DGVN), Vorstandsvorsitzender der DGVN in Nordrhein-Westfalen und engagiert sich bei Amnesty International.</p>';
	$referent->setVortrag(Vortrag::get('voelkerrecht'));
	
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
	$referent->desc = 'Politikwissenschaftler und Leiter der Vertretung der EU-Kommission in München';
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
	

	$referent = Referent::get('aloisserwaty');
	$referent->name = 'Alois Serwaty';
	$referent->desc = 'Autor';
	$referent->vita = 'Alois Serwaty, geb. 1947 in Daun/Eifel, Berufsoffizier a.D., Studium des Bauingenieurwesens in München. Seit einer Außerkörper- bzw. Nahtoderfahrung bei einem medizinischen Eingriff erfolgte über 20 Jahre eine intensive Beschäftigung mit natur- und geisteswissenschaftlichen Fragestellungen zu diesen Phänomenen und führte zur Herausgabe von Tagungs-/Sammelbänden mit interdisziplinären Beiträgen sowie unterschiedlichen Veröffentlichungen und Vortragstätigkeiten, u.a. an Universitäten, kirchlichen und säkularen Akademien und bei Kongressen. Mitbegründer und derzeitiger Vorsitzender (seit 2004) des Netzwerk Nahtoderfahrung e.V. in Deutschland.';
	$referent->setVortrag(Vortrag::get('spirituelle-grenzen'));

	$referent = Referent::get('frankaugustin');
	$referent->name = 'Frank Augustin';
	$referent->desc = 'Chefredakteur agora42';
	$referent->vita = 'In Freiburg i.Br. geboren und später nach Stuttgart wechselnd, studiere Frank Augustin Geschichte und Philosophie an der Universität Stuttgart und schloss dort 1994 sein Magisterstudium ab. Im selben Jahr begann die freie Mitarbeit bei dem Magazin „der blaue reiter – Journal für Philosophie“. Im Jahr 1999 folgte die Anstellung als Redakteur, die eine Karriere bei dem blauen reiter begünstigte und schließlich 2009 zur Ernennung als stellvertretender Chefredakteur führte. Ebenfalls im Jahr 2009 fand die Mitgründung des philosophischen Wirtschaftsmagazins agora42 statt, dessen Chefredakteur Frank Augustin seit der Gründung ist. ';
	$referent->setVortrag(Vortrag::get('wirtschaftliche-grenzen'));
	
	$referent = Referent::get('kevinkuhn');
	$referent->name = 'Kevin Kuhn';
	$referent->desc = 'Autor';
	$referent->vita = 'Kevin Kuhn wuchs in Ulm auf und studierte Philosophie, Kunstgeschichte und Religionswissenschaft in Tübingen sowie Kreatives Schreiben und Kulturjournalismus in Hildesheim. Seit 2010 lehrt er als Wissenschaftlicher Mitarbeiter am dortigen Institut für literarisches Schreiben und Literaturwissenschaft. Neben Veröffentlichungen in Literatur-Zeitschriften und Anthologien schreibt er literarische Essays für Ausstellungskataloge, Galerien und Künstler. 2012 erschien sein Debütroman Hikikomori, der in der Literaturkritik hohe Beachtung erfuhr. Von der Frankfurter Allgemeinen Sonntagszeitung wurde er im Oktober 2012 als einer der 20 wichtigsten jungen Autoren der Gegenwart genannt. ';
	$referent->setVortrag(Vortrag::get('lesung'));
		
	$referent = Referent::get('ralfboent');
	$referent->name = 'Ralf Bönt';
	$referent->desc = 'Physiker, Autor';
	$referent->vita = '<p>Ralf Bönt wurde 1963 in Lich geboren und wuchs in Bielefeld auf. Nach einer Handwerkerlehre studierte er Physik. Forschungsaufenthalte brachten ihn unter anderem ans Genfer CERN. Er veröffentlichte Erzählungen, Romane, Hörspiele und Essays und wurde mehrfach ausgezeichnet: unter anderem mit dem Book Office Grant New York sowie dem 3sat-Preis (1998) und dem Kelag-Preis (2009) beim Ingeborg-Bachmann-Wettbewerb. In seinem Buch „Das entehrte Geschlecht. Ein notwendiges Manifest für den Mann“ (erschienen 2012) hinterfragt er die Rolle des Mannes in der modernen Gesellschaft und plädiert für eine neue Form der Gleichberechtigung, die verstärkt auch die Bedürfnisse und Schwierigkeiten moderner Männer mit einschließt. Der Autor lebt heute in Berlin.</p>';
	$referent->setVortrag(Vortrag::get('feminismus'));

	$referent = Referent::get('wolfschuenemann');
	$referent->name = 'Dr. Wolf J. Schünemann';
	$referent->desc = 'Politikwissenschaftler';
	$referent->vita = 'Wolf J. Schünemann (geb. 1982) hat an der Universität in Kiel sowie der Sciences Po in Rennes Politikwissenschaft, Philosophie, Neuere deutsche Literatur und Medien studiert und das Studium im Mai 2007 als Magister Artium abgeschlossen. Im November 2012 hat er seine Dissertation mit dem Titel „Das Non, Nee, No der subversiven Souveräne – eine vergleichende Diskursanalyse der Referenden über den EU-Verfassungs- bzw. -Reformvertrag in Frankreich, den Niederlanden und Irland“ an der Universität Koblenz-Landau erfolgreich verteidigt. Seit 2007 arbeitet Wolf Schünemann als Wissenschaftlicher Mitarbeiter an der Abteilung Politikwissenschaft der Universität Koblenz-Landau. Zudem ist er seit September 2013 Akademischer Mitarbeiter am Institut für Politische Wissenschaft (IPW) in Heidelberg. Seine Forschungsschwerpunkte liegen in den Bereichen europäische Integration, vergleichende Diskursanalyse und Netzpolitik.';
	$referent->setVortrag(Vortrag::get('europaeische-union'));
		
?>