// JavaScript Document
(function($) {

	$.fn.upload = function(options) {

		options = $.extend({
			callback: function(data, status, xhr) {}
		}, options);

		this.change(function() {

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
					dataType: 'html',
					success: function(data, status, xhr) {

						options.callback(data, status, xhr);

					}
				});

			}

		});

	};

})(jQuery);