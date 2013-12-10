'use strict'

angular.module('vftrApp')
    .directive('meetingMap', [function () {
        return {
            restrict: 'A', // E = Element, A = Attribute, C = Class, M = Comment
            link: function(scope, element, attrs) {

                var lat = 40.099369;
                var lon = -75.475854;

                var myMapOptions, marker, map;
                var myMapOptions = {
                    zoom: 10,
                    center: new google.maps.LatLng(lat, lon),
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                    },
                    zoomControl: false,
                    // zoomControlOptions: {
                    //     style: google.maps.ZoomControlStyle.SMALL
                    // },
                    streetViewControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(element[0], myMapOptions);
                marker = new google.maps.Marker ({
                    position: new google.maps.LatLng(lat, lon),
                    map: map
                });
            }
        };
    }]);