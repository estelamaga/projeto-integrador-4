<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Password_reset extends Model
{
    protected $table = 'password_reset';
    protected $primaryKey = 'id_password_resets';
    protected $fillable = ['email'];
    protected $hidden = ['token'];
    public $timestamps = false;
}
