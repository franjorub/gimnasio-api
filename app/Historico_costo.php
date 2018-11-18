<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico_costo extends Model
{
    //
    protected $fillable = ['id','fecha_inicio','fecha_termino','costo','id_plan','id_servicio'];
}
