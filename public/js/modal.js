//alert('http://localhost/Echyzen/public' + laroute.route('upload_image'));
jQuery(document).ready(function ($) {
var test = false;
	$('#my_modal').delegate('.ajax_form','submit',function(e) {
   // $('.ajax_form').submit (function(e) {
		// empecher la soumission du submit
		e.preventDefault();

		$('input+small').text('');
		$('input').parent().removeClass('has-error');

		// pour pouvoir selectionner plus facilement les attr du form
		var $this = $(this);

		var formdata = $($this).serialize();
		$.ajax({
			url: $this.attr('action'),
			type: $this.attr('method'),
			data: formdata,
			dataType: "json",
			success: function(data) {
				$(".sent-bg").addClass('sent-bg_success');
				$('#myModal').modal('hide');
				// create the notification
				new NotificationFx({
					message : data.success,
					layout : 'other',
					effect : 'boxspinner',
					ttl : 9000,
					type : 'success'// notice, warning or error
				}).show();

			},
			error: function (data) {
				$(".sent-bg").addClass('sent-bg_error');
				var errors = $.parseJSON(data.responseText);

				$.each(errors, function (key, value) {
						var input = '#formRegister input[name=' + key + ']';
						$(input + '+small').text(value);
						$(input).parent().addClass('has-error');
				});
			}
		});

	});
	$('.ajax_modal').click(function(e) {
		// empecher la soumission du submit
		e.preventDefault();

	   $.ajax({
			type: 'GET',
			url: $(this).attr('href'),
			timeout: 4000,
			success: function (data) {
				$('#my_modal').html(data);
				$('#myModal').modal();
			},
			error: function () {
			   // create the notification
				new NotificationFx({
					message : 'La requête n\'a pas abouti',
					layout : 'other',
					effect : 'boxspinner',
					ttl : 9000,
					type : 'error'
				}).show();
			}
		});
	});
});