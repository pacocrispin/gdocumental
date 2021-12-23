<?php

namespace App\Http\Controllers;

use App\Http\Requests\CargoCreateRequest;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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

        $cargo->delete();

        return redirect()->route('cargos.index');
    }
}
