<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fornecedores', 'FornecedorController@index');

Route::get('/fornecedores/create', 'FornecedorController@create');

Route::post('/fornecedores/store', 'FornecedorController@store');