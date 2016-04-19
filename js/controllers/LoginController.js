'use strict';

var app= angular
.module('app.login', ['app.services.login'])
.controller('LoginController', ['$scope','LoginService', function ($scope,LoginService) {	

	$scope.login=function (user) {
		LoginService.login(user);
	}
	
}]);