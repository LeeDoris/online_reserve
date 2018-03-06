(function(){
	angular.module('restaurantApp')
		.factory('userService', function($http){
			return{
				reservations: function(){
					return $http.get('api/v1/users/reservations');
				},
				check : function(){
					return $http.get('api/v1/auth');
				}
			}
		})
})();