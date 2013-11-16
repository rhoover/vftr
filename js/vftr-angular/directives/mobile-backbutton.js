'use strict';

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