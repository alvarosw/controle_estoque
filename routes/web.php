<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fornecedores', 'FornecedorController@index');

Route::get('/fornecedores/create', 'FornecedorController@create');

Route::post('/fornecedores/store', 'FornecedorController@store');


Route::get('api/clientes', 'FornecedorController@index');

Route::get('api/cliente/create', 'FornecedorController@create');

Route::post('api/cliente/store', 'FornecedorController@store');