<?php

namespace App\Http\Controllers;

use App\Http\Requests\CargoCreateRequest;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class CargoController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('cargo_index'), 403);

        $cargos = Cargo::paginate(5);
        return view('cargos.index', compact('cargos'));
    }

    public function create()
    {
        abort_if(Gate::denies('cargo_create'), 403);

        return view('cargos.create')->with('success', 'Cargo creado correctamente');
    }

    public function store(Request $request)
    {
        Cargo::create($request->all());

        $mensaje = $request;
        $ip = request()->server();
        $datauser =auth()->user();
        Log::info( 'IP DEL CLIENTE:'. $ip['REMOTE_ADDR'] . ' CLIENTE: '. $datauser->name . ' DESDE NAVEGADOR:'.$ip['HTTP_USER_AGENT'] . ' DESCRIPCIÓN: Cargo creado: ' . $mensaje->codigo . ' ' . $mensaje->nombre );
        

        return redirect()->route('cargos.index');
    }

    public function show(Cargo $cargo)
    {
        abort_if(Gate::denies('cargo_show'), 403);

        return view('cargos.show', compact('cargo'));
    }

    public function edit(Cargo $cargo)
    {
        abort_if(Gate::denies('cargo_edit'), 403);

        return view('cargos.edit', compact('cargo'));
    }

    public function update(Request $request, Cargo $cargo)
    {
        $cargo->update($request->all());

        return redirect()->route('cargos.index')->with('success', 'Cargo actualizado correctamente');
    }

    public function destroy(Cargo $cargo)
    {
        abort_if(Gate::denies('cargo_destroy'), 403);

        $mensaje = $cargo;
        $ip = request()->server();
        $datauser =auth()->user();
        Log::info( 'IP DEL CLIENTE:'. $ip['REMOTE_ADDR'] . ' CLIENTE: '. $datauser->name . ' DESDE NAVEGADOR:'.$ip['HTTP_USER_AGENT'] . ' DESCRIPCIÓN: Cargo eliminado con id ' .$mensaje->id . ' ' . $mensaje->codigo . ' ' . $mensaje->nombre );
        
        $cargo->delete();
        return redirect()->route('cargos.index');
    }
}
