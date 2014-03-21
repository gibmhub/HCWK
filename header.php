<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	
		<!-- Title -->
		<title>
			<?=$pagemap->main_title.' | '.$current_page->title?>
		</title>
	
  		<!-- Stylesheets -->
  		<link rel="stylesheet" href="css/style.css" type="text/css" />

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    <!-- jQuery -->
	    <script src="bower_components/jquery/dist/jquery.min.js"></script>
		
	    <!-- Bootstrap Plugins :: Include all compiled plugins (below), or include individual files as needed :: //netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js -->
	    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<!-- Countdown -->
		<link rel="stylesheet" href="js/jQuery-Countdown/countdown/jquery.countdown.css" type="text/css" />
		<script type="text/javascript" src="js/jQuery-Countdown/countdown/jquery.countdown.js"></script>
		<script type="text/javascript" src="js/min/custom-ck.js"></script>

	</head>
	<body>

	<nav id="mainnav" role="navigation">
			
		<div id="toggle-wrapper">
			
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-wrapper">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
		</div>

		<div id="brand-constrained-left" class="brand-constrained-wrapper">
			<div id="brand-constrained-inner-left">zenlos</div>
		</div>

		<div id="brand-constrained-right" class="brand-constrained-wrapper">
			<p id="brand-constrained-inner-right">grenz</p>
		</div>

		
        <div id="navbar-wrapper" class="collapse navbar-collapse">
			<?php
				echo $main_navi->htmlRepresentation('navbar', $pagemap, False);
			?>
		</div>
		
	</nav>

    <div id="main">
        <div id="sidebar">
    		<?php
        		include('sidebar.php');
    		?>
        </div>
        <div id="content">
			<h1><?=$current_page->title?></h1>