// JavaScript Document

$(document).ready(function() {

	$("#images").change(function() {

		if (this.files.length > 0) {

			var form_data = new FormData();

			for (var i = 0; i < this.files.length; i++) {

				form_data.append('files[]', this.files[i]);

			}

			$.ajax({
				url: site_url + 'upload',
				type: 'POST',
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				dataType: 'json',
				success: function(data, status, xhr) {

					console.log(data);
					console.log(status);
					console.log(xhr);

				}
			});

		}

	});

	$("#create-node-form").ajaxForm({

		dataType: 'json',

		beforeSerialize: function($form, options) {

			$('#form-alert').hide();

		},
		success: function(data, status, xhr, $form) {

			if (data.status == 0) {

				$('#form-alert').html(data.errors);

				$('#form-alert').show();

			} else {

				location.href = site_url + 'manage/node';

			}

		}

	});

});