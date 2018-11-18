<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'cliente';
    protected $fillable = ['cedula', 'apellido', 'nombre','telefono','fecha_nacimiento','correo','direccion'];
}
