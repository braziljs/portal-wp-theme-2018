define(function () {

	'use strict';

	var home = {},
			elm  = $('#latest-news-vine'),
			btn  = $('.highlight_button-play'),
			list = $('#card-wrapper-list'),
			api  = 'https://www.alura.com.br/api/cursos-em-destaque';

	home = {

		init: function () {
			home.bindEvents();
		},

		bindEvents: function () {
			var url = elm.attr('data-embed').match(/v=.*/gi)[0].replace('v=', '');
			home.makeIframe(url)

			fetch(api, {
				method: 'GET'
			}).then(function (response) {
				response.json().then(function (data) {
					home.makeCourse(data.cursosEmDestaque);
				});
			}).catch(function (err) {
				console.error('Failed retrieving information', err);
			});
		},

		makeIframe: function (url) {
			btn.click(function () {
				elm.html('<iframe src=https://www.youtube.com/embed/' + url + '?autoplay=1 frameborder="0" allowfullscreen>');
			});
		},

		makeCourse: function (array) {

			array.forEach(function (course) {
				list.append(
					'<li class="courses-list__item">' +
						'<div class="card">' +
							'<div class="card-header">' +
								'<a class="media-wrapper" target="__blank" role="presentation" aria-hidden="true" href="' + course.url + '">' +
									'<img class="media-wrapper__thumb card__thumb" src="' + course.icone + '">' +
								'</a>' +
							'</div>' +
							'<div class="card__content">' +
								'<h3 class="card__title">' +
									'<a href="' + course.url + '">' + course.nome + '</a>' +
								'</h3>' +
							'</div>' +
						'</div>' +
					'</li>'
				);
			});
		}
	}

	home.init();

});