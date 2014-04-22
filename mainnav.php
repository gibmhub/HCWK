<nav id="mainnav" role="navigation">

	<div class="container-fluid">
	
		<div class="navbar-header">
						
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-wrapper">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<div id="brand-constrained-left" class="brand-constrained-wrapper">
				<div id="brand-constrained-inner-left"><a href="/">zenlos</a></div>
			</div>
			
			<div id="brand-small"><a href="/">Grenzen[los]</a></div>
	
		</div>
	
		<div id="brand-constrained-right" class="brand-constrained-wrapper navbar-right">
			<p id="brand-constrained-inner-right"><a href="/">grenz</a></p>
		</div>
		
		<div id="countdown-wrapper" class="navbar-right"><div id="countdown"></div></div>
		
	    <div id="navbar-wrapper" class="collapse navbar-collapse">
			<?php
				echo $main_navi->getHTML('nav navbar-nav');
			?>
		</div>

	</div>
	
</nav>
