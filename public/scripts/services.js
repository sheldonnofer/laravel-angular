/* global _ angular store moment */
'use strict';

var services = angular.module('app.services', []);

services.factory('Api', ['$resource', function ($resource) {
        return {
            Congregations: $resource(API_URL + 'congregations/:method/:id', {id: '@id'}, {
                query: {method: 'GET', params: {}, isArray: true},
                insert: {method: 'POST', params: {method: 'insert'}},
                update: {method: 'POST', params: {method: 'update'}},
                get: {method: 'GET', params: {}},
                remove: {method: 'DELETE', params: {method: 'remove'}}
            }),
            Speakers: $resource(API_URL + 'speakers/:method/:id', {id: '@id'}, {
                query: {method: 'GET', params: {}, isArray: true},
                insert: {method: 'POST', params: {method: 'insert'}},
                update: {method: 'POST', params: {method: 'update'}},
                get: {method: 'GET', params: {}, isArray: false},
                remove: {method: 'DELETE', params: {method: 'remove'}}
            }),
            SpeakerOutlines: $resource(API_URL + 'SpeakerOutlines/:method/:speaker', {speaker: '@speaker'}, {
                query: {method: 'GET', params: {}, isArray: true},
                insert: {method: 'POST', params: {method: 'insert'}},
                update: {method: 'POST', params: {method: 'update'}},
                get: {method: 'GET', params: {}, isArray: true},
                remove: {method: 'DELETE', params: {method: 'remove'}}
            }),
            Outlines: $resource(API_URL + 'outlines/:method/:id', {id: '@id'}, {
                query: {method: 'GET', params: {}, isArray: true},
                insert: {method: 'POST', params: {method: 'insert'}},
                update: {method: 'POST', params: {method: 'update'}},
                get: {method: 'GET', params: {}, isArray: true},
                remove: {method: 'DELETE', params: {method: 'remove'}}
            }),
            Profile: $resource(API_URL + 'profiles/:method/:userId', {userId: '@userId'}, {
                query: {method: 'GET', params: {}, isArray: true},
                insert: {method: 'POST', params: {method: 'insert'}},
                update: {method: 'POST', params: {method: 'update'}},
                get: {method: 'GET', params: {}},
                remove: {method: 'DELETE', params: {method: 'remove'}}
            }),
            Roles: $resource(API_URL + 'roles/:method/:id', {id: '@id'}, {
                query: {method: 'GET', params: {}, isArray: true},
                insert: {method: 'POST', params: {method: 'insert'}},
                update: {method: 'POST', params: {method: 'update'}},
                get: {method: 'GET', params: {}},
                remove: {method: 'DELETE', params: {method: 'remove'}}
            })
        };
    }]);

//services.factory('SOAP', ['$soap', function ($soap) {
//        var base_url = "http://wsf.cdyne.com/WeatherWS/Weather.asmx/GetWeatherInformation";
//
//    return {
//        Weather: function(){
//            return $soap.post(base_url,"GetWeatherInformation");
//        }
//    }
//    }]);  