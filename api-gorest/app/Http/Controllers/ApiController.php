<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller{

    public function cadastrarUsuario(){

        $response = Http::withtoken('a7a284bb12f3c290cdd892fb5eefe781e34e764e1d06ddd55c0d36c926fe785d')->post('https://gorest.co.in/public/v2/users', [
            'name' => 'Steve',
            'gender' => 'male',
            'email' => 'steve@test.com',
            'status' => 'active',
        ]);

    }

}