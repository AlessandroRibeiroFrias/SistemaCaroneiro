<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/endereco', 'App\Http\Controllers\ControllerEndereco@getEndereco');

Route::group(['prefix' => 'caroneiro'], function () {
    Route::get('', 'App\Http\Controllers\ControllerCaroneiro@index');
    Route::get('/{id_caroneiro}', 'App\Http\Controllers\ControllerCaroneiro@show');
    Route::post('', 'App\Http\Controllers\ControllerCaroneiro@store');
    Route::put('', 'App\Http\Controllers\ControllerCaroneiro@update');
    Route::delete('/{id_caroneiro}', 'App\Http\Controllers\ControllerCaroneiro@update');
});

Route::group(['prefix' => 'endereco'], function () {
    Route::get('', 'App\Http\Controllers\ControllerEndereco@index');
    Route::get('/{id_endereco}', 'App\Http\Controllers\ControllerEndereco@show');
    Route::post('', 'App\Http\Controllers\ControllerEndereco@store');
    Route::put('', 'App\Http\Controllers\ControllerEndereco@update');
    Route::delete('/{id_endereco}', 'App\Http\Controllers\ControllerEndereco@update');
});
