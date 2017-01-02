$(document).ready(function() {

	$('.delete-ticket').on('click', function(event) {
		var r = confirm("Are you sure delete ticket ?");
		if (r == false) {
			return false;
		}
		event.preventDefault();
		var id = $(this).attr('ticket-id');
		var parent = $(this).parents('tr');
		//var token = $(this).data('token');
		$.ajax(
			{
				url: '/admin/ticket/delete',
				type: 'GET',
				dataType: 'JSON',
				data: {
					"id": id
				},
				success: function(){
					parent.remove();
				}
			});
	});

});
