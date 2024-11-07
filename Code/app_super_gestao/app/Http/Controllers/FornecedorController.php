<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1', 
                'status' => 'N', 
                'cnpj' => '00'
            ],
            1 => [
                'nome' => 'Fornecedor 2', 
                'status' => 'S'
            ]
        ];

        // condicao ? se verdadeiro : se falso;
        // condicao ? se verdadeiro : (condicao ? se verdadeiro : se falso);
        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
