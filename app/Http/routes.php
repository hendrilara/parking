<?php

Route::get('/', function(){
    return view('welcome');
});
// register route
Route::group(['middleware' => 'cors'], function(){

    Route::group(['prefix' => 'api/v1'], function() {

    Route::post('register/parking/', 'Api\AuthController@registerOrLogin');

    // Route::post('register/user/', 'Api\AuthController@registerOrLogin');

    Route::get('user/profile/{id}', 'Api\AuthController@getUser');

    Route::get('get/user', 'Api\AuthController@getAuthenticatedUser');

    });
});

// location route
Route::group(['middleware' => 'cors'], function(){

    Route::group(['prefix' => 'api/v1'], function () {

    Route::post('parking/location', 'Api\LocationController@nearby');

    Route::get('parking/nearby', 'Api\LocationController@location');

    Route::post('parking/nearby/location', 'Api\LocationController@findNearbyLocation');

    Route::any('parking/location/show/{location}','Api\LocationController@showLocation');

    Route::get('parking/user/', 'Api\UserController@index');
        
    });
});

// boking parking route
Route::group(['middleware' => 'cors'], function(){

    Route::group(['prefix' => 'api/v1'], function () {

    });
});
 
 // backend route
 Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');
    Route::get('/logout', 'Auth\AuthController@getLogout');
    Route::post('lokasi', 'Backend\LocationController@store');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('dashboard', 'Backend\HomeController@index');
    Route::resource('manage', 'Backend\UserController');
    Route::get('create', 'Backend\UserController@create');
    Route::post('user/store', 'Backend\UserController@store');
    Route::get('user/edit/{id}', 'Backend\UserController@edit');
    Route::put('user/update/{id}', 'Backend\UserController@update');

    Route::resource('location', 'Backend\LocationController');
    Route::get('create/location', 'Backend\LocationController@create');
    Route::post('location/store', 'Backend\LocationController@store');
    Route::get('location/edit/{id}', 'Backend\LocationController@edit');
    Route::put('location/update/{id}', 'Backend\LocationController@update');
    Route::get('location/detail/{id}', 'Backend\LocationController@show');
    Route::get('location/delete/{id}', 'Backend\LocationController@destroy');
});


