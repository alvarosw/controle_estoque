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