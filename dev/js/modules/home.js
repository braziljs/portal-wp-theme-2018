define(function () {

	'use strict';

	var home = {},
		elm = $('#latest-news-vine'),
		btn = $('.highlight_button-play');

	home = {

		init: function () {

			home.bindEvents();
			home.logoAnim();

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

		logoAnim: function () {
			setTimeout(function() {
				window.logoAnim('3-4');

				setTimeout(function() {
					window.logoAnim('4-1');
					
					setTimeout(function() {
						window.logoAnim('1-2');

						setTimeout(function() {
							window.logoAnim('2-3');
						}, 1000);
					}, 1000);
				}, 1000);

			}, 2000);
		}

	}

	home.init();

});