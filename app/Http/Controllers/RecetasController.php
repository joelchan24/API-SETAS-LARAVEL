<?php

namespace App\Http\Controllers;

use App\recetas;
use Illuminate\Http\Request;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas=recetas::all();
        return $recetas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function show(recetas $recetas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function edit(recetas $recetas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recetas $recetas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function destroy(recetas $recetas)
    {
        //
    }
}
