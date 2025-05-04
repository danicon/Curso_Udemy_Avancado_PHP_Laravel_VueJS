<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\NovaTarefaMail;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TarefasExport;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $user_id = Auth::user()->id;
        // dd($user_id);
        $tarefas = Tarefa::where('User_id', $user_id)->paginate(10);
        return view('tarefa.index', ['tarefas' => $tarefas]);

        // $id = Auth::user()->id;
        // $name = Auth::user()->name;
        // $email = Auth::user()->email;

        // return "ID: $id | Nome: $name | E-mail: $email";
    
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
        $dados = $request->all('tarefa', 'data_limite_conclusao');
        $dados['user_id'] = Auth::user()->id;

        // dd($dados);
        $tarefa = Tarefa::create($dados);

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
        $user_id = Auth::user()->id;
        // dd($tarefa);
        if($tarefa->user_id == $user_id) {
            return view('tarefa.edit', ['tarefa' => $tarefa]);
        } else {
            return view('acesso-negado');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        // print_r($request->all());
        // echo '<hr>';
        // print_r($tarefa->getAttributes());

        $regras = [
            'tarefa'=> 'required',
            'data_limite_conclusao' => 'required|date'
        ];

        $feedback = [
            'required' => 'O comapo :attribute é obrigatorio',
            'data_limite_conclusao.date' => 'O campo :attribute deve ser uma data válida'
        ];

        $request->validate($regras, $feedback);

        if(!$tarefa->user_id == Auth::user()->id) {
            return view('acesso-negado');
        }

        $tarefa->update($request->all());
        return redirect()->route('tarefa.show', ['tarefa' => $tarefa->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarefa $tarefa)
    {
        if(!$tarefa->user_id == Auth::user()->id) {
            return view('acesso-negado');
        }
        // dd($tarefa);
        $tarefa->delete();
        return redirect()->route('tarefa.index');
    }

    public function exportacao($extensao) {
        if(in_array($extensao, ['xlsx', 'csv', 'pdf'])) {
            return Excel::download(new TarefasExport, 'lista_de_tarefas.'.$extensao);
        }

        return redirect()->route('tarefa.index');

        // $nome_arquivo = 'lista_de_tarefas';
        // dd($extensao);

        // if($extensao == 'xlsx') {
        //     $nome_arquivo .= '.'.$extensao;
        // } else if($extensao == 'csv') {
        //     $nome_arquivo .= '.'.$extensao;
        // } else if($extensao == 'pdf') {
        //     $nome_arquivo .= '.'.$extensao;
        // } else {
        //     return redirect()->route('tarefa.index');
        // }
    }

    public function exportar() {
        $tarefas = Auth::check() ? Auth::user()->tarefas : collect();

        $pdf = Pdf::loadView('tarefa.pdf', ['tarefas' => $tarefas]);
        return $pdf->download('lista_de_tarefas.pdf');
    }
}
