/*global $*/
define(function () {

	'use strict';

	var common = {};
	var elm = $('.nav-logo');

	common = {

		init: function () {
			common.bindEvent();
			common.initAnim();
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

					case '3-2':
		        defaultTheme = 'theme-3';
		        primaryTheme = 'theme-2';
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

			var p = new Promise (function (resolve, reject) {
				setTimeout(function() {
					common.logoAnim('3-4');

					setTimeout(function() {
						common.logoAnim('4-1');
						
						setTimeout(function() {
							common.logoAnim('1-2');

							setTimeout(function() {
								common.logoAnim('2-3');
 								resolve("[#DONE!]");
							}, 1000);
						}, 1000);
					}, 1000);
				}, 2000);
			}).then(function () {
				return new Promise(function(resolve) {
					setTimeout(function() {
						elm.addClass('scale-shadow');
						resolve();
					}, 1000);
				}).then(function () {
					elm.hover(function() {
						elm.removeClass('scale-shadow');
						// common.initAnim();
					});
				});
			});
		}
	};

	common.init();

});