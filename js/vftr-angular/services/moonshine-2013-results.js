'use strict';

angular.module('vftrApp')
    .factory('riderjson', ['$http', function ($http) {
        return {
            getRiderData: function (callback) {
                $http.get('wp-content/themes/vftr/data/moonshine2013.json', {cache: true}).success(callback);
            }
        }
    }]);