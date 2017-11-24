<?php

namespace App\Http\Controllers;

use App\Agencia;
use App\Agente;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agencias = Agencia::get();
        return view('agencias.index', compact('agencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $agentes = agente::get();
        return view('agencias.crear', compact('agentes'));
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
        Agencia::create($request->all());

        if ($request->hasFile('logotipo'))
        {
            $agencia->logotipo = $request->file('logotipo')->store('aa_logotipos');
            $agencia->save();
        }
        return redirect()->route('agencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function show(Agencia $agencia)
    {
        //

        return view('agencia.show', compact('agencia'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Agencia $agencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agencia $agencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agencia $agencia)
    {
        //
        $agencia->delete();

        return redirect()->route('agencia.index');
    }
}
