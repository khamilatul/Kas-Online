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
    return view('backoffice');
});
Route::get('/backoffice', ['as' => 'backoffice', 'uses' => 'PageController@backoffice']);
Route::get('give-me-token', ['as' => 'token', 'uses' => 'PageController@token']);
