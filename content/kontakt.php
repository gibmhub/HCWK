<?php
	$send_success = false;
	if (isset($_GET['success'])&&$_GET['success']=='true') {
		$send_success = true;
	}
	
	if (!$send_success) {
?>
<form id="kontakt-form" class="form-horizontal" role="form">

	<div class="form-group control-group">
    	<label for="kontakt-name" class="col-sm-3 control-label">Name</label>
    	<div class="col-sm-9 controls">
    		<input id="kontakt-name" type="text" class="form-control validate" placeholder="Name" required data-validation-required-message="Bitte geben Sie Ihren Namen ein">
    	</div>
	</div>
	<div class="form-group control-group">		
		<label for="kontakt-email" class="col-sm-3 control-label">Email</label>
		<div class="col-sm-9 controls">
			<input id="kontakt-email" type="email" class="form-control validate" placeholder="Email" required data-validation-required-message="Bitte geben Sie Ihre Email-Adresse ein" data-validation-email-message="Bitte geben Sie eine gültige Email-Adresse ein">
		</div>
	</div>
	<div class="form-group control-group">		
		<label for="kontakt-msg" class="col-sm-3 control-label">Nachricht</label>
		<div class="col-sm-9 controls">
			<textarea id="kontakt-msg" class="form-control validate" required data-validation-required-message="Bitte geben Sie Ihre Nachricht ein" rows="5"></textarea>
			</div>
	</div>
	
	<div id="success"></div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<button id="kontakt-submit" type="submit" class="btn btn-primary">Absenden</button>
		</div>
	</div>

</form>

<?php
    } else {
?>

<p>Vielen Dank für Ihre Nachricht.</p>

<?php
    }
?>
