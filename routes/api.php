<?php

use Illuminate\Http\Request;
use App\Cryptocurrency;
use App\GPU;
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

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('gpu', 'GPUController@index');
    Route::get('gpu/{GPU}', 'GPUController@show');
    Route::post('gpu', 'GPUController@store');
    Route::put('gpu/{GPU}', 'GPUController@update');
    Route::delete('gpu/{GPU}', 'GPUController@delete');

    Route::get('cryptocurrency', 'CryptocurrencyController@index');
    Route::get('cryptocurrency/{Cryptocurrency}', 'CryptocurrencyController@show');
    Route::post('cryptocurrency', 'CryptocurrencyController@store');
    Route::put('cryptocurrency/{Cryptocurrency}', 'CryptocurrencyController@update');
    Route::delete('cryptocurrency/{Cryptocurrency}', 'CryptocurrencyController@delete');

    Route::get('whattomine/{gpu}/{quantity}','CryptocurrencyController@what_to_mine');
});


Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



