(function(){
    angular.module('restaurantApp')
        .controller('queueController', ["$scope", "$rootScope", "$timeout", "reservationService", "toaster", function($scope, $rootScope, $timeout, reservationService, toaster){

            $scope.logged = null;
            $scope.loading = false;

            var checkQueue = function () {
                $timeout(function () {
                    reservationService.queueCheck()
                        .success(function (response) {
                            if (typeof(response.data) == 'undefined'){
                                $scope.isQueue = 'NO';
                            } else {
                                $scope.isQueue = 'YES';
                                $scope.queued = response.data;
                            }
                        })
                },500)
            };

            checkQueue();

            $scope.makeQueue = function () {
                reservationService.queue()
                    .success(function (response) {
                        $scope.waitTime = response.wait_time;
                        $scope.advance = response.advance;
                        $rootScope.$broadcast('queue:made');
                        toaster.pop('success', "You have queue success for hotpot hero!");
                        tipsQueue();
                        deleteQueue();
                    });
            };

            var tipsQueue = function () {
                $timeout(function () {
                    toaster.pop('success', "It will be 2 minutes that you should go to restaurant as soon as possible!", "",)
                },($scope.waitTime - $scope.advance) * 60 * 1000);
                // ($scope.waitTime - $scope.advance) * 60 * 1000
            };

            // tipsQueue();
            var deleteQueue = function () {
                $timeout(function () {
                    reservationService.queueDelete($scope.queued.id)
                        .success(function () {
                            $scope.$broadcast('queue:delete')
                        })
                },$scope.waitTime * 60000)
            };

            $scope.$on('queue:made', function (event) {
                checkQueue();
            });

            $scope.$on('queue:delete', function (event) {
                checkQueue();
            });

        }]);
})();