<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller{

    public function cadastrarUsuario(){

        $response = Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->post('https://gorest.co.in/public/v2/users', [
            'name' => 'José Teste',
            'gender' => 'male',
            'email' => 'jose@test.com',
            'status' => 'active',
        ]);

        echo $response->body();

    }

    public function getListaUsuarios(){

        return Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->get('https://gorest.co.in/public/v2/users');

    }

    public function localizaUsuario(){

        $id = 3254;

        return Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->get('https://gorest.co.in/public/v2/users/' . $id);

    }

    public function criaPost(){

        $id = 3254;

        $response = Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->post('https://gorest.co.in/public/v2/users/' . $id . '/posts', [
            'title' => 'Post teste',
            'body' => 'Postagem de teste',
        ]);

        echo $response->body();

    }

    public function criaComment(){

        $idComment = 1409;

        $response = Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->post('https://gorest.co.in/public/v2/posts/' . $idComment . '/comments', [
            'name'=> 'Mauro',
            'email'=> 'mauro@teste.com',
            'body'=> 'Comentário teste 3'
        ]);

        echo $response->body();

    }

    public function getListaPosts(){

        return Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->get('https://gorest.co.in/public/v2/posts');

    }

    public function criaCommentPost1(){

        $idComment = 1238;

        $response = Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->post('https://gorest.co.in/public/v2/posts/' . $idComment . '/comments', [
            'name'=> 'Ricardo',
            'email'=> 'ricardo@teste.com',
            'body'=> 'Comentário teste do Ricardo no primeiro post da lista pública'
        ]);

        echo $response->body();

    }

    public function apagaCommentPost1(){

        $idComment = "#";

        $response = Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->delete('https://gorest.co.in/public/v2/comments/' . $idComment); 

        echo "Comentário deletado com sucesso!";

    }

}