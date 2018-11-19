<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa_juridica extends Model
{
  protected $table = 'pessoa_fisica';
  protected $primaryKey = 'id_pessoa_fisica';
  protected $fillable = ['nome_fantasia','cnpj','users_usuario_id'];
  public $timestamps = false;
}
