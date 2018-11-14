<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
  protected $table = 'categorias';
  protected $primaryKey = 'categoria_id';
  protected $fillable = ['nome','descricao'];
}
