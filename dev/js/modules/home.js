define(function () {

	'use strict';

	var home = {},
		elm = $('#latest-news-vine'),
		btn = $('.highlight_button-play');

	home = {

		init: function () {

			home.bindEvents();

			home.brjsReborn();

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

		
			  

			// setTimeout(function() {

			// 	$('#brjs-opening-video').css({opacity: 0});
			// 	$('body').attr("data-vine", false);
			// }, 10000)
		// }
	}

	home.init();

});