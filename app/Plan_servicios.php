<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_servicios extends Model
{
    //
    protected $table = 'plan_servicios';
    protected $fillable = ['id_plan','id_servicio'];
}
