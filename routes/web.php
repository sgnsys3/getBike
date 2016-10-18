<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/', 'RegisterController@register');

// API
Route::post('/api/getparticipant' , ['as' => 'api.getparticipant','uses' => 'ApiController@getparticipant']);
Route::post('/api/insertParticipant' , ['as' => 'api.insertparticipant','uses' => 'ApiController@insertparticipant']);
Route::post('/api/checkregistercode' , ['as' => 'api.checkregistercode','uses' => 'ApiController@checkRegisterCode']);
