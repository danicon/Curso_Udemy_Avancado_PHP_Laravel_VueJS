<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        // dd($request->all(['email', 'password'])); //[]

        $credenciais = $request->all(['email', 'password']);

        //autenticação (email, password)
        $token = auth('api')->attempt($credenciais);
        // dd($token);

        if($token) { //usuario autenticado com sucesso
            //retornar um JWT (JSON Web Token)
            return response()->json(['token' => $token]);
        } else { //erro de usuario ou senha
            return response()->json(['erro' => 'Usuário ou senha inválido!'], 403);

            //401 = Unauthorized -> não autorizado )
            //403 = forbidden -> proibido (login invalido)
        }
    }

    public function logout() {
        return 'logout';
    }

    public function refresh() {
        return 'refresh';
    }

    public function me() {
        return 'me';
    }
}
