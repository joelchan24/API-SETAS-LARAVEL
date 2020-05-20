<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instituciones extends Model
{
    //
    protected $fillable = ['nombre', 'correo','telefono','direccion'];
}
