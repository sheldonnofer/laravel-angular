'use strict';

controllers.controller('profileController', function ($stateParams, $scope, $http, Api, $location, $log) {
    $scope.page = {title: 'My Profile'};
//    $log.info("SOAP! " + SOAP.Weather());
//    SOAP.Weather().then(function(response){
//    $scope.response = response;
//    $log.info("SOAP! " + response);
//  });
    $scope.profile = [];
    $scope.profile = Api.Profile.get($stateParams, function (profile) {
        $log.info($stateParams.userId);
        if(profile.userId == $stateParams.userId){
            $scope.userProfile = profile;
        } else {
            return false;
        }
        
    });
    
//    $scope.sort = function (keyname) {
//        $scope.sortKey = keyname;   //set the sortKey to the param passed
//        $scope.reverse = !$scope.reverse; //if true make it false and vice versa
//    }

//    $scope.destroy = function (speaker) {
//                if (popupService.showPopup('Really delete this speaker?')) {
//                        speaker.$remove(function (speaker) {
//                $scope.speakers.splice($scope.speakers.indexOf(speaker), 1);
//                                $location.path('/administrator/speakers');
//                        });
//                }
//        }
});