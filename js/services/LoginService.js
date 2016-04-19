'use strict'

angular 

	.module('app.services.login',[])
	.factory('LoginService', ['$location','$http', function($location,$http){
		return{

			login:function(user){
				var $promise= $http.post('login.php',user);
				$promise.then(function(msg){
					if(msg.data=="success")
						console.log('success login');
					else
						console.log('error login');
				});
			}
			
		};
	}])