<?php

namespace App\Http\Controllers;

use App\setas;
use Illuminate\Http\Request;

class SetasController extends Controller
{
   
    public function index()
    {
        $setas=setas::all();
        return $setas;
    }
    public function GetJuego()
    {
        $setas=setas::all()->random(10);
        return $setas;
    }

 

    
    public function GetComestibles()
    {
        $setas=setas::where([
            'tipo' => 'COM',
           
     ])->get();
        return $setas;
    }
    public function GetToxicos()
    {
        $setas=setas::where([
            'tipo' => 'TOX',
           
     ])->get();
        return $setas;
    }

    public function GetSeta(Request $request)
    {
        $setas=setas::where([
            'id' => $request->id,
           
     ])->get();
        return $setas;
    }

   
}
