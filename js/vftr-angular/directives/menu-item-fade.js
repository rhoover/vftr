'use strict';

angular.module('vftrApp')
    .directive('menuItem', [function () {
        return {
            restrict: 'C',
            link: function(scope, element, attrs) {

                element.bind('mouseenter', function () {
                    element.parent().children().addClass('fade');
                    element.addClass('hover');
                });

                element.bind('mouseleave', function () {
                    element.parent().children().removeClass('fade');
                    element.removeClass('hover');
                });

            }
        };
    }]);