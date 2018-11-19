<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa_fisica extends Model
{
  protected $table = 'pessoa_fisica';
  protected $primaryKey = 'id_pessoa_fisica';
  protected $fillable = ['name','sobrenome' , 'data_de_nascimento','telefone','cpf','sexo','users_usuario_id'];
  public $timestamps = false;
}
