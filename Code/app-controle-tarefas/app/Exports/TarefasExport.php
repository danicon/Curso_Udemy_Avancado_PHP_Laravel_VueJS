<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Auth;

class TarefasExport implements FromCollection, WithHeadings
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
            'ID do Usuário', 
            'Tarefa', 
            'Data limite conclusão', 
            'Data criação', 
            'Data atualização'];
    }
}
