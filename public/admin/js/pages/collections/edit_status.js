$(document).ready(function() {
	$('.edit-status').on('change', function(event) {
		event.preventDefault();
		/* Act on the event */

		var url = $('option:selected', this).attr('href');
        var status = $('option:selected', this).attr('value');

        $.ajax({
        	url: url,
        	type: 'GET',
        	dataType: 'json',
        	data: {'status': status},
        })
        .done(function() {
        	console.log("success");
        })
        .fail(function() {
        	console.log("error");
        })
        .always(function() {
        	console.log("complete");
        });
        
	});
	// Event ajax loading

});
