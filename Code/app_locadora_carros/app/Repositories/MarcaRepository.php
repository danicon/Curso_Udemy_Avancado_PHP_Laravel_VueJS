<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class MarcaRepository {

    public $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function selectAtributosRegistroRelacionados($atributos) {
        $this->model = $this->model->with($atributos);
        //a query está sendo montada
    }

    public function filtro($filtros) {
        $filtros = explode(';', $filtros);
        // dd($filtros);
        foreach($filtros as $key => $condicao) {
            // dd(explode(':',$request->filtro));
            $c = explode(':',$condicao);
            $this->model = $this->model->where($c[0], $c[1], $c[2]);
            //a query está sendo montada
        }
    }

    public function selectAtributos($atributos) {
        $this->model = $this->model->selectRaw($atributos);
    }

    public function getResultado() {
        return $this->model->get();
    }

}


?>