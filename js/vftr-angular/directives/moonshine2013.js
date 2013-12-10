'use strict'

angular.module('vftrApp')
    .directive('moonshine2013', [function () {
    // Runs during compile
    return {
        // name: '',
        // priority: 1,
        // terminal: true,
        // scope: {}, // {} = isolate, true = child, false/undefined = no change
        controller: function ($scope, riderjson, $window) {
            riderjson.getRiderData(function (data) {
                $scope.resultsTable = data;
            });
            var here = $window.location.href;
            console.log(here);
        },
        // require: 'ngModel', // Array = multiple requires, ? = optional, ^ = check parent elements
        restrict: 'C', // E = Element, A = Attribute, C = Class, M = Comment
        template:
        '<h2>Moonshine 2013 Results</h2>' +
        '<section class="results-search">' +
            '<select data-ng-model="resultsSearch.Class" data-ng-init="resultsSearch.Class = options[0]" class="results-search-select">' +
            '<option value="">Instant Class Filter</option><option value="AA">AA</option><option value="A 200">A 200</option><option value="A 250">A 250</option><option value="A 4ST">A Four Stroke</option><option value="A OPEN">A Open</option><option value="A VET">A Vet</option><option value="A SR">A Senior</option><option value="A SSR">A Super Senior</option><option value="B 200">B 200</option><option value="B 250">B 250</option><option value="B 4ST">B Four Stroke</option><option value="B OPEN">B Open</option><option value="B VET">B Vet</option><option value="B SR">B Senior</option><option value="B SSR">B Super Senior</option><option value="C 200">C 200</option><option value="C 250">C 250</option><option value="C 4ST">C Four Stroke</option><option value="C OPEN">C Open</option><option value="C VET">C Vet</option><option value="C SR">C Senior</option><option value="C SSR">C Super Senior</option><option value="GOLDEN">Golden</option><option value="MASTERS">Masters</option><option value="WOMEN">Women</option>' +
        '</select>' +
        '<input type="text"class="results-search-input"placeholder="Instant Rider Search" data-ng-model="resultsSearch.NAME">' +
        '</section>' +
        '<section class="results-2013">' +
            '<div class="summary-header">' +
                '<span class="summary-header-item">Name</span>' +
                '<span class="summary-header-item">Class</span>' +
                '<span class="summary-header-item">Score</span>' +
                '<span class="summary-header-item">Checks</span>' +
                '<span class="summary-header-item">E-Points</span>' +
                '<span class="summary-header-item">Class Finish</span>' +
                '<span class="summary-header-item">Finish</span>' +
            '</div>' +
            '<div class="results-row" data-ng-repeat="rider in resultsTable | filter:resultsSearch" data-ng-class="{\'hidden\':showChecks}">' +
                '<span class="results-row-item" data-head="Name" data-ng-click="showChecks=!showChecks" data-ng-class="{\'hidden\':showChecks}">{{rider.NAME}}</span>' +
                '<span class="results-row-item" data-head="Class">{{rider.Class}}</span>' +
                '<span class="results-row-item" data-head="Score">{{rider.Score}}</span>' +
                '<span class="results-row-item" data-head="Checks">{{rider.ValidChecks}}</span>' +
                '<span class="results-row-item" data-head="E-Points">{{rider.EPoints}}</span>' +
                '<span class="results-row-item" data-head="Class Finish">{{rider.PositionClass}}</span>' +
                '<span class="results-row-item" data-head="Overall Finish">{{rider.PositionOverall}}</span>' +
                '<div class="checkpoints-row" data-ng-class="{\'hidden\':!showChecks}">' +
                    '<span class="checkpoints-row-item">Ck1: {{rider.CP1Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck2: {{rider.CP2Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck3: {{rider.CP3Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck4: {{rider.CP4Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck5: {{rider.CP5Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck6: {{rider.CP6Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck7: {{rider.CP7Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck8: {{rider.CP8Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck9: {{rider.CP9Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck10: {{rider.CP10Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck11: {{rider.CP11Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck12: {{rider.CP12Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck13: {{rider.CP13Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck14: {{rider.CP14Pts}}</span>' +
                    '<span class="checkpoints-row-item">Ck15: {{rider.CP15Pts}}</span>' +
                '</div>' +
            '</div>' + //end ng-repeat
        '</section>'

        , //end template
        // templateUrl: '',
        // replace: true,
        // transclude: true,
        // compile: function(tElement, tAttrs, function transclude(function(scope, cloneLinkingFn){ return function linking(scope, elm, attrs){}})),
        // link: function(scope, element, attrs) {

        // }
    };
}]);