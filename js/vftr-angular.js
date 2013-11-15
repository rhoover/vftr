"use strict";

angular.module('vftrApp', ['ngRoute', 'ngAnimate', 'ngTouch']),
    // .config(['$routeProvider', function ($routeProvider) {
    //     $routeProvider
            // .when('/', {
            //     templateUrl: 'main.html'
            //     })
            // .otherwise({
            //     redirectTo: '/'
            // });
    // }]),

// Controllers

    angular.module("vftrApp").controller('RootCtrl', ['$scope', function ($scope) {
        $scope.moveMenu = false;
        this.moveMenu = function () {
            $scope.moveMenu = !$scope.moveMenu;
        };
        return $scope.AppCtrl = this;
    }]),

// Directives

    //Move Menu For Mobile
    angular.module("vftrApp").directive("nav", ["$animate", function ($animate) {
        return {
            restrict: 'A',
            link: function(scope, element, attrs) {
                scope.$watch(attrs.nav, function (newVal) {
                    if (newVal) {
                        $animate.addClass(element, "navmove")
                    } else {
                        $animate.removeClass(element, "navmove")
                    }
                });
            }
        };
    }]),

    //Change BG
    angular.module('vftrApp').directive('background', [ function () {
        return {
            restrict: 'A',
            link: function (scope, element, attrs) {
            //Responsive Image Solution
            //Inspired by: http://tech.particulate.me/javascript/2013/10/10/how-to-conveniently-check-for-responsive-breakpoints-in-javascript/
                var result = getComputedStyle(element[0], ':after').content;
                result = result.replace(/"/g,''); //Because Firefox keeps quotes from content
                console.log(result);
                switch (result) {
                    case "phone" :
                    element.addClass("bg-small");
                    break;
                    case "tablet" :
                    element.addClass("bg-medium");
                    break;
                    case "small-desktop" :
                    element.addClass("bg-small-desktop");
                    break;
                    case "large-desktop" :
                    element.addClass("bg-large-desktop");
                    break;
                }
            }
        };
    }]),

    //Mobile Back Button
    angular.module('vftrApp').directive('backbutton', [function () {
        return {
            restrict: 'A',
            link: function (scope, element, attrs) {
                element.bind('click', goBack);
                function goBack() {
                    history.back();
                    scope.$apply();
                };
            }
        };
    }]);