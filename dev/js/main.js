/*global $, require, FastClick*/
(function () {

	'use strict';

    var PUBLIC = {},
        PRIVATE = {}

    PRIVATE.init = function () {

        //configure our requireJS paths
        require.config({
            paths: {
                'common': 'modules/common',
                'home': 'modules/home',
                'skipLinks': 'modules/skip-links',
                'navigation': 'modules/navigation',
                'article': 'modules/article',
                'conf': 'modules/conf',
                'disqusLoader': 'plugins/disqusloader',
                'confSchedule': 'modules/conf-schedule',
                'prism': 'plugins/prism',
                'trap': 'plugins/trap'
            }
        });

        PUBLIC.init();

    };

	PUBLIC.init = function () {

        PUBLIC.common();

        PUBLIC.home();
		
        PUBLIC.skipLinks();

        PUBLIC.navigation();

        PUBLIC.article();

        PUBLIC.confSchedule();

        PUBLIC.conf();

	};

    PUBLIC.common = function () {
        var common = document.getElementsByClassName('full-wrapper')[0];

        if (common) {
            require(['common']);
        }
    }

    PUBLIC.home = function () {

        var main = document.getElementById('home');

        if (main) {
            require(['home']);
        }

    };    

    PUBLIC.skipLinks = function () {

        var skipLinksContainer = document.getElementById('js-skip-links');

        if (skipLinksContainer) {
            require(['skipLinks']);
        }

    };

    PUBLIC.navigation = function () {

        var navigationContainer = document.getElementById('js-navigation-wrapper');

        if (navigationContainer) {
            require(['navigation']);
        }

    };

    PUBLIC.article = function () {

        var articleContainer = document.getElementById('article');

        if (articleContainer) {
            require(['article'])
        }

    };

    PUBLIC.confSchedule = function () {

        var scheduleContainer = document.getElementById('js-schedule-container');

        if (scheduleContainer) {
            require(['confSchedule'])
        }

    };

    PUBLIC.conf = function () {

        var confPageContainer = document.getElementById('js-conf-page');
        
        if (confPageContainer) {
            require(['conf'])
        }

    };

    return PRIVATE.init();
})();