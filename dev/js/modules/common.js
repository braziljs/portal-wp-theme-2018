/*global $*/
define(function () {

	'use strict';

	var common = {
		elm: null
	};

	common = {

		init: function () {
			common.bindEvent();
		},
	
		bindEvent: function () {
			window.logoAnim = common.logoAnim;
		},

		logoAnim: function (theme) {
      	
      	var elm = $('.nav-logo');

        var defaultTheme;
        var primaryTheme;

        console.log(theme)

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
		}
	};

	common.init();

});