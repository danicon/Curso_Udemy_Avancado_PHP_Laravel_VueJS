<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    private $marca;
    public function __construct(Marca $marca) {
        $this->marca = $marca;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $marcas = Marca::all();
        $marcas = $this->marca->all();
        return response()->json($marcas, 200);
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
        // $marca = Marca::create($request->all());
        // dd($request->all());
        // dd($marca);
        $marca = $this->marca->create($request->all());
        return response()->json($marca, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $marca = $this->marca->find($id);
        if($marca === null) {
            return response()->json(['erro' => "Recurso pesquisado não existe"], 404);
        }

        return response()->json($marca, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        /*
        print_r($request->all()); // Os dados atualizados
        echo '<hr>';
        print_r($marca->getAttributes()); // Os dados antigos
        */

        // $marca->update($request->all());
        $marca = $this->marca->find($id);

        if($marca === null) {
            return response()->json(['erro' => 'Impossievel realizar a atualização. Recurso solicitado não existe.'], 404);
        }

        $marca->update($request->all());
        return response()->json($marca, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // print_r($marca->getAttributes());
        $marca = $this->marca->find($id);

        if($marca === null) {
            return response()->json(['erro' => 'Impossievel realizar a exclusão. O Recurso solicitado não existe.'], 404);
        }
        
        $marca->delete();
        return response()->json(['msg' => 'A marca foi removida com sucesso!'], 200);
    }
}
