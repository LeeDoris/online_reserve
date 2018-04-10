(function(){
	angular.module('restaurantApp')
		.controller('usersController', ["$scope", "$rootScope", "userService", "reservationService", "toaster", function($scope, $rootScope, userService, reservationService, toaster){

			$scope.editUserIndex = null;
			$scope.loading = false;

			var getUserReservations = function(){
				userService.reservations()
					.success(function(response){
						$scope.userReservations = $.makeArray(response.data);
					});
			};

			getUserReservations();

			$scope.deleteReservation = function(id,index){
				reservationService.delete(id);
				$rootScope.$broadcast('reservation:deleted');
				$scope.userReservations.splice(index,1);
			};

			//listen to event reservation:made raised inside tablesController inside method makeReservation
			$scope.$on('reservation:made', function(event){
				getUserReservations();
			});

		}]);
})();