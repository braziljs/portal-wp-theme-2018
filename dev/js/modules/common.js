/*global $*/

define(function () {

	'use strict';

	var common = {};
	var elm 	 = $('.nav-logo');
	var body 	 = $('body');
	
	var vd;
	var vdContainer;
	var fullwrapper = $(".full-wrapper");

	common = {

		init: function () {
			common.bindEvent();
			common.initAnim();
			common.initWelcome();
		},
	
		bindEvent: function () {
			window.logoAnim = common.logoAnim;
		},

		logoAnim: function (theme) {
        var defaultTheme;
        var primaryTheme;

				switch (theme) {
					case '1-2':
		        defaultTheme = 'theme-1';
		        primaryTheme = 'theme-2';
		        common.logoAnim();
		      break;

					case '2-1':
		        defaultTheme = 'theme-2';
		        primaryTheme = 'theme-1';
		        common.logoAnim();
		      break;

					case '2-3':
		        defaultTheme = 'theme-2';
		        primaryTheme = 'theme-3';
		        common.logoAnim();
		      break;

					case '3-2':
		        defaultTheme = 'theme-3';
		        primaryTheme = 'theme-2';
		        common.logoAnim();
		       break;

					case '3-4':
		        defaultTheme = 'theme-3';
		        primaryTheme = 'theme-4';
		        common.logoAnim();
		      break;

					case '4-1':
		        defaultTheme = 'theme-4';
		        primaryTheme = 'theme-1';
		        common.logoAnim();
		      break;
				}

        var elm = $('.logo-container');

        if (elm.hasClass(defaultTheme)) {
            elm.removeClass(defaultTheme);
            elm.addClass(primaryTheme);
        } else {
            elm.addClass(defaultTheme);
            elm.removeClass(primaryTheme);
        }
		},

		initAnim: function () {
			$(document).ready(function() {
				var p = new Promise (function (resolve, reject) {
					setTimeout(function() {
						common.logoAnim('3-4');

						setTimeout(function() {
							common.logoAnim('4-1');
							
							setTimeout(function() {
								common.logoAnim('1-2');

								setTimeout(function() {
									common.logoAnim('2-3');
								}, 1000);
							}, 1000);
						}, 1000);
					}, 2000);
				}).then(function () {
					return new Promise(function(resolve) {
						setTimeout(function() {
							// elm.addClass('scale-shadow');
							resolve();
						}, 1000);
					}).then(function () {
						// elm.hover(function() {
						// 	elm.removeClass('scale-shadow');
						// 	common.initAnim();
						// });
					});
				});
			});
		},

		welcome: function () {

			function canPlayVideo () {
				vd.style.visibility = 'visible';
				vd.play();
			}

			function closeVideo () {
				fullwrapper.css({display: 'block'});
				vdContainer.fadeOut('slow');
				window.scrollTo(0,0);
				// localStorage.setItem('hasSeenVideo', 1);
			}
			
			vd.oncanplaythrough = function () {
				$('#start-vine').fadeIn('slow');

				$('#start-vine').click(function () {
					console.log('LOADED')
					canPlayVideo();
				});
			}

			vd.onwaiting = function () {
				console.log('CONEXÃO LENTA');
			}

			vd.onended = function () {
				// video has finished
				closeVideo()
			}

			vdContainer.css({ height: $(window).innerHeight() + 'px' });

			$(window).resize(function(){
				vdContainer.css({ height: $(window).innerHeight() + 'px' });
			});
		},

		initWelcome: function () {
			if (window.innerWidth < 768) {
				$('.full-wrapper').css({display: 'block'});
				
				return;
			}

			if (!localStorage.getItem('hasSeenVideo')) {
				body.append('<div id="brjs-opening-video" class="brjs-opening-video">' +
														'<div class="video-loading-message"><p class="p-1">BEM VINDOS</p> <p class="p-2">A NOVA</p><p class="p-3">BRAZILJS</p></div>' +
														'<video id="main-reborn-vine" controls> <source src=" ' + window.THEME_PATH + '/assets/media/MAIN_1.mp4" type="video/mp4"> </video>' +
														'<button id="start-vine" style="display: none;position: absolute;top: 20px;z-index: 999999; background: white; margin: auto; left: 0; right: 0; width: 100px; height: 50px">START</button>' +
												 '</div>');

				vdContainer = $('#brjs-opening-video')
				vd = vdContainer.find('video')[0];

				common.welcome();
			}
		}
	},

	common.init();

});