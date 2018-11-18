<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //
    protected $fillable = ['id','fecha','monto','descripcion','id_factura'];
}
