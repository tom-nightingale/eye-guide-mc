
(function ($) {
	"use strict";

	// add all of your code within here, not above or below
	$(function () {
		$('.hf-form-178').on('hf-submit', function(e) {
			gtag('event', 'conversion', {'event_category': 'contact form','event_action': 'Send Form','event_label': 'Successful contact form Enquiry'});
		});
	});

}(jQuery));