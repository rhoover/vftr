'use strict';

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
}]);