$(document).ready(function() {

	$('.delete-collection').on('click', function(event) {
	var r = confirm("Bạn có chắc chắn muốn xóa không ?");
	if (r == false) {
		return false;
	}
	event.preventDefault();
	var id = $(this).attr('collection-id');
	var parent = $(this).parents('tr');
	console.log(id);
	//var token = $(this).data('token');
	$.ajax(
		{
			url: '/admin/collection/delete',
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
