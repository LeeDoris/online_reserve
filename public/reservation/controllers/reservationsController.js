(function(){
	angular.module('restaurantApp')
		.controller('reservationsController', ["$scope", "reservationService", function($scope, reservationService){

			$scope.pages = [];
			$scope.editReservationIndex = null;
			$scope.loading = false;

			$scope.deleteReservation = function(id, index){
				reservationService.delete(id)
					.success(function(response){
						$message = response.data;
						toaster.pop('success', "", $scope.message);
					});
				$scope.reservations.splice(index,1);
			}

			$scope.showForm = false;

			$scope.toggleForm = function(){
				$scope.showForm = !$scope.showForm;
			}

			$scope.updateReservation = function(id, newUser, newUsername, newTable, newStart, newEnd, active){
				$scope.loading = true;
				reservationService.update(id, newUsername, newTable, newStart, newEnd, active)
					.success(function(response){
						$scope.message = response.data;
						toaster.pop('success', "", $scope.message);
					})
				$scope.showForm = false;
				console.log(newStart);
				$scope.reservations.splice($scope.editReservationIndex,1); //remove updated reservation
				var newReservation = {user:newUser, username:newUsername, table:newTable, reservation_start:{date:newStart}, reservation_end:{date:newEnd}, active:active};
				$scope.reservations.splice($scope.editReservationIndex,0, newReservation); //push back the updated reservation
				console.log($scope.reservations);
				$scope.loading = false;
			}

			$scope.editReservation = function(id, index) {
				$scope.showForm = true;
				$scope.reservationId = id;
				$scope.loading = true;
				$scope.editReservationIndex = index;
				//$scope.getTableList();
				console.log($scope.tableList);
				reservationService.show(id)
					.success(function(response){
						console.log(response.data.table_number);
						$scope.newUser = response.data.user;
						$scope.newUsername = response.data.username;										
						$scope.newTable = response.data.table_number;		
						$scope.newStart = response.data.reservation_start.date;		
						$scope.newEnd = response.data.reservation_end.date;		
						$scope.newActive = response.data.active;		
						$scope.loading = false;
					});				 
			}	

					
		}]);
})();