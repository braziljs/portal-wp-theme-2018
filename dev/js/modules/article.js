define(['disqusLoader', 'prism'], function () {

	'use strict';

	var article = {},
		articleContainer = document.getElementById('article');

	article = {

		init: function () {

			article.loadDisqus();
			article.logoAnim();

		},

		loadDisqus: function () {
			var options = {
			  	scriptUrl: '//braziljs.disqus.com/embed.js',
			  	disqusConfig: function() {
			    	// this.page.title       = 'Page Title';
			    	this.page.title       = articleContainer.dataset.articleTitle;
			    	// this.page.url         = 'https://braziljs.org/blog/playlist-de-videos-para-o-carnaval/';
			    	this.page.identifier = articleContainer.dataset.articleId - 1;
			  	}
			};
			// disqusLoader( '#disqus_thread', options );
		},

		logoAnim: function () {
			setTimeout(function() {
				window.logoAnim('2-3');

				setTimeout(function() {
					window.logoAnim('3-4');
					
					setTimeout(function() {
						window.logoAnim('4-1');

						setTimeout(function() {
							window.logoAnim('1-2');

							setTimeout(function() {
								common.elm.addClass('scale-shadow');
								
							}, 1000);
						}, 1000);
					}, 1000);
				}, 1000);
			}, 2000);

			$('.nav-logo').on('click', function () {
				window.logoAnim('2-3');
			});
		}

	}

	if (articleContainer) {
		article.init();
	}

});
