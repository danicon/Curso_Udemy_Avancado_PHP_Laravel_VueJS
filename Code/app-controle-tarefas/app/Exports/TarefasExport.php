<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Facades\Auth;

class TarefasExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Tarefa::all();
        // dd(Auth::user()->tarefas()->get());

        $user = Auth::user();
        /** @var \App\Models\User $user */
        // dd($user->tarefas()->get());
        return $user->tarefas()->get();

    }

    public function headings():array { // declarando o tipo de retorno
        return [
            'ID da Tarefa', 
            // 'ID do Usuário', 
            'Tarefa', 
            'Data limite conclusão', 
            // 'Data criação', 
            // 'Data atualização'
        ];
    }

    public function map($linha):array {
        // dd($linha);
        return [
            $linha->id,
            $linha->tarefa,
            date('d/m/Y', strtotime($linha->data_limite_conclusao)),
        ];
    }
}
