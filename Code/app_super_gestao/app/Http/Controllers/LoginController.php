<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro = '';

        if($request->get('erro') == 1) {
            $erro = 'Usuário e ou senha não existe';
        }

        if($request->get('erro') == 2) {
            $erro = 'Necessário realizar o login para ter acesso a página';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
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

        // echo "Usuario: $email | senha: $password";
        // echo "<br>";

        // print_r($request->all());

        // Iniciar o Models users
        $user = new User();

        $usuario = $user->where('email', $email)
            ->where('password', $password)
            ->get()
            ->first();

        if(isset($usuario->name)) {
            // dd($usuario);

            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            // dd($_SESSION);

            return redirect()->route('app.home');
        } else {
            return  redirect()->route('site.login', ['erro' => 1]);
        }
        
        // echo '<pre>';
        // print_r($usuario);
        // echo '</pre>';

    }

    public function sair() {
       session_destroy();
       return redirect()->route('site.index');
    }
}
