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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::group(['prefix' => 'categorias', 'middleware' => 'jwt.auth'], function () {
   Route::get('/', [
       'uses' => 'CategoriaController@index',
       'middleware' => 'tipos',
       'tipos' => ['Admin']]);
    Route::get('/{id}', [
        'uses' => 'CategoriaController@show',
        'middleware' => 'tipos',
        'tipos' => ['Admin']]);
    Route::post('/', [
        'uses' => 'CategoriaController@store',
        'middleware' => 'tipos',
        'tipos' => ['Admin']]);
});

Route::post('login', 'AutenticacaoController@login');
