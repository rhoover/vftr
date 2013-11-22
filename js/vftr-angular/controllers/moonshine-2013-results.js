'use strict';

angular.module("vftrApp").controller('MoonshineThirteenCtrl', ['$scope', 'riderjson', function ($scope, riderjson) {
    riderjson.getRiderData(function (data) {
        $scope.riderList = data;
    });
}]);