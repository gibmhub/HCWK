$(function(){

    var root_url = "http://www.heidelberger-symposium.de/";

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
    
    
    // Kontakt
        
    $(".validate").jqBootstrapValidation({
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
					$('#success > .alert-danger').append(data+'<strong>Der Server antwortet nicht…</strong> Bitte senden Sie stattdessen eine Email an <a href="mailto:info@hcwk.de">info@hcwk.de</a>.');
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
  
  
    
/*    $('#kontakt-submit').click(function () {
    
	    window.console&&console.log('stuff');
		
		var name = $('#kontakt_name');
		var email = $('#kontakt_email');
		var msg = $('#kontakt_msg');

		var button = $(this);
		$.ajax({
			type: 'POST',
			url: root_url+'config/contact_form_submitting.php',
			data: {
    			'name': name.val(),
    			'email': email.val(),
    			'msg': msg.val()
			},
			success: function (html) {
    			console.log(html);
    			if (html=='invalid_name') {
        			$(name).addClass('invalid');
    			} else {
        			$(name).removeClass('invalid');
    			}
    			if (html=='invalid_email') {
        			$(email).addClass('invalid');
    			} else {
        			$(email).removeClass('invalid');
    			}
    			if (html=='invalid_msg') {
        			$(msg).addClass('invalid');
    			} else {
        			$(msg).removeClass('invalid');
    			}
				if (html=='success') {
					window.location = root_url;
				}
			}
		});
	});*/

});