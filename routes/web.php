<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'fornecedores'], function() {
    Route::get('', 'FornecedorController@index');
    
    Route::get('create', 'FornecedorController@create');

    Route::post('store', 'FornecedorController@store');

<<<<<<< HEAD
Route::post('/fornecedores/store', 'FornecedorController@store');


Route::get('api/clientes', 'FornecedorController@index');

Route::get('api/cliente/create', 'FornecedorController@create');

Route::post('api/cliente/store', 'FornecedorController@store');
=======
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
>>>>>>> f8cdba0359f0ff594225d69d1482af880a5ce994
