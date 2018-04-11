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
                    tipsVoice();
                },($scope.waitTime - $scope.advance) * 60 * 1000);
                // ($scope.waitTime - $scope.advance) * 60 * 1000
            };

            // tipsQueue();
            var deleteQueue = function () {
                $timeout(function () {
                    reservationService.queueDelete($scope.queued.id)
                        .success(function () {
                            $scope.$broadcast('queue:delete');
                            toaster.pop('success','Now it is your turn!');
                            finishVoice()
                        })
                },$scope.waitTime * 60000)
            };

            var tipsVoice = function (){
                //IE9+,Firefox,Chrome均支持<audio/>
                $('#tips').html('<audio autoplay="autoplay"><source src="Sent.wav"'
                    + 'type="audio/wav"/><source src="Sent.wav" type="audio/mpeg"/></audio>');
            };

            var finishVoice = function (){
                //IE9+,Firefox,Chrome均支持<audio/>
                $('#online').html('<audio autoplay="autoplay"><source src="Online.wav"'
                    + 'type="audio/wav"/><source src="Online.wav" type="audio/mpeg"/></audio>');
            };

            $scope.$on('queue:made', function (event) {
                checkQueue();
            });

            $scope.$on('queue:delete', function (event) {
                checkQueue();
            });

        }]);
})();