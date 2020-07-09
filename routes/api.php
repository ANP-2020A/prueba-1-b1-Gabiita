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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('products', 'ProductsController@index');
Route::get('custumers', 'CustumersController@index');


Route::group(['middleware' => ['jwt.verify']], function() {
Route::get('products/{id}', 'ProductsController@show');
Route::post('products', 'ProductsController@store');
Route::put('products/{id}', 'ProductsController@update');
Route::delete('products/{id}', 'ProductsController@delete');
Route::get('custumers/{id}', 'CustumersController@show');
Route::post('custumers', 'CustumersController@store');
Route::put('custumers/{id}', 'CustumersController@update');
Route::delete('custumers/{id}', 'CustumersController@delete');
});
