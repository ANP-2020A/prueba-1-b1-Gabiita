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

Route::get('products/{id}', 'ProductsController@show');


Route::group(['middleware' => ['jwt.verify']], function() {
Route::post('products', 'ProductsController@store');
Route::put('products/{id}', 'ProductsController@update');
Route::delete('products/{id}', 'ProductsController@delete');
Route::post('custumers', 'CustumersController@store');
Route::put('custumers/{id}', 'CustumersController@update');
Route::delete('custumers/{id}', 'CustumersController@delete');
Route::get('custumers/{id}', 'CustumersController@show');
Route::get('custumers', 'CustumersController@index');
});
