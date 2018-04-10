(function () {
    angular.module('restaurantApp')
        .controller('tableController', ["$scope", "$rootScope", "$timeout", "$upload", "tableService", "reservationService", "userService", "toaster", function ($scope, $rootScope, $timeout, $upload, tableService, reservationService, userService, toaster) {

            $scope.logged = null;
            $scope.hideSpinner = true;
            $scope.loading = false;
            $scope.pages = [];
            $scope.start = 7;
            $scope.end = 23;
            $scope.hours = [];
            $scope.reservedTables = [];
            $scope.tips = [];
            var currentDate = new Date();
            $scope.currentTime = currentDate.getHours() + ':00';
            //$scope.time = $scope.currentTime;

            //populate hours list
            for (var i = $scope.start; i <= $scope.end; i++) {
                $scope.hours.push(i + ':00');
                $scope.hours.push(i + ':30');
            }

            //set $scope.time to current time
            $scope.time = $scope.currentTime;

            var loadTables = function () {
                tableService.all(1, 20)
                    .success(function (response) {
                        $scope.tables = response.data;

                    })
                    .error(function () {
                        console.log('error');
                    });
            };

            var checkIfLogged = function () {
                userService.check()
                    .success(function (response) {
                        $scope.logged = response.status;
                    });
            };

            //search reservations
            $scope.searchReservations = function (day, month, year, time) {
                $scope.hideSpinner = false;
                $timeout(function () {
                    reservationService.check(day, month, year, time)
                        .success(function (response) {
                            $scope.reservedTables = response.data;
                            $rootScope.tablesNum = response.data.length;
                            $scope.hideSpinner = true;
                        });
                });
                loadTables();
            };

            loadTables();
            checkIfLogged();

            $scope.searchReservations(currentDate.getDate(), currentDate.getMonth() + 1,
                currentDate.getFullYear(), $scope.currentTime);

            $scope.makeReservation = function (tableId, tableNumber, day, month, year, time) {
                if ($scope.logged == 'OK') {
                    reservationService.create(tableId, day, month, year, time)
                        .success(function (response) {
                            if (response.error) {
                                toaster.pop('error', "Sorry about that one customer just could order two tables in one day!");
                            } else {
                                $scope.reservedTables.push(tableId);
                                //raise an event and send it to the root scope
                                $rootScope.$broadcast('reservation:made');
                                toaster.pop('success', '', 'Table' + tableNumber + ' booked for ' + day + '/' + month + '/' + year + ' ' + time);
                            }
                        });
                } else {
                    //alert('You must be logged in to make reservations');
                    toaster.pop('error', "Please login", "You must be logged in to make reservations");
                }
            };

            var layout = function () {
                reservationService.layout()
                    .success(function (response) {
                        $rootScope.image = response.data;
                    })
            };

            layout();

            //datePicker
            $scope.today = function () {
                $scope.dt = new Date();
            };
            $scope.today();

            $scope.clear = function () {
                $scope.dt = null;
            };

            // Disable weekend selection
            // $scope.disabled = function(date, mode) {
            //   return ( mode === 'day' && ( date.getDay() === 0 || date.getDay() === 6 ) );
            // };

            $scope.toggleMin = function () {
                $scope.minDate = $scope.minDate ? null : new Date();
            };
            $scope.toggleMin();

            $scope.open = function ($event) {
                $event.preventDefault();
                $event.stopPropagation();

                $scope.opened = true;
            };

            $scope.dateOptions = {
                formatYear: 'yy',
                startingDay: 1
            };

            $scope.initDate = new Date('2016-15-20');
            $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
            $scope.format = $scope.formats[0];

            //listen to event reservation:deleted raised inside usersController inside method deleteReservation
            $scope.$on('reservation:deleted', function (event) {
                //get the updated date
                $scope.$watch('dt', function (newValue, oldValue) {
                    $scope.dt = newValue;
                });
                //get the updated time
                $scope.$watch('time', function (newValue, oldValue) {
                    $scope.time = newValue;
                });
                $scope.searchReservations($scope.dt.getDate(), $scope.dt.getMonth() + 1, $scope.dt.getFullYear(), $scope.time);
            });

        }]);
})();