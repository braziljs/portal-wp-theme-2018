/*global $*/

define(function () {

	'use strict';

	var common = {};
	var elm = $('.nav-logo');
	var body = $('body');
	var flag = false;

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
			window.initLogo = common.initAnim;
		},

		logoAnim: function (theme) {
			var defaultTheme;
			var primaryTheme;

			switch (theme) {
				case '1-2':
					defaultTheme = 'theme-1';
					primaryTheme = 'theme-2';
					break;

				case '2-1':
					defaultTheme = 'theme-2';
					primaryTheme = 'theme-1';
					break;

				case '2-3':
					defaultTheme = 'theme-2';
					primaryTheme = 'theme-3';
					break;

				case '3-2':
					defaultTheme = 'theme-3';
					primaryTheme = 'theme-2';
					break;

				case '3-4':
					defaultTheme = 'theme-3';
					primaryTheme = 'theme-4';
					break;

				case '4-1':
					defaultTheme = 'theme-4';
					primaryTheme = 'theme-1';
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
			$(document).ready(function () {

				if (flag === true) {
					return;
				} else {
					flag = true;
				}

				var p = new Promise(function (resolve, reject) {
					setTimeout(function () {
						common.logoAnim('3-4');

						setTimeout(function () {
							common.logoAnim('4-1');

							setTimeout(function () {
								common.logoAnim('1-2');

								setTimeout(function () {
									common.logoAnim('2-3');
									flag = false;
								}, 1000);
							}, 1000);
						}, 1000);
					}, 2000);
				}).then(function () {
					return new Promise(function (resolve) {
						setTimeout(function () {
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

			function canPlayVideo() {
				vd.style.visibility = 'visible';
				vd.play();
			}

			$('#skip-intro-btn').click(common.endWelcome).fadeIn();

			vd.oncanplaythrough = function () {
				$('#intro-loading-message').fadeOut('fast');
				$('#start-vine').fadeIn('slow');

				$('#start-vine').click(function () {
					canPlayVideo();
				});
			}

			vd.onwaiting = function () {
				// console.log('SHOULD ALLOW SKIP')
				// $('#skip-intro-btn').click(common.endWelcome).fadeIn();
			}

			vd.onended = function () {
				// video has finished
				common.endWelcome(true)
			}

			vdContainer.css({ height: $(window).innerHeight() + 'px' });

			$(window).resize(function () {
				vdContainer.css({ height: $(window).innerHeight() + 'px' });
			});
		},

		endWelcome: function (done) {
			$('.full-wrapper').css({
				opacity: 1,
				filter: 'none',
				WebkitFilter: 'none'
			});

			if (done) {
				window.scrollTo(0, 0);
				vdContainer.fadeOut('slow');

				setTimeout(function () {
					localStorage.setItem('hasSeenVideo', 1);
					document.body.removeAttribute('data-showing-intro')
					vd.remove();

					common.initAnim();
				}, 1000);
			} else {
				// debugger;
				// common.initAnim('1-2');
			}
		},

		initWelcome: function () {

			if (window.innerWidth < 768) {
				common.endWelcome()
				return;
			}

			if (!localStorage.getItem('hasSeenVideo')) {
				document.body.dataset.showingIntro = 1
				body.append('<div id="brjs-opening-video" class="brjs-opening-video">' +
					'<div class="video-loading-message">A BrazilJS está de cara nova!<br/>Preparamos uma nova experiência para você.</div>' +
					'<video id="main-reborn-vine"> <source src=" ' + window.THEME_PATH + '/assets/media/MAIN_1.mp4" type="video/mp4"> </video>' +
					'<span id="intro-loading-message">loading...</span>' +
					'<span id="skip-intro-btn">Pular intro »</span>' +
					'<button id="start-vine" class="highlight_button-play" title="Avançar"></button>' +
					'</div>');
				
				vdContainer = $('#brjs-opening-video')
				vd = vdContainer.find('video')[0];
				
				common.welcome();
			} else {
				common.endWelcome();
			}
		}
	},

		common.init();

});