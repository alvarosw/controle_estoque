<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'fornecedores'], function() {
    Route::get('', 'FornecedorController@index');
    
    Route::get('create', 'FornecedorController@create');

    Route::post('store', 'FornecedorController@store');

    Route::get('{id}/edit', 'FornecedorController@edit');

    Route::put('{id}/update', 'FornecedorController@update');
});

Route::group(['prefix'=>'clientes'], function() {
    Route::get('', 'ClienteController@index');
    
    Route::get('create', 'ClienteController@create');

    Route::post('store', 'ClienteController@store');

    Route::get('{id}/edit', 'ClienteController@edit');

    Route::put('{id}/update', 'ClienteController@update');
});

Route::group(['prefix'=>'categorias'], function() {
    Route::get('', 'CategoriaController@index');
    
    Route::get('create', 'CategoriaController@create');

    Route::post('store', 'CategoriaController@store');

    Route::get('{id}/edit', 'CategoriaController@edit');

    Route::put('{id}/update', 'CategoriaController@update');
});