define(function () {

	'use strict';

	var home = {},
		elm = $('#latest-news-vine');

	home = {

		init: function () {

			home.bindEvents();

		},

		bindEvents: function () {

			var url = elm.attr('data-embed').match(/v=.*/gi)[0].replace('v=', '');

			
			console.log(elm);
		}
	}

	home.init();

});