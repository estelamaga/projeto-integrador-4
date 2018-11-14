<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $primaryKey = 'produto_id';
    protected $fillable = ['cor','tamanho','SKU','EAN','preco','estoque','nome','descricao',
        'peso','largura','altura','comprimento','data_validade','lote_num','tipo_de_produto',
        'fornecedor','fk_categoria_id'];
}
