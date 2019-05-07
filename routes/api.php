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
Route::middleware('auth:api')->post('/logout', function (Request $request) {
     Route::post('/logout','api\AuthController@logout');
 });
 Route::middleware('auth:api')->get('/nominees', 'Api\NomineesController@nominees');


 Route::middleware('auth:api')->post('/logout', function (Request $request) {
    // return $request->user();
     Route::post('/vote','api\AuthController@vote');
 });
Route::post('/login','Api\AuthController@login');





