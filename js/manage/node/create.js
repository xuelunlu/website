// JavaScript Document

$(document).ready(function() {

	$("#images").upload({
		callback: function(data, status, xhr) {

			$("#files-area").append(data);

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