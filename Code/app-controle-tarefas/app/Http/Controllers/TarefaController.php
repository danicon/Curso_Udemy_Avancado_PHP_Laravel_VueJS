<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\NovaTarefaMail;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function __construct() {
        $this->middleware('auth');
    }

     public function index()
    {
        $id = Auth::user()->id;
        $name = Auth::user()->name;
        $email = Auth::user()->email;

        return "ID: $id | Nome: $name | E-mail: $email";
    
        /*
        if(Auth::check()) {
            $id = Auth::user()->id;
            $name = Auth::user()->name;
            $email = Auth::user()->email;

            return "ID: $id | Nome: $name | E-mail: $email";
        } else {
            return "Você não está logado no sistema";
        }
        */

        /*
        if(auth()->check()) {
            $id = auth()->user()->id;
            $name = auth()->user()->name;
            $email = auth()->user()->email;

            return "ID: $id | Nome: $name | E-mail: $email";
        } else {
            return "Você não está logado no sistema";
        }
        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $regras = [
            'tarefa' => 'required',
            'data_limite_conclusao' => 'required|date'
        ];

        $feedback = [
            'required' => 'O campo :attribute é obrigatorio',
            'data_limite_conclusao.date' => 'O campo :attribute deve ser uma data válida'
        ];

        $request->validate($regras, $feedback);


        // dd($request->all());
        $tarefa = Tarefa::create($request->all());
        $destinatario = Auth::user()->email; //e-mail do usuario logado
        Mail::to($destinatario)->send(new NovaTarefaMail($tarefa));

        return redirect()->route('tarefa.show', ['tarefa' => $tarefa->id]);
        // dd($tarefa->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarefa $tarefa)
    {
        // dd($tarefa->getAttributes());
        return view('tarefa.show', ['tarefa' => $tarefa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
