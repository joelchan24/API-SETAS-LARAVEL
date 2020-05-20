<?php

namespace App\Http\Controllers;

use App\JuegoCesto;
use Illuminate\Http\Request;

class JuegoCestoController extends Controller
{
   
    public function index()
    {
        $juego=JuegoCesto::all();
        return $juego;
    }

    public function create()
    {
        //
    }

   
    public function CrearJuego(Request $request)
    {
        $JuegoCesto = new JuegoCesto();
        $JuegoCesto->jugador = $request->jugador;
        $JuegoCesto->puntos = $request->puntos;
        $JuegoCesto->GOP = $request->GOP;

      
        if ( ! $JuegoCesto->save())
        {
          App::abort(500, 'Error');
        }        
        return response()->json(['Status'=>'Guardado'],200);

    }
   
    public function JuegosJugador(Request $request)
    {
        $juego=JuegoCesto::where([
            'jugador' => $request->jugador,
           
     ])->get();
        return $juego;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JuegoCesto  $juegoCesto
     * @return \Illuminate\Http\Response
     */
    public function edit(JuegoCesto $juegoCesto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JuegoCesto  $juegoCesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JuegoCesto $juegoCesto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JuegoCesto  $juegoCesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(JuegoCesto $juegoCesto)
    {
        //
    }
}
