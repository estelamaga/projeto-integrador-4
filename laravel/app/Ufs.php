<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UFS extends Model
{
  protected $table = 'ufs';
  protected $primaryKey = 'uf_id';
  protected $fillable = ['nome','sigla'];
}
