<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    //
    protected $table = 'contrato';
    protected $fillable = ['id', 'fecha', 'monto_inscripcion','id_cliente',];
}
