<?php

namespace App\Http\Controllers;

use App\ferias;
use Illuminate\Http\Request;

class FeriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ferias=ferias::orderBy('Fechainicio')->get();
        return $ferias;
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
     * @param  \App\ferias  $ferias
     * @return \Illuminate\Http\Response
     */
    public function show(ferias $ferias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ferias  $ferias
     * @return \Illuminate\Http\Response
     */
    public function edit(ferias $ferias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ferias  $ferias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ferias $ferias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ferias  $ferias
     * @return \Illuminate\Http\Response
     */
    public function destroy(ferias $ferias)
    {
        //
    }
}
