<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDetalhe extends Model
{
    protected $table = "produto_detalhes";
    protected $fillable = ['produto_id', 'comprimento', 'largura', 'altura', 'unidade_id'];

    public function item(){
        return $this->belongsTo("App\Models\Item", 'produto_id', 'id');
        // fk item_id
    }
}
