'use strict'

angular.module('vftrApp')
    .directive('scramblesMap', ['googleMap', function (googleMap) {
        return {
            restrict: 'A',
            compile: function (tElement, tAttributes, transclude) {
                return function (scope, element, attrs) {

                    var lat = 40.79674;
                    var lon = -76.12071;

                    var myMapOptions, marker, map;
                    var div = element[0];

                    myMapOptions = googleMap.mapOptions(10, lat, lon);

                    map= googleMap.mapCreator(div, myMapOptions);

                    marker = googleMap.mapMarker(map, lat, lon);

                }  //end return function
            } //end compile
        }; //end return
    }]);