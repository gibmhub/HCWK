<?php

include_once('data/data_structures.php');

$sponsoren = array();

$sponsor = new Sponsor();
$sponsor->name = 'BASF';
$sponsor->logo = 'Logo_BASF.jpg';
$sponsor->link = 'http://www.deutschland.basf.com/ecp3/Germany/de/';
$sponsor->klasse = 'hauptsponsor';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Curacon';
$sponsor->logo = 'Logo_Curacon.jpg';
$sponsor->link = 'http://www.curacon.de';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Hans Böckler Stiftung';
$sponsor->logo = 'Logo_Hans_Boeckler_Stiftung.jpg';
$sponsor->link = 'http://www.boeckler.de/index.htm';
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
$sponsor->name = 'Henkel';
$sponsor->logo = 'Logo_Henkel.jpg';
$sponsor->link = 'http://www.henkel.de/';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

$sponsor = new Sponsor ();
$sponsor->name = 'Esser Stiftung';
$sponsor->logo = 'Logo_Esser_Stiftung.png';
$sponsor->link = 'http://www.esser-stiftung.de/index.html';
$sponsor->klasse = 'make-border';
$sponsoren[] = $sponsor;

?>