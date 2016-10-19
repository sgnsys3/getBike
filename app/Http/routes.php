<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
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
