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


Route::group(['prefix' => '/v1'], function () {
    
    Route::get('/test', [
        'as' => 'test',
        'uses'       => 'Api\v1\RequestLogController@test'
    ]);
    Route::get('/welcome', [
        'as'         => 'welcome',
        'uses'       => 'Api\v1\RequestLogController@welcome'
    ]);
    Route::get('/me', [
        'as'        => 'me',
        'uses'      => 'Api\v1\RequestLogController@me'
    ]);
    
    Route::post('/test-result', [
        'as' => 'test-result',
        'uses' => 'Api\v1\RequestLogController@testResult'
    ]);

});


