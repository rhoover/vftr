'use strict'

//inspired by http://jsfiddle.net/eTTZj/30/
angular.module('vftrApp')
    .directive('fixedHeader', ['$window', function ($window) {
        return function(scope, element, attrs) {
                angular.element($window).bind('scroll', function() {
                    if (this.pageYOffset >= 75) {
                        scope.fixMe = true;
                    } else {
                        scope.fixMe = false
                    }
                    scope.$apply();
                });
            };

    }]);