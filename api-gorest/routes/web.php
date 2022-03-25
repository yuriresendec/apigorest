<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar-usuario', 'App\Http\Controllers\ApiController@cadastrarUsuario');