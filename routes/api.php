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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kecelakaan','KecelakaanController@index');
Route::post('kecelakaan','KecelakaanController@create');
Route::get('/kecelakaan/{id_lapor}','KecelakaanController@update');
Route::get('/kecelakaan/{id_lapor}','KecelakaanController@delete');

