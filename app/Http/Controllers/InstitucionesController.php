<?php

namespace App\Http\Controllers;

use App\instituciones;
use Illuminate\Http\Request;

class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones=instituciones::all();
        return $instituciones;
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
     * @param  \App\instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function show(instituciones $instituciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function edit(instituciones $instituciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, instituciones $instituciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\instituciones  $instituciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(instituciones $instituciones)
    {
        //
    }
}
