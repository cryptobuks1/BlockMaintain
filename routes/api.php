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


});


Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('gpu', function() {
//    // If the Content-Type and Accept headers are set to 'application/json',
//    return GPU::all();
//});
//
//Route::get('gpu/{id}', function($id) {
//    return GPU::find($id);
//});
//
//Route::post('gpu', function(Request $request) {
//    return GPU::create($request->all);
//});
//
//Route::put('gpu/{id}', function(Request $request, $id) {
//    $article = GPU::findOrFail($id);
//    $article->update($request->all());
//
//    return $article;
//});
//
//Route::delete('gpu/{id}', function($id) {
//    GPU::find($id)->delete();
//
//    return 204;
//});





//Route::get('cryptocurrency', function() {
//    // If the Content-Type and Accept headers are set to 'application/json',
//    return Cryptocurrency::all();
//});
//
//Route::get('cryptocurrency/{id}', function($id) {
//    return Cryptocurrency::find($id);
//});
//
//Route::post('articles', function(Request $request) {
//    return Cryptocurrency::create($request->all);
//});
//
//Route::put('cryptocurrency/{id}', function(Request $request, $id) {
//    $article = Cryptocurrency::findOrFail($id);
//    $article->update($request->all());
//
//    return $article;
//});
//
//Route::delete('cryptocurrency/{id}', function($id) {
//    Cryptocurrency::find($id)->delete();
//
//    return 204;
//});




