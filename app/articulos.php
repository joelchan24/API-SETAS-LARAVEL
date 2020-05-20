<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articulos extends Model
{
    // se declara una variable  con los campos de la BD
    protected $fillable = ['nombreEQ', 'urlamazon','urlimg'];
}
