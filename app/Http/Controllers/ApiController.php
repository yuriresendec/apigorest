<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller{

    public function cadastrarUsuario(){

        $response = Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->post('https://gorest.co.in/public/v2/users', [
            'name' => 'Neymar Junior',
            'gender' => 'male',
            'email' => 'ney@test.com',
            'status' => 'active',
        ]);

        echo $response->body();

    }

    public function listarUsuarios(){

        return Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->get('https://gorest.co.in/public/v2/users');

    }

    public function localizaUsuario(){

        $id = 3254;

        return Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->get('https://gorest.co.in/public/v2/users/' . $id);

    }

    public function criaPost(){

        $id = 3254;

        $response = Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->post('https://gorest.co.in/public/v2/users/' . $id . '/posts', [
            'title' => 'Post Neymar',
            'body' => 'Postagem sobre Neymar',
        ]);

        echo $response->body();

    }

}