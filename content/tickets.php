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
	
	<div class="row">
	
		<div class="col-sm-6">
			
			<p>Haben Sie bereits ein Ticket? Dann geben Sie bitte hier Ihren Ticket-Code ein.</p>
			
			<div class="form-group control-group">		
				<div class="col-xs-12 controls">
		    		<input id="tickets-code" type="number" class="form-control validate-registrierung" placeholder="Ticket-Code" required data-validation-required-message="Bitte geben Sie Ihren Ticket-Code ein" data-validation-number-message="Bitte geben Sie einen gültigen Ticket-Code ein" minlength="6" maxlength="6" data-validation-maxlength-message="Bitte geben Sie einen gültigen Ticket-Code ein" data-validation-minlength-message="Bitte geben Sie einen gültigen Ticket-Code ein">
				</div>
			</div>

			<button id="registrierung-submit" type="submit" class="btn btn-primary pull-right">Registrieren!</button>			
		</div>
		
		<div class="col-sm-6">
		
			<p>… oder wählen Sie eine Zahlungsart zum Online-Kauf eines Tickets.</p>
		
			<div class="form-group control-group">
				<div class="col-xs-12 controls">
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

		</div>
		
	</div>
	
</form>