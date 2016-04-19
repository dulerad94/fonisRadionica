var app=angular.module('app', 
	[
	'ngRoute',
	'ngMaterial',
	'ngAnimate',
	'ngAria',


	'app.login',
	'app.signup'




	])


	


	.config(['$routeProvider','$mdThemingProvider', function ($routeProvider,$mdThemingProvider) {

		$mdThemingProvider.theme('docs-dark', 'default')
      	.primaryPalette('indigo')
      	.dark();

  		

		$routeProvider

		.when('/login',{
			templateUrl:'views/login.html',
			controller:'LoginController'
		})

		.when('/signup',{
			templateUrl:'views/about.html',
			controller:'AboutController'
		})

		.otherwise({ redirectTo: '/login' });
	}]);