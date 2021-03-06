<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('users','UserController');
Route::resource('members','MemberController');
Route::resource('transactions','TransactionController');
Route::get('jumlah-transaksi/{id}', 'TransactionController@cekjumlah');
Route::resource('contacts','ContactController');
Route::get('get-session', 'UserController@getSession');
Route::get('users-by-transaksi', 'UserController@paginateuser');



Route::put('updatePass-users', 'UserController@updatePass');
Route::get('getkelas', 'UserController@kelas');
Route::get('get-list-kelas', 'UserController@getlist');


////----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
////auth
Route::group(['namespace' => 'Auth'], function () {

    // Authentication routes...
    Route::get('get-login', 'LoginController@getLogin');
    Route::get('logout', 'LoginController@getLogout');
    Route::get('post-login', 'LoginController@getLogin');
    Route::post('post-login', 'LoginController@postLogin');
});
Route::group(['namespace' => 'Cetak'], function () {

    // Authentication routes...
    Route::get('cetak-kas/{id}', 'CetakKas@Transaksi');

});
