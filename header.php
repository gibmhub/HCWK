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
  		<link rel="stylesheet" href="/css/style.css" type="text/css" />

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    <!-- jQuery -->
	    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
		
	    <!-- Bootstrap Plugins :: Include all compiled plugins (below), or include individual files as needed :: //netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js -->
	    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	    <!-- jqBootstrapValidation -->
	    <script src="/bower_components/jqBootstrapValidation/dist/jqBootstrapValidation-1.3.7.min.js"></script>

		<!-- Countdown -->
		<link rel="stylesheet" href="/js/jQuery-Countdown/countdown/jquery.countdown.css" type="text/css" />
		<script type="text/javascript" src="/js/jQuery-Countdown/countdown/jquery.countdown.js"></script>
		
		<!-- Google Analytics -->
<?php
	if ($pagemap->env==VI_ENV_RELEASE) {
?>
		<script>
	        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	        ga('create', 'UA-45791086-1', 'heidelberger-symposium.de');
	        ga('send', 'pageview');
	    </script>
<?php
	}
?>

		<!-- Custom -->
		<script type="text/javascript" src="/js/min/custom-ck.js"></script>

	</head>
	
	<?php
		if (isset($current_page->options['noframe'])&&$current_page->options['noframe']==true) {
	?>
	
	<body>
		<div id="banner">	
			<div class="container-fluid"><div class="row">
				<div class="hand hand-left"></div>
				<div class="logo"></div>
				<div class="hand hand-right"></div>
			</div></div>
		</div>

	<?php
			include('mainnav.php');			
	?>
		<div id="main">
			
	<?php
	
		} else {
			
			echo '<body class="mainnav-shift">';
		
			include('mainnav.php');
	?>
	
		    <div id="main">
		    	<div class="row">
			    	<div id="sidebar">
			    		<?php
			    			include('sidebar.php');
			    		?>
			    	</div>
			        <div class="content sidebar-complement">
			        	<?php
			        		if (!(isset($current_page->options['hide_title'])&&$current_page->options['hide_title'])) {
				        		echo '<h1>'.$current_page->title.'</h1>';
			        		}
			        	?>
					
	<?php
		}
	?>