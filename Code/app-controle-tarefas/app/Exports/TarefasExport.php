<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Auth;

class TarefasExport implements FromCollection
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
}
