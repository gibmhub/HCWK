<?php

include_once('data/data-structures.php');

$sponsoren = array();

$sponsor = new Sponsor();
$sponsor->name = 'BASF';
$sponsor->logo = 'Logo_BASF.jpg';
$sponsor->link = 'http://www.deutschland.basf.com/ecp3/Germany/de/';
$sponsor->klasse = 'hauptsponsor';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Hans Böckler Stiftung';
$sponsor->logo = 'Logo_Hans_Boeckler_Stiftung.jpg';
$sponsor->link = 'http://www.boeckler.de/index.htm';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Curacon';
$sponsor->logo = 'Logo_Curacon.jpg';
$sponsor->link = 'http://www.curacon.de';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Freudenberg';
$sponsor->logo = 'Logo_Freudenberg.jpg';
$sponsor->link = 'http://www.freudenberg.com/de/Seiten/default.aspx';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Heidelberger Volksbank';
$sponsor->logo = 'Logo_Heidelberger_Volksbank.jpg';
$sponsor->link = 'https://www.heidelberger-volksbank.de/';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'agora42';
$sponsor->logo = 'Logo_agora42.png';
$sponsor->link = 'https://www.agora42.de';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Esser Stiftung';
$sponsor->logo = 'Logo_Esser_Stiftung.png';
$sponsor->link = 'http://www.esser-stiftung.de/index.html';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Endress+Hausser';
$sponsor->logo = 'Logo_Endresshausser.jpg';
$sponsor->link = 'http://www.de.endress.com';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Gerolsteiner';
$sponsor->logo = 'Logo_Gerolsteiner.png';
$sponsor->link = 'http://www.gerolsteiner.de';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'IFM';
$sponsor->logo = 'Logo_IFM.png';
$sponsor->link = 'https://www.ifm.com';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Techniker Krankenkasse';
$sponsor->logo = 'Logo_TK.jpg';
$sponsor->link = 'http://www.tk.de';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Henkel';
$sponsor->logo = 'Logo_Henkel.jpg';
$sponsor->link = 'http://www.henkel.de/';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

?>