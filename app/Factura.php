<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $table = 'factura';
    protected $fillable = ['id','fecha','id_contrato','id_usuario'];
}
