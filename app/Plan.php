<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'plan';
    protected $fillable = ['id','nombre', 'descripcion'];
}
