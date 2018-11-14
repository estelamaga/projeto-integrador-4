<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_pedido extends Model
{
  protected $table = 'item_pedido';
  protected $primaryKey = 'id_item_pedido';
  protected $fillable = ['quantidade','fk_pedido_id' , 'fk_produto_id'];
}
