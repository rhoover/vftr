'use strict';

angular.module('vftrApp')
    .directive('scrollPosition', ['$window', function ($window) {
        // Runs during compile

        return function(scope, element, attrs) {
                var windowEl = angular.element($window);
                scope[attrs.scrollPosition] = 0;
                var headerPosition = element[0].getBoundingClientRect();
                windowEl.bind('scroll', function() {
                    scope.$apply(function() {
                        scope[attrs.scrollPosition] = headerPosition.top;
                    });
                });
            }
        // return {
            // name: '',
            // priority: 1,
            // terminal: true,
            // scope: {}, // {} = isolate, true = child, false/undefined = no change
            // cont­rol­ler: function($scope, $element, $attrs, $transclue) {},
            // require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
            // restrict: 'A', // E = Element, A = Attribute, C = Class, M = Comment
            // template: '',
            // templateUrl: '',
            // replace: true,
            // transclude: true,
            // compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
            // link: function(scope, element, attrs) {
            //     var windowEl = angular.element($window);
            //     windowEl.on('scroll', function() {
            //         scope.$apply(function() {
            //             scope[attrs.scrollPosition] = windowEl.scrollTop();
            //         });
            //     });
            // }
        // };
    }]);