$(document).ready(function() {

	$('.delete-product').on('click', function(event) {
		var r = confirm("Are you sure delete item !");
		if (r == false) {
			return false;
		}
		event.preventDefault();
		var product_id = $(this).attr('product-id');
		var token = $(this).data("token");

		$.ajax(
			{
				url: "/admin/post/delete",
				type: 'GET',
				dataType: "JSON",
				data: {
					"id": product_id,
					"_method": 'DELETE',
					"_token": token,
				},
				success: function ()
				{
					console.log("it Work");
					$('.item'+product_id).remove();
				}
			});
	});


	//Change status Product
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
	$('.show-modal').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		var url = $(this).attr('url');

		$.ajax({
			url: url,
			type: 'GET',
		})
		.done(function(data) {
			console.log(data);
			$('#largeModalLabel').text(data.title);
			$('#category').text('Danh mục : '+data.category.name);
			$('#summary').text(data.summary);
			$('#content').html(data.description);

		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		

	});



});
