'use strict';

angular.module("vftrApp")
    .directive("maps", ["$animate", function ($animate) {
        return {
            restrict: 'A',
            link: function(scope, element, attrs) {
                scope.$watch(attrs.maps, function (newVal) {
                    if (newVal) {
                        $animate.addClass(element, "mapsmove")
                    } else {
                        $animate.removeClass(element, "mapsmove")
                    }
                });
            }
        };
    }]);