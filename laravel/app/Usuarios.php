<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
  protected $table = 'usuarios';
  protected $primaryKey = 'usuario_id';
  protected $fillable = [ 'nome','sobrenome','data_de_nascimento','telefone','email','senha','cpf_cnpj','sexo'];
  public $timestamps = false;
}
