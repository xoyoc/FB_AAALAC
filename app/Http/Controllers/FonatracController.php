<?php

namespace App\Http\Controllers;

use App\fonatrac;
use App\paises;
use Carbon\Carbon;
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
        $fonatrac = new fonatrac;
        $fonatrac->fecha = Carbon::parse($request->get('fecha'));
        $fonatrac->hora = Carbon::parse($request->get('hora'));
        $fonatrac->nombre_buque = $request->get('nombre_buque');
        $fonatrac->bandera = $request->get('bandera');
        $fonatrac->viaje = $request->get('viaje');
        $fonatrac->terminal = $request->get('terminal');
        $fonatrac->movimiento = $request->get('movimiento');
        $fonatrac->save();
        // fonatrac::create($request->all());

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
        return view('fonatrac.show', compact('fonatrac'));
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
        return view('fonatrac.editar', compact('fonatrac'));
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
        $fonatrac = fonatrac::findOrFail($id);
        $fonatrac->fecha = Carbon::parse($request->get('fecha'));
        $fonatrac->hora = Carbon::parse($request->get('hora'));
        $fonatrac->nombre_buque = $request->get('nombre_buque');
        $fonatrac->bandera = $request->get('bandera');
        $fonatrac->viaje = $request->get('viaje');
        $fonatrac->terminal = $request->get('terminal');
        $fonatrac->movimiento = $request->get('movimiento');
        $fonatrac->save();
        return back()->with('flash', "Registro del ".$request->nombre_buque." se actualizó con exito..");
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
        $fonatrac->delete();
        return redirect()->route('fonatrac.index');
    }
}
