<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    //
    protected $fillable = ['id', 'fecha', 'accion', 'id_usuario'];
}
