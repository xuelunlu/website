// JavaScript Document

$(document).ready(function() {

	$("#contact").ajaxForm({

		dataType: 'json',

		beforeSerialize: function($form, options) {

			$('#form-alert').hide();

		},
		success: function(data, status, xhr, $form) {

			if (data.status == 0) {

				$('#form-alert').html(data.errors);

				$('#form-alert').show();

			} else {

				location.href = site_url + 'manage/account';

			}

		}

	});

});