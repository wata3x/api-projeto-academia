<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => '/'], function () {

    Route::get('login', function () {
       return view ('autenticacao/login');
    });
    Route::post('login', 'AutenticacaoController@login');

    Route::get('logout', 'AutenticacaoController@logout')->name('logout');

});
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::group(['middleware' => 'tipos', 'tipos' => ['Admin']], function () {
        Route::get('/', function () {
            return view('dashboard/dashboard');
        });
    });
});

Route::group(['middleware' => 'auth'], function () {
   Route::get('categorias', 'Admin\CategoriaController@index')->name('categoria.list');
   Route::get('categorias/criar', 'Admin\CategoriaController@create')->name('categoria.create');
   Route::post('categorias/salvar', 'Admin\CategoriaController@store')->name('categoria.store');
});
