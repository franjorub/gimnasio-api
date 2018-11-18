<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = ['id','cedula', 'apellido', 'nombre','telefono','fecha_nacimiento','correo','direccion'];
}
