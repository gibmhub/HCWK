<h1>Tickets registrieren oder kaufen</h1>

<p><div id="success"></div></p>

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
	
		<div class="col-sm-5">
			
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
		
		<div class="col-sm-1 text-center">
			<strong>oder</strong>
		</div>
		
		<div class="col-sm-6">
		
			<p>Noch kein Ticket? Erwerben Sie ein Ticket im Online-Verkauf.</p>
			<p>Der Preis enthält den <strong>Eintritt zu allen Veranstaltungen</strong> des 26. Heidelberger Symposiums 2014, sowie <strong>Verköstigung und Getränke</strong> während des Symposiums.</p>
			
			<form id="ticketverkauf-form">
				<div class="form-group control-group">
					<div class="controls">
						<div class="radio">
							<label>
								<input type="radio" class="validate-ticketverkauf" name="tickets-type" id="type-reduced" value="reduced" required data-validation-required-message="Bitte wählen Sie eine Ticketart">
								Ermäßigt 15€<br>
								<small>für Schüler, Studenten, Auszubildende und Behinderte</small>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" class="validate-ticketverkauf" name="tickets-type" id="type-normal" value="normal">
								Normalpreis 30€
							</label>
						</div>
					</div>
				</div>
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
								Sofortüberweisung
							</label>
						</div>
					</div>
				</div>
				<button id="ticketverkauf-submit" type="submit" class="pull-right btn btn-primary">Weiter zur Bezahlung…</button>
			</form>
			<div id="paypal">
				<script src="/js/paypal/paypal-button.min.js?merchant=YOUR_MERCHANT_ID"
				    data-button="buynow"
				    data-name="26. Heidelberger Symposium"
				    data-amount="1.00"
				    data-currency="EUR"
				    data-callback="/ajax/tickets-kaufen.php?zahlungsart=paypal"
				></script>
			</div>

		</div>
		
	</div>
	
</form>