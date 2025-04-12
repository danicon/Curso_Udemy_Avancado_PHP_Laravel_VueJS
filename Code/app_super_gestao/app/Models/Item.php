<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id', 'fornecedor_id'];

    public function itemDetalhe() {
        return $this->hasOne('App\Models\ItemDetalhe', 'produto_id', 'id');
        // fk item_id
    }

    public function fornecedor() {
        return $this->belongsTo('App\Models\Fornecedor');
    }

    public function pedidos() {
        return $this->belongsToMany('App\Models\Pedido', 'pedidos_produtos', 'produto_id', 'pedido_id');
    }
}
