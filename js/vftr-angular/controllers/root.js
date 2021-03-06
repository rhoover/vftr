'use strict';

angular.module("vftrApp")
    .controller('RootCtrl', ['$scope', function ($scope) {
        $scope.moveMenu = false;
        this.moveMenu = function () {
            $scope.moveMenu = !$scope.moveMenu;
        };
        $scope.moveMeetingMap = false;
        this.moveMeetingMap = function () {
            $scope.moveMeetingMap = !$scope.moveMeetingMap;
        };
        $scope.moveEnduroMap = false;
        this.moveEnduroMap = function () {
            $scope.moveEnduroMap = !$scope.moveEnduroMap;
        };
        $scope.moveScramblesMap = false;
        this.moveScramblesMap = function () {
            $scope.moveScramblesMap = !$scope.moveScramblesMap;
        };
        return $scope.RootCtrl = this;
    }]);