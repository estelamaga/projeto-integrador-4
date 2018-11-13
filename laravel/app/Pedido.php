<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  protected $table = 'pedido';
  protected $primaryKey = 'pedido_id , 'fk_pagamento_id';
}
