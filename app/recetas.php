<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recetas extends Model
{
    //
    protected $fillable = ['nombre', 'descripcion', 'urlFile'];
}
