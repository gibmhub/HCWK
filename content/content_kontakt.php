<?php
	$send_success = false;
	if (isset($_GET['success'])&&$_GET['success']=='true') {
		$send_success = true;
	}
	
	if (!$send_success) {
?>
<form id="kontakt_form">

	<fieldset>
	
    	<label for="kontakt_name">Name:</label><input id="kontakt_name" type="text"/>
		
		<label for="kontakt_email">Email:</label><input id="kontakt_email" type="text">
		
		<label for="kontakt_msg">Nachricht:</label><textarea id="kontakt_msg"></textarea>
	</fieldset>
	
	<p class="right"><a id="kontakt_submit">Absenden >></a></p>

</form>

<?php
    } else {
?>

<p>Vielen Dank für Ihre Nachricht.</p>

<?php
    }
?>
