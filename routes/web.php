<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastra-usuario', 'App\Http\Controllers\ApiController@cadastrarUsuario');

Route::get('/lista-usuarios', 'App\Http\Controllers\ApiController@getListaUsuarios');

Route::get('/localiza-usuario', 'App\Http\Controllers\ApiController@localizaUsuario');

Route::get('/cria-post', 'App\Http\Controllers\ApiController@criaPost');

Route::get('/cria-comment', 'App\Http\Controllers\ApiController@criaComment');

Route::get('/lista-posts', 'App\Http\Controllers\ApiController@getListaPosts');

Route::get('/cria-comment-post-1', 'App\Http\Controllers\ApiController@criaCommentPost1');

