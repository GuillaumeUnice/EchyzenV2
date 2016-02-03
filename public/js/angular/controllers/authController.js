(function() {

    'use strict';

    angular
        .module('authApp')
        .controller('AuthController', AuthController);


    function AuthController($scope, $rootScope, $http, $auth) {
		$scope.username= "echyzen";
		$scope.password= "azerty";
		
		/*            var credentials = {
                username: $auth.username,
                password: $auth.password
            }*/
		   /* $auth.login(credentials).then(function(data) {
					alert('ok');
                // If login is successful, redirect to the users state
               // $state.go('users', {});
            });*/
        //var vm = this;
		
		$scope.loginError = false;
        $scope.loginErrorText;
            
        $scope.login = function() {
			
            var credentials = {
                username: $scope.username,
                password: $scope.password
            }
            
            // Use Satellizer's $auth service to login
            $auth.login(credentials).then(function(data) {
			
				$scope.username="";
				$scope.password="";
				//alert(data.data.token);
				//console.log(data);
				return $http.get('http://localhost/Echyzen/public/authenticate/user?token=' + data.data.token);
			}, function(error) {
			
                $scope.loginError = true;
                $scope.loginErrorText = error.data.error;

            // Because we returned the $http.get request in the $auth.login
            // promise, we can chain the next promise to the end here
            }).then(function(response) {

                // Stringify the returned data to prepare it
                // to go into local storage
                var user = JSON.stringify(response.data.user);

                // Set the stringified user data into local storage
                localStorage.setItem('user', user);

                // The user's authenticated state gets flipped to
                // true so we can now show parts of the UI that rely
                // on the user being logged in
                $rootScope.authenticated = true;

                // Putting the user's data on $rootScope allows
                // us to access it anywhere across the app
                $rootScope.currentUser = response.data.user;

                // Everything worked out so we can now redirect to
                // the users state to view the data
                //$state.go('users'); todo, : faire un refresh de la page
            });
            
        }

    }

})();
