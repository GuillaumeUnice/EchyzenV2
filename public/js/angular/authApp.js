
(function() {

    'use strict';

    angular
        .module('authApp', ['ngRoute', 'ngResource', 'satellizer'], function($interpolateProvider) {
				$interpolateProvider.startSymbol('<%');
                $interpolateProvider.endSymbol('%>');
        })
        .config(function($authProvider) {

            // Satellizer configuration that specifies which API
            // route the JWT should be retrieved from
            $authProvider.loginUrl = 'http://localhost/Echyzen/public/authenticate';


        });
})();
