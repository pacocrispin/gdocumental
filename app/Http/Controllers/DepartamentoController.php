<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('departamento_index'), 403);

        $departamentos = Departamento::paginate(5);
        return view('departamentos.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('departamento_create'), 403);

        return view('departamentos.create')->with('success', 'Departamento creado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Departamento::create($request->all());

        $mensaje = $request; 
        $ip = request()->server();
        $datauser =auth()->user();
        Log::info( 'IP DEL CLIENTE:'. $ip['REMOTE_ADDR'] . ' CLIENTE: '. $datauser->name . ' DESDE NAVEGADOR:'.$ip['HTTP_USER_AGENT'] . ' DESCRIPCIÓN: Departamento creado: con código' .$mensaje->codigo . ' ' . $mensaje->nombre );
        
        return redirect()->route('departamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        abort_if(Gate::denies('departamento_show'), 403);

        return view('departamentos.show', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        abort_if(Gate::denies('departamento_edit'), 403);

        return view('departamentos.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        $departamento->update($request->all());

        return redirect()->route('departamentos.index')->with('success', 'Departamento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        abort_if(Gate::denies('departamento_destroy'), 403);

        $mensaje = $departamento; 
        $ip = request()->server();
        $datauser =auth()->user();
        Log::info( 'IP DEL CLIENTE:'. $ip['REMOTE_ADDR'] . ' CLIENTE: '. $datauser->name . ' DESDE NAVEGADOR:'.$ip['HTTP_USER_AGENT'] . ' DESCRIPCIÓN: Departamento eliminado: con id' .$mensaje->id . ' ' . $mensaje->codigo . ' ' . $mensaje->nombre );
        
        $departamento->delete();
        return redirect()->route('departamentos.index');
    }
}
