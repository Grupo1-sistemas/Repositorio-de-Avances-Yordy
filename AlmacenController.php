<?php

namespace App\Http\Controllers;

use App\Models\almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('almacen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('almacen.crear');
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
        /*$datosAlmacen = request()->all();*/
        $datosAlmacen = request()->except('_token');
        Almacen::insert($datosAlmacen);
        return response()->json($datosAlmacen);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function show(almacen $almacen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function edit(almacen $almacen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, almacen $almacen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\almacen  $almacen
     * @return \Illuminate\Http\Response
     */
    public function destroy(almacen $almacen)
    {
        //
    }
}
