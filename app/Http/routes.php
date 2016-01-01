<?php

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'api'], function() {
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    
    // Speaker api routes
    Route::resource('speakers', 'SpeakerController', ['only' => ['index']]);
    Route::get('speakers/{id}', 'SpeakerController@get');
    
    // Role api routes
    Route::resource('roles', 'RoleController', ['only' => ['index']]);
    Route::get('roles/{id}', 'RoleController@get');
    
    // User api routes
    Route::resource('users', 'UserController', ['only' => ['index']]);
    Route::get('users/{id}', 'UserController@get');
    Route::post('users', 'UserController@store');
    
    // Profile api routes
    Route::resource('profiles', 'ProfileController', ['only' => ['index']]);
    Route::get('profiles/{userId}', 'ProfileController@get');
    
    // Outline api routes
    Route::resource('outlines', 'OutlineController', ['only' => ['index']]);
    Route::get('outlines/{id}', 'OutlineController@get');
    
    // SpeakerOutline api routes
    Route::resource('speaker_outlines', 'SpeakerOutlineController', ['only' => ['index']]);
    Route::get('speaker_outlines/{id}', 'SpeakerOutlineController@get');
    
    // Congregation api routes
    Route::resource('congregations', 'CongregationController', ['only' => ['index']]);
    Route::get('congregations/{id}', 'CongregationController@get');
    
    Route::post('authenticate', 'AuthenticateController@authenticate');
    Route::get('authenticate/user', 'AuthenticateController@getAuthenticatedUser');
});
