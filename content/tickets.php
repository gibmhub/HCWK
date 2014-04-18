<h1>Tickets registrieren oder kaufen</h1>

<p><div id="success">
<?php
	if (isset($_GET['payment-success'])) {
		if ($_GET['payment-success']=='true') {
	        // Success message
			echo '<div class="alert alert-success"><button class="close" type="button" data-dismiss="alert">×</button><strong>Vielen Dank! Ihr Online-Kauf war erfolgreich…</strong> Sie erhalten in wenigen Minuten eine Email zur Bestätigung. Um die angegebenen Daten zu korrigieren, können Sie die Registrierung erneut durchführen. Bitte wenden Sie sich bei Fragen an unseren <a href="/kontakt">Kontakt</a></div>';
		} else if ($_GET['payment-success']=='false') {
			// Fail message
			echo '<div class="alert alert-danger"><button class="close" type="button" data-dismiss="alert">×</button><strong>Hmm, da hat etwas nicht geklappt…</strong> Wenn Sie diese Meldung unerwartet erhalten, wenden Sie sich bitte an unseren <a href="/kontakt">Kontakt</a>.</div>';
		}
	}
?>	
</div></p>

<p>Bitte geben Sie Ihren Namen und Ihre Email-Adresse an. Sie erhalten dann zu Beginn des Symposiums ein Namensschild von uns, das Ihnen während der Veranstaltungszeit als Eintrittskarte dient.</p>

<form id="tickets-form" class="form-horizontal" role="form">

	<div class="form-group control-group">
    	<label for="tickets-name" class="form-col-label control-label">Name</label>
    	<div class="form-col-input controls">
    		<input id="tickets-name" type="text" class="form-control validate-registrierung validate-ticketverkauf" placeholder="Name" required data-validation-required-message="Bitte geben Sie Ihren Namen ein">
    	</div>
	</div>
	<div class="form-group control-group">		
		<label for="tickets-email" class="form-col-label control-label">Email</label>
		<div class="form-col-input controls">
			<input id="tickets-email" type="email" class="form-control validate-registrierung validate-ticketverkauf" placeholder="Email" required data-validation-required-message="Bitte geben Sie Ihre Email-Adresse ein" data-validation-email-message="Bitte geben Sie eine gültige Email-Adresse ein">
		</div>
	</div>
	
</form>

	<div class="row">
	
		<div class="col-sm-4">
			
			<p>Haben Sie bereits ein Ticket? Dann geben Sie bitte hier Ihren Ticket-Code ein.</p>
			
			<form id="registrierung-form">
				<div class="form-group control-group">		
					<div class="controls">
			    		<input id="tickets-code" type="text" class="form-control validate-registrierung" placeholder="Ticket-Code" required data-validation-required-message="Bitte geben Sie Ihren Ticket-Code ein" minlength="6" maxlength="6" data-validation-maxlength-message="Bitte geben Sie einen gültigen Ticket-Code ein" data-validation-minlength-message="Bitte geben Sie einen gültigen Ticket-Code ein">
					</div>
				</div>
				<button id="registrierung-submit" type="submit" class="btn btn-primary pull-right">Registrieren!</button>
			</form>		
		</div>
		
		<div class="clearfix visible-xs"></div>
		
		<div class="col-sm-1 text-center" style="margin: 15px 0 15px 0">
			<strong>oder</strong>
		</div>
		
		<div class="col-sm-7">
		
			<p>Noch kein Ticket? Erwerben Sie hier ein Ticket im Online-Verkauf.</p>
			<p>Der Preis enthält den <strong>Eintritt zu allen Veranstaltungen</strong> des 26. Heidelberger Symposiums 2014, sowie <strong>Verköstigung und Getränke (s.u.)</strong> während des Symposiums.</p>
			
			<form id="ticketverkauf-form">
				<div class="row"><div class="col-sm-7">
				<div class="form-group control-group">
					<label for="tickets-type" class="control-label">Ticket</label>
					<div class="controls">
						<div class="radio">
							<label>
								<input type="radio" class="validate-ticketverkauf" name="tickets-type" id="type-reduced" value="reduced" data-price="15" required data-validation-required-message="Bitte wählen Sie eine Ticketart">
								Ermäßigt 15€<br>
								<small>für Schüler, Studenten, Auszubildende und Menschen mit Behinderung</small>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" class="validate-ticketverkauf" name="tickets-type" id="type-reduced-double" value="reduced-double" data-price="26">
								2 Ermäßigte Tickets für 26€<br>
								<small>Ticketspecial zum 26. Heidelberger Symposium</small>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" class="validate-ticketverkauf" name="tickets-type" id="type-normal" value="normal" data-price="30">
								Normalpreis 30€
							</label>
						</div>
					</div>
				</div>
				</div><div class="col-sm-5">
				<div class="form-group control-group">
					<label for="tickets-zahlungsart" class="control-label">Zahlungsart</label>
					<div class="controls">
						<div class="radio">
							<label>
								<input type="radio" class="validate-ticketverkauf" name="tickets-zahlungsart" id="zahlungsart-paypal" value="paypal" required data-validation-required-message="Bitte wählen Sie eine Zahlungsart">
								Paypal
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" class="validate-ticketverkauf" name="tickets-zahlungsart" id="zahlungsart-sofortueberweisung" value="sofortueberweisung">
								Sofortüberweisung<br>
							</label>
						</div>
					</div>
				</div>
				</div></div>
				<div class="pull-right"><small><span id="ticketverkauf-submit-desc" data-content="Keine Zahlungsart ausgewählt"></span></small><button id="ticketverkauf-submit" type="submit" class="btn btn-primary">Weiter zur Bezahlung…</button></div>
			</form>
			<div id="paypal">
				<script src="/js/paypal/paypal-button.min.js?merchant=<? if ($paypal_use_sandbox) { echo $paypal_merchant_id_sandbox; } else { echo $paypal_merchant_id; }?>"
				    data-button="buynow"
				    data-name="26. Heidelberger Symposium"
				    data-amount="0"
				    data-currency="EUR"
				    data-callback="<?=VIPagemap::$baseurl?>/ajax/paypal-listener.php"
				    data-return="<?=VIPagemap::$baseurl?>/tickets/?payment-success=true"
				    <?php if ($paypal_use_sandbox) { ?>
				    data-env="sandbox"
				    <?php } ?>
				    data-custom=""
				></script>
			</div>
			<div id="sofortueberweisung">
				<form class="sofortueberweisung-button" method="post" action="https://www.sofort.com/payment/start">
					<input type="hidden" name="user_id" value="<?=$sofortueberweisung_user_id?>" />
					<input type="hidden" name="project_id" value="<?=$sofortueberweisung_project_id?>" />
					<input type="hidden" name="reason_1" value="-TRANSACTION-" />
					<input type="hidden" name="reason_2" value="Heidelberger Symposium" />
					<input type="hidden" name="user_variable_0" value="" />
					<input type="hidden" name="user_variable_1" value="" />
					<input type="hidden" name="user_variable_2" value="" />
					<input type="hidden" name="amount" value="0" />
					<input type="submit" value="Absenden" />
				</form>
			</div>

		</div>
		
	</div>
	
</form>


<h1>Häufig gestellte Fragen</h1>

<div class="row">

<?php
	include_once(__DIR__.'/../data/faq.php');
	
	foreach ($faq_items as $faq) {
		echo '<div class="col-sm-6"><p><strong>'.$faq->frage.'</strong><br>'.$faq->antwort.'</p></div>';
	}
?>
		
</div>