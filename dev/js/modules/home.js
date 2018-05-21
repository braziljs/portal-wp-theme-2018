define(function () {

	'use strict';

	var home = {},
		elm = $('#latest-news-vine'),
		btn = $('.highlight_button-play');

	home = {

		init: function () {

			home.bindEvents();

		},

		bindEvents: function () {

			var url = elm.attr('data-embed').match(/v=.*/gi)[0].replace('v=', '');
			home.makeIframe(url)
		},

		makeIframe: function (url) {
			btn.click(function () {
				elm.html('<iframe src=https://www.youtube.com/embed/'+ url +'?autoplay=1 frameborder="0" allowfullscreen>');
			});
		},

	}

	home.init();

});