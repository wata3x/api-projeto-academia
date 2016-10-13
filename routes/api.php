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

Route::group(['prefix' => 'categorias', 'middleware' => ['jwt.auth', 'cors', 'tipos'], 'tipos' => ['Admin']], function () {
    
        Route::get('/', 'Api\CategoriaController@listarCategorias');
        Route::get('/{id}', 'Api\CategoriaController@mostrarCategoria');
        Route::post('/', 'Api\CategoriaController@salvarCategoria');
        Route::post('/{id}/exercicios', 'Api\ExercicioController@salvarExercicio');
  
});

Route::group(['prefix' => 'dietas', 'middleware' => 'jwt.auth'], function () {
    Route::get('/', [
        'uses' => 'Api\DietaController@listarDietas',
        'middleware' => 'tipos',
        'tipos' => ['Admin']]);
    Route::post('/', [
        'uses' => 'Api\DietaController@salvarDieta',
        'middleware' => 'tipos',
        'tipos' => ['Admin']]);
    Route::get('/{id}', [
        'uses' => 'Api\DietaController@mostrarDieta',
        'middleware' => 'tipos',
        'tipos' => ['Admin']]);    
});

Route::group(['middleware' => 'cors'], function() {
    Route::post('login', 'Api\AutenticacaoController@login');
});
