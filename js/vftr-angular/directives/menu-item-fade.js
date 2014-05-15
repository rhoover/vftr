'use strict';

angular.module('vftrApp')
    .directive('menuItem', [function () {
        return {
            restrict: 'C',
            link: function(scope, element, attrs) {

                element.bind('mouseenter', function () {
                    element.addClass('hover');
                    element.parent().children().addClass('fade');
                });

                element.bind('mouseleave', function () {
                    element.removeClass('hover');
                    element.parent().children().removeClass('fade');
                });

            }
        };
    }]);