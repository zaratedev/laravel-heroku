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

Route::prefix('v1')->namespace('Api')->group(function() {
	Route::get('products', 'ProductsController@index');
	Route::get('products/{product}', 'ProductsController@show');
	Route::post('products', 'ProductsController@store');
	Route::put('products/{product}', 'ProductsController@update');
	Route::delete('products/{product}', 'ProductsController@delete');
});
