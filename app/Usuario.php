<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuario";
    protected $fillable = ['id','email','password','nombre','apellido','id_rol'];
}
