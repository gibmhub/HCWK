$(function() {

	
	// SVG Fallback
	
	if (!Modernizr.svg) {
		$("img[src$='.svg']").attr("src", function(i, val) {
			return val.replace('.svg', '.png');
		});
	}


    // Countdown

    var ts = new Date(2014, 4, 8, 1, 0, 0);
    var in_future = true;

    if((new Date()) > ts){
        // TODO: do sth else
        //ts = (new Date()).getTime() + 10*24*60*60*1000;
        in_future = false;
    }

    $('#countdown').countdown({
        timestamp	: ts,
        callback	: function(){
        
        }
    });
    
    
    // Ticket-Registrierung
    
    $(".validate-registrierung").jqBootstrapValidation({
		submitSuccess: function($form, event) {
			event.preventDefault(); // prevent default submit behaviour
			// get values from form
			var name = $("input#tickets-name").val();
			var email = $("input#tickets-email").val();
			var ticketcode = $("input#tickets-code").val();
			$.ajax({
				url: "/ajax/tickets-registrieren.php",
				type: "GET",
				data: {name: name, email: email, ticketcode: ticketcode},
				cache: false,
				success: function(data) {
					if (data=='success') {
		                // Success message
						$('#success').html('<div class="alert alert-success">');
	 					$('#success > .alert-success').html('<button class="close" type="button" data-dismiss="alert">×').append('</button>');
	 					$('#success > .alert-success').append('<strong>Vielen Dank! Ihr Ticket wurde registriert.</strong> Sie erhalten in wenigen Minuten eine Email zur Bestätigung. Um die angegebenen Daten zu korrigieren, können Sie die Registrierung erneut durchführen. Bitte wenden Sie sich bei Fragen an unseren <a href="/kontakt">Kontakt</a>.');
	 					$('#success > .alert-success').append('</div>');
					} else {
						// Fail message
						$('#success').html('<div class="alert alert-danger">');
						$('#success > .alert-danger').html('<button class="close" type="button" data-dismiss="alert">×').append( "</button>");
						if (data=='Invalid arguments provided') {
							$('#success > .alert-danger').append('<strong>Ungültige Eingaben…</strong> Bitte füllen Sie die Felder aus oder treten Sie mit uns in <a href="/kontakt">Kontakt</a>.');
						} else if (data=='Invalid ticket code') {
							$('#success > .alert-danger').append('<strong>Dieser Ticket-Code existiert nicht…</strong> Bitte senden treten Sie mit uns in <a href="/kontakt">Kontakt</a>, falls ein Fehler vorliegt.');
						} else {
							$('#success > .alert-danger').append('<strong>Der Server antwortet nicht…</strong> Bitte senden treten Sie mit uns in <a href="/kontakt">Kontakt</a>.');
						}
						$('#success > .alert-danger').append('</div>');

					}
				},
				error: function(data) {
					// Fail message
					$('#success').html('<div class="alert alert-danger">');
					$('#success > .alert-danger').html('<button class="close" type="button" data-dismiss="alert">×').append( "</button>");
					$('#success > .alert-danger').append('<strong>Der Server antwortet nicht…</strong> Bitte senden treten Sie mit uns in <a href="/kontakt">Kontakt</a>.');
					$('#success > .alert-danger').append('</div>');					 
				},
			});
			//clear all fields
			$('#tickets-form').trigger("reset");
			$('#registrierung-form').trigger("reset");

		}
	});
	
	
	// Ticketverkauf
	
	// switch price
	$('input[name="tickets-type"]').on('change', function(){
		var price = $('input[name="tickets-type"]:checked').attr('data-price');
		$('#paypal input[name="amount"]').val(price);
	});
	// display destination
	$('input[name="tickets-zahlungsart"]').on('change', function(){
		var type = $('input[name="tickets-zahlungsart"]:checked').val();
		var dest = '';
		if (type=='paypal') {
			dest = 'paypal.com';
		} else if (type=='sofortueberweisung') {
			dest = 'sofort.com';
		}
		$('#ticketverkauf-submit-desc').addClass('show-dest').attr('data-content', 'Sie werden zu '+dest+' weitergeleitet.');
	});

    $(".validate-ticketverkauf").jqBootstrapValidation({
		submitSuccess: function($form, event) {
			event.preventDefault(); // prevent default submit behaviour
			// get values from form
			var name = $("input#tickets-name").val();
			var email = $("input#tickets-email").val();
			var zahlungsart = $('input[name="tickets-zahlungsart"]:checked').val();
			var tickettype = $('input[name="tickets-type"]:checked').val();
			if (name==''||email==''||zahlungsart==''||tickettype=='') {
				// Fail message
				$('#success').html('<div class="alert alert-danger">');
				$('#success > .alert-danger').html('<button class="close" type="button" data-dismiss="alert">×').append( "</button>");
				$('#success > .alert-danger').append('<strong>Ungültige Eingaben…</strong> Bitte füllen Sie die Felder aus oder treten Sie mit uns in <a href="/kontakt">Kontakt</a>.');
				$('#success > .alert-danger').append('</div>');
				return;
			}
			if (zahlungsart=='paypal') {
				$('form.paypal-button input[name=custom]').val(name+'&&'+email+'&&'+tickettype);
				$('form.paypal-button').submit();
			} else if (zahlungsart=='sofortueberweisung') {
				window.location.replace("/ajax/tickets-kaufen.php?name="+name+"&email="+email+"&zahlungsart="+zahlungsart);
			}
		}
	});	
    
    
    // Kontakt
        
    $("#kontakt-form .validate").jqBootstrapValidation({
		submitSuccess: function($form, event) {
			event.preventDefault(); // prevent default submit behaviour
			// get values from form
			var name = $("input#kontakt-name").val();
			var email = $("input#kontakt-email").val();
			var message = $("textarea#kontakt-msg").val();
			$.ajax({
				url: "/ajax/contact-form-submitting.php",
				type: "POST",
				data: {name: name, email: email, msg: message},
				cache: false,
				success: function(data) {
					if (data=='success') {
		                // Success message
						$('#success').html('<div class="alert alert-success">');
	 					$('#success > .alert-success').html('<button class="close" type="button" data-dismiss="alert">×').append('</button>');
	 					$('#success > .alert-success').append('<strong>Ihre Nachricht wurde gesendet. </strong>');
	 					$('#success > .alert-success').append('</div>');
	 
						//clear all fields
						$('#kontakt-form').trigger("reset");						
					} else {
						// Fail message
						$('#success').html('<div class="alert alert-danger">');
						$('#success > .alert-danger').html('<button class="close" type="button" data-dismiss="alert">×').append( "</button>");
						if (data=='Invalid arguments provided') {
							$('#success > .alert-danger').append('<strong>Ungültige Eingaben…</strong> Bitte füllen Sie die Felder aus oder senden Sie stattdessen eine Email an <a href="mailto:info@hcwk.de">info@hcwk.de</a>.');
						} else {
							$('#success > .alert-danger').append('<strong>Der Server antwortet nicht…</strong> Bitte senden Sie stattdessen eine Email an <a href="mailto:info@hcwk.de">info@hcwk.de</a>.');
						}
						$('#success > .alert-danger').append('</div>');

				        //clear all fields
						$('#kontakt-form').trigger("reset");
					}
				},
				error: function(data) {
					// Fail message
					$('#success').html('<div class="alert alert-danger">');
					$('#success > .alert-danger').html('<button class="close" type="button" data-dismiss="alert">×').append( "</button>");
					$('#success > .alert-danger').append('<strong>Der Server antwortet nicht…</strong> Bitte senden Sie stattdessen eine Email an <a href="mailto:info@hcwk.de">info@hcwk.de</a>.');
					$('#success > .alert-danger').append('</div>');
					 
			        //clear all fields
					$('#kontakt-form').trigger("reset");
				},
           });
		}
	});
 
/*	$("a[data-toggle=\"tab\"]").click(function(e) {
		e.preventDefault();
		$(this).tab("show");
	});*/
 
/*When clicking on Full hide fail/success boxes */
/*$('#name').focus(function() {
     $('#success').html('');
  });*/
  
});