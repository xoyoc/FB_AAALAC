<?php

namespace App\Http\Controllers;

use App\fonatrac;
use App\paises;
use Illuminate\Http\Request;

class FonatracController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fonatrac = fonatrac::get();

        return view('fonatrac.index', compact('fonatrac'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $paises = paises::get();

        return view('fonatrac.crear', compact('paises'));
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
        fonatrac::create($request->all());

        return back()->with('flash', "Movimiento del ".$request->nombre_buque." se agrego con exito..");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fonatrac  $fonatrac
     * @return \Illuminate\Http\Response
     */
    public function show(fonatrac $fonatrac)
    {
        //
        return view('fonatrac.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fonatrac  $fonatrac
     * @return \Illuminate\Http\Response
     */
    public function edit(fonatrac $fonatrac)
    {
        //
        return view('fonatrac.editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fonatrac  $fonatrac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fonatrac $fonatrac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fonatrac  $fonatrac
     * @return \Illuminate\Http\Response
     */
    public function destroy(fonatrac $fonatrac)
    {
        //
    }
}
