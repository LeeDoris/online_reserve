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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['prefix' => 'v1', 'middleware' => 'api', 'namespace' => 'Api'], function () {
    Route::resource('/reservations', 'ReservationController');
    Route::resource('/tables', 'TablesController');
//    Route::resource('/users', 'UsersController');
    Route::post('/reservations/check', 'ReservationController@check');
    Route::get('/auth', '\TCG\Voyager\Http\Controllers\VoyagerAuthController@auth');
    Route::get('/users/reservations', 'UsersController@reservations');
    Route::post('/queue', 'QueueController@queue');
    Route::post('/queue/check', 'QueueController@check');
    Route::delete('/queue/{id}', 'QueueController@delete');
    Route::get('/layout', 'ReservationController@layout');
});