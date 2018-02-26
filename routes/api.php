<?php

use App\Http\Resources\TableResource;
use App\Models\Table;
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

Route::group(['prefix' => 'v1', 'middleware' => 'api', 'namespace' => 'Admin'], function () {
    Route::resource('/tables', 'TablesController');
//    Route::get('test', 'TablesController@index');
    Route::get('test', function (){
        return TableResource::collection(Table::all());
    });
});