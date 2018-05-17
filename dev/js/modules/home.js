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

		brjsReborn: function () {
			var vdContainer = $('#brjs-opening-video')
			if (vdContainer) {

				var vd = vdContainer.find('video')[0]

				if (!vd) {
					return
				}

				var allowedVideoToPlay = 0
				function canPlayVideo () {
					allowedVideoToPlay++

					if (allowedVideoToPlay >1) {
						// both animation and buffer have ended
						vd.style.visibility = 'visible'
						vd.play()
					}
				}
				function closeVideo () {
					vdContainer.fadeOut('slow');
					window.scrollTo(0,0)
					document.body.dataset.vine = 0
					localStorage.setItem('hasSeenVideo', 1)
				}
				
				vd.oncanplaythrough = function () {
					// video has buffered enought
					canPlayVideo()
				}
				vd.onended = function () {
					// video has finished
					closeVideo()
				}
				setTimeout(function () {
					canPlayVideo()
				}, 4000);

				vdContainer.css({ /* width: $(window).innerWidth() + 'px',*/ height: $(window).innerHeight() + 'px' });
				$(window).resize(function(){
					vdContainer.css({ /* width: $(window).innerWidth() + 'px',*/ height: $(window).innerHeight() + 'px' });
				});
			}
			  

			// setTimeout(function() {

			// 	$('#brjs-opening-video').css({opacity: 0});
			// 	$('body').attr("data-vine", false);
			// }, 10000)
		}
	}

	home.init();

});