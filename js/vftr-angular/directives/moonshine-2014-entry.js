'use strict'

angular.module('vftrApp')
    .directive('moonshine2014entry', [function (){

    return {
        // name: '',
        // priority: 1,
        // terminal: true,
        // scope: {}, // {} = isolate, true = child, false/undefined = no change
        controller: function ($scope) {
            $scope.master = {};
            $scope.update = function (user) {
                $scope.master = angular.copy(user);
            };
        },
        // require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
        restrict: 'C', // E = Element, A = Attribute, C = Class, M = Comment
        template:
        '<div class="ms-2014-entry-input">' +
            '<form novalidate class="ms-2014-entry-form">' +
                '<p>Please Enter Information Here <span>(All Fields Are Required)</span>:</p>' +
                'First Name: <input type="text" ng-model="user.firstname" />' +
                'Last Name: <input type="text" ng-model="user.lastname" /><br />' +
                'Address: <input type="text" ng-model="user.address" /><br />' +
                'City: <input type="text" ng-model="user.city" />' +
                'State: <input type="text" ng-model="user.state" />' +
                'Zip Code: <input type="text" ng-model="user.zip" /><br />' +
                'Date of Birth: <input type="text" ng-model="user.dob" />  (format: mm/dd/yyyy as 03/26/1981<br />' +
                'AMA Number: <input type="text" ng-model="user.ama" />Expires: <input type="text" ng-model="user.amaexpires" />  (format: mm/dd/yyyy as 03/26/1981<br />' +
            '</form>' +
        '</div>' +
        '<div class="ms-2014-entry-print">' +
            '<p>Below Is Your Printable Entry:</p>' +
            '<h3 class="ms-2014-entry-header">2014 Valley Forge Trail Riders Moonshine Enduro Entry & Release</h3><br />' +
            '<p>Full Name: <span>{{user.firstname}} {{user.lastname}}</span></p>' +
            '<p>Address: <span>{{user.address}}, {{user.city}}, {{user.state}}  {{user.zip}}</span></p>' +
        '</div>',
        // templateUrl: '',
        // replace: true,
        // transclude: true,
        // compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
        // link: function($scope, iElm, iAttrs, controller) {

        // }
    };
}]);