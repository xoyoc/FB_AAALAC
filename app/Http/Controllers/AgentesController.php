<?php

namespace App\Http\Controllers;

use App\Agente;
use Illuminate\Http\Request;

class AgentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agentes = agente::get();

        return view('agentes.index', compact('agentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('agentes.crear');
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

        $this->validate($request,[
            'patente' => 'required',
            'nombreaa' => 'required',
            'email' => ['required', 'email'],
            'fecha_inscripcion' => ['required', 'date']
        ]);
        
        $agente = new agente;
        $agente->patente = $request->get('patente');
        $agente->nombreaa = $request->get('nombreaa');
        $agente->email = $request->get('email');
        $agente->fecha_inscripcion = $request->get('fecha_inscripcion');
        $agente->curp = $request->get('curp');
        if ($request->hasFile('expediente'))
        {
            $agente->expediente = $request->file('expediente')->store('aa_expedientes');
        }
        $agente->carta_aaalac = $request->get('carta_aaalac');
        $agente->carta_referencia = $request->get('carta_referencia');
        $agente->copia_acta = $request->get('copia_acta');
        $agente->copia_publicacion = $request->get('copia_publicacion');
        $agente->copia_no_ade = $request->get('copia_no_ade');
        $agente->copia_poder = $request->get('copia_poder');
        $agente->pago = $request->get('pago');
        $agente->estatus = $request->get('estatus');
        $agente->save();

        // agente::create($request->all());


        return back()->with('flash', "Agente Aduanal ".$request->nombreaa." se agrego con exito..");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\agentes  $agentes
     * @return \Illuminate\Http\Response
     */
    public function show(Agente $agente)
    {
        //

        return view('agentes.show', compact('agente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\agentes  $agentes
     * @return \Illuminate\Http\Response
     */
    public function edit(Agente $agente)
    {
        //

        return view('agentes.editar', compact('agente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\agentes  $agentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        agente::findOrFail($id)->update($request->all());
        
        if ($request->hasFile('expediente'))
        {
            $agente->expediente = $request->file('expediente')->store('aa_expedientes');
            $agente->save();
        }        

       return back()->with('flash', "Agente Aduanal ".$request->nombreaa." se actualizó con exito..");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\agentes  $agentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agente $agente)
    {
        //
        $agente->delete();

        return redirect()->route('agentes.index');
    }
}
