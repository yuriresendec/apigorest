<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar-usuario', 'App\Http\Controllers\ApiController@cadastrarUsuario');

Route::get('/listar-usuarios', 'App\Http\Controllers\ApiController@listarUsuarios');

Route::get('/localiza-usuario', 'App\Http\Controllers\ApiController@localizaUsuario');

Route::get('/cria-post', 'App\Http\Controllers\ApiController@criaPost');