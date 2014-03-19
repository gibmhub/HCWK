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
        callback	: function(days, hours, minutes, seconds){
        
        }
    });
    
    
    // Kontakt
    
    $('#kontakt_submit').click(function () {
		
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
	});

});