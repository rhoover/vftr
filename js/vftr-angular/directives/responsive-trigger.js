'use strict';

angular.module('vftrApp')
    .directive('background', [function () {
        return {
            restrict: 'A',
            compile: function (tElement, tAttributes, transclude) {
                return function (scope, element, attrs) {
                    //Responsive Image Solution
                    //Inspired by: http://tech.particulate.me/javascript/2013/10/10/how-to-conveniently-check-for-responsive-breakpoints-in-javascript/
                    var result = getComputedStyle(element[0], ':after').content;
                    result = result.replace(/"/g,''); //Because Firefox keeps quotes from content
                    // console.log(result);
                    switch (result) {
                        case "phone" :
                            element.addClass("bg-small");
                        break;
                        case "tablet" :
                            element.addClass("bg-medium");
                        break;
                        case "small-desktop" :
                            element.addClass("bg-small-desktop");
                        break;
                        case "large-desktop" :
                            element.addClass("bg-large-desktop");
                        break;
                    }
                } // end return function
            } //end compile
        }; //end return
    }]);