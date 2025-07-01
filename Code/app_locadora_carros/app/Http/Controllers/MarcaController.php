<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\Storage;
use App\Models\Marca;
use Illuminate\Http\Request;
use App\Repositories\MarcaRepository;

class MarcaController extends Controller
{
    private $marca;
    public function __construct(Marca $marca) {
        $this->marca = $marca;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $marcaRepository = new MarcaRepository($this->marca);

        if($request->has('atributos_modelos')) {
            $atributos_modelos = 'modelos:id,'.$request->atributos_modelos;
            $marcaRepository->selectAtributosRegistroRelacionados($atributos_modelos);
        } else {
            $marcaRepository->selectAtributosRegistroRelacionados('modelos');
        }

        if($request->has('filtro')) {
            $marcaRepository->filtro($request->filtro);
        }

        if($request->has('atributos')) {
            $marcaRepository->selectAtributos($request->atributos);
        }

        return response()->json($marcaRepository->getResultado(), 200);

        // -------------------------------------------------------------------------
        
        /*
        $marcas = array();

        if($request->has('atributos_modelos')) {
            $atributos_modelos = $request->atributos_modelos;
            $marcas = $this->marca->with('modelos:id,'.$atributos_modelos);
        } else {
            $marcas = $this->marca->with('modelos');
        }

        if($request->has('filtro')) {

            // dd($request->filtro);
            $filtros = explode(';', $request->filtro);
            // dd($filtros);
            foreach($filtros as $key => $condicao) {
                // dd(explode(':',$request->filtro));
                $c = explode(':',$condicao);
                $marcas = $marcas->where($c[0], $c[1], $c[2]);
            }
        }

        if($request->has('atributos')) {
            $atributos = $request->atributos;
            // dd($atributos_marca);
            $marcas = $marcas->selectRaw($atributos)->get();
            
            //'id', 'nome', 'imagem'
            //"id,nome,imagem"

            // dd($request->atributos);
        } else {
            $marcas = $marcas->get();
        }


        // $marcas = Marca::all();
        // $marcas = $this->marca->with('modelos')->get();
        return response()->json($marcas, 200);
        */
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
        //nome
        //imagem
        $request->validate($this->marca->rules(), $this->marca->feedback());
        //stateless

        // dd($request->nome);
        // dd($request->get('nome'));
        // dd($request->input('nome'));

        // dd($request->imagem);
        // dd($request->file('imagem'));
        $imagem = $request->file('imagem');
        $imagem_urn = $imagem->store('imagens', 'public');
        // dd($imagem_urn);

        $marca = $this->marca->create([
            'nome' => $request->nome,
            'imagem' => $imagem_urn
        ]);

        // $marca->nome = $request->nome;
        // $marca->imagem = $imagem_urn;
        // $marca->save();

        return response()->json($marca, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $marca = $this->marca->with('modelos')->find($id);
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

        // dd($request->nome);
        // dd($request->file('imagem'));

        // dd($marca);

        if($marca === null) {
            return response()->json(['erro' => 'Impossievel realizar a atualização. Recurso solicitado não existe.'], 404);
        }

        // dd($request->method());
        if($request->method() === 'PATCH') {

            $regrasDinamicas = array();

            // $teste = '';

            // percorrendo todas as regras no Model
            // dd($marca->rules());
            foreach($marca->rules() as $input => $regras) {
                // $teste .= 'Input: '.$input.' | Regras: '.$regras.'<br>';

                //coletar apenas a regras aplicaveis aos parametros parcias da requisição PATCH
                if(array_key_exists($input, $request->all())) {
                    $regrasDinamicas[$input] = $regras;       
                }
            }
            // dd($regrasDinamicas);
            // return $teste;

            $request->validate($regrasDinamicas, $marca->feedback());
        } else {
            $request->validate($marca->rules(), $marca->feedback());
        }

        // remove o arquivo antigo, caso um novo arquivo tenha sido enviado no request
        if($request->file('imagem')) {
            Storage::disk('public')->delete($marca->imagem);
        }

        $imagem = $request->file('imagem');
        $imagem_urn = $imagem->store('imagens', 'public');
        // dd($imagem_urn);

        //preencher o objeto $marca com os dados do request
        // dd($request->all());
        $marca->fill($request->all());
        $marca->imagem = $imagem_urn;
        // dd($marca->getAttributes());
        $marca->save();

        /*
        $marca->update([
            'nome' => $request->nome,
            'imagem' => $imagem_urn
        ]);
        */

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

        // remove o arquivo antigo
        Storage::disk('public')->delete($marca->imagem);

        
        $marca->delete();
        return response()->json(['msg' => 'A marca foi removida com sucesso!'], 200);
    }
}
