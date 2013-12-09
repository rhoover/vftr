'use strict';

angular.module("vftrApp")
    .controller('RootCtrl', ['$scope', function ($scope) {
        $scope.moveMenu = false;
        this.moveMenu = function () {
            $scope.moveMenu = !$scope.moveMenu;
        };
        return $scope.RootCtrl = this;
        // $scope.scroll = 0;
    }]);