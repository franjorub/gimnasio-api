<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //
    protected $fillable = ['id', 'fecha', 'monto_inscripcion','cedula_cliente',];
}
