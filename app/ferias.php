<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ferias extends Model
{
    //
    protected $fillable = ['nomFeria', 'descripcion','Fechainicio','Fechafin','lugar'];
}
