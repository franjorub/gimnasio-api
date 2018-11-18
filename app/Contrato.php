<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //
    protected $fillable = ['id', 'fecha', 'monto_inscripcion','id_cliente', 'id_plan'];
}
