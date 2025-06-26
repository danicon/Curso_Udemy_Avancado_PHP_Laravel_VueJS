<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModeloController extends Controller
{

    private $modelo;
    public function __construct(Modelo $modelo) {
        $this->modelo = $modelo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->modelo->with('marca')->get(), 200);
        //all() -> criando um objeto de consulta + get() = collection
        //get() -> modificar a consulta -> collection
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->modelo->rules());
       
        $imagem = $request->file('imagem');
        $imagem_urn = $imagem->store('imagens/modelos', 'public');
       
        $modelo = $this->modelo->create([
            'marca_id' => $request->marca_id,
            'nome' => $request->nome,
            'imagem' => $imagem_urn,
            'numero_portas' => $request->numero_portas,
            'lugares' => $request->lugares,
            'air_bag' => $request->air_bag,
            'abs' => $request->abs
        ]);

        return response()->json($modelo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $modelo = $this->modelo->with('marca')->find($id);
        if($modelo === null) {
            return response()->json(['erro' => "Recurso pesquisado não existe"], 404);
        }

        return response()->json($modelo, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelo $modelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $modelo = $this->modelo->find($id);

        if($modelo === null) {
            return response()->json(['erro' => 'Impossievel realizar a atualização. Recurso solicitado não existe.'], 404);
        }

        if($request->method() === 'PATCH') {

            $regrasDinamicas = array();

             // percorrendo todas as regras no Model
            foreach($modelo->rules() as $input => $regras) {
            
                //coletar apenas a regras aplicaveis aos parametros parcias da requisição PATCH
                if(array_key_exists($input, $request->all())) {
                    $regrasDinamicas[$input] = $regras;       
                }
            }

            $request->validate($regrasDinamicas);
        } else {
            $request->validate($modelo->rules());
        }

        // remove o arquivo antigo, caso um novo arquivo tenha sido enviado no request
        if($request->file('imagem')) {
            Storage::disk('public')->delete($modelo->imagem);
        }

        $imagem = $request->file('imagem');
        $imagem_urn = $imagem->store('imagens/modelos', 'public');

        $modelo->update([
            'marca_id' => $request->marca_id,
            'nome' => $request->nome,
            'imagem' => $imagem_urn,
            'numero_portas' => $request->numero_portas,
            'lugares' => $request->lugares,
            'air_bag' => $request->air_bag,
            'abs' => $request->abs
        ]);

        return response()->json($modelo, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $modelo = $this->modelo->find($id);

        if($modelo === null) {
            return response()->json(['erro' => 'Impossievel realizar a exclusão. O Recurso solicitado não existe.'], 404);
        }

        // remove o arquivo antigo
        Storage::disk('public')->delete($modelo->imagem);

        
        $modelo->delete();
        return response()->json(['msg' => 'O modelo foi removido com sucesso!'], 200);
    }
}
