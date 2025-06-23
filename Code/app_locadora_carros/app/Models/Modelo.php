<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $fillable = ['marca_id', 'nome', 'imagem', 'numero_portas', 'lugares', 'air_bag', 'abs'];

    public function rules() {
        return [
            'marca_id' => 'exists:marcas,id',
            'nome' => 'required|unique:modelos,nome,'.$this->id.'|min:3',
            'imagem' => 'required|file|mimes:png,jpeg,jpg',
            'numero_portas' => 'required|interger|digits_between:1,5', //(1, 2, 3, 4, 5)
            'lugares' => 'required|interger|digits_between:1,20',
            'air_bag' => 'required|boolean',
            'abs' => 'required|boolean' // (true, false, 1, 0, "1", "0")
        ];
    }
}
