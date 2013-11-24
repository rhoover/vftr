'use strict';

angular.module("vftrApp").controller('MoonshineThirteenCtrl', ['$scope', 'riderjson', function ($scope, riderjson) {
    riderjson.getRiderData(function (data) {
        $scope.resultsTable = data;
    });
}]);

// angular.module("vftrApp").controller('MoonshineThirteenCtrl', ['$scope',  '$http', function ($scope, $http) {
//     var url = 'http://vftr.org/dev/wp-content/themes/vftr/data/moonshine2013.json';
//     $http.jsonp(url, {cache:true})
//         .success(function(riderJson) {
//             $scope.riderData = riderJson;
//         });
// }]);