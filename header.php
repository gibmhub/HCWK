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
  		<link rel="stylesheet" href="<?=$pagemap->root_url?>style/style.min.css" type="text/css" />

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    

		<!-- Countdown -->
		<!--<link rel="stylesheet" href="<?=$pagemap->root_url?>jQuery-Countdown/countdown/jquery.countdown.css" type="text/css" />
		<script type="text/javascript" src="<?=$pagemap->root_url?>jQuery-Countdown/countdown/jquery.countdown.js"></script>-->

  </head>
  <body>    

    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <?php
    					foreach ($main_navi->allElements() as $page) {
    						echo '<li class="';
    						if ($pagemap->isCurrentPage($page)) {
    							echo 'active';
    						}
    						if (count($page->childPages)>0) {
    							echo ' dropdown';
    						}
    						echo '"><a';
    						if (count($page->childPages)>0) {
    							echo ' class="dropdown-toggle" data-toggle="dropdown"';
    						}
    						echo ' href="'.$pagemap->getUrlForPage($page).'">'.$page->title;
    						if (count($page->childPages)>0) {
    						  echo ' <b class="caret"></b>';
    						}
    						echo '</a>';
    						if (count($page->childPages)>0) {
        						echo '<ul class="dropdown-menu">';
        						foreach ($page->childPages as $child) {
            						echo '<li';
            						if ($pagemap->isCurrentPage($child)) {
            							echo ' class="active"';
            						}
            						echo '><a href="'.$pagemap->getUrlForPage($child).'">'.$child->title.'</a></li>';
            					}
            					echo '</ul>';
            				}
    						
    						echo '</li>';
    					}
    				?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
      
      
    <div class="container-fluid">
      <div class="wrapper">
        <div class="sidebar"></div>
        <div class="main">
