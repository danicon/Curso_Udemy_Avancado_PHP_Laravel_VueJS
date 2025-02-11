<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request) {
        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //As mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        // Se não passar na validação, redireciona para a página anterior
        $request->validate($regras, $feedback);

        // Recuperando os dados do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuario: $email | senha: $password";
        echo "<br>";

        // print_r($request->all());

        // Iniciar o Models users
        $user = new User();

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if(isset($usuario->name)) {
            echo 'Usuário existe';
        } else {
            echo 'Usuário não existe';
        }
        
        // echo '<pre>';
        // print_r($usuario);
        // echo '</pre>';

    }
}
