<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Departamento;
use App\Models\Trabajadore;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TrabajadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('trabajadore_index'), 403);

        $trabajadores = Trabajadore::paginate(4);
        return view('trabajadores.index', compact('trabajadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('trabajadore_create'), 403);
        
        $cargos = Cargo::get();
        $departamentos = Departamento::get();
        $users = User::get();
        // dd($permissions);
        return view('trabajadores.create', compact('cargos','departamentos','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
        }

        Trabajadore::create($request->all()+[
            'foto' => $image_name,
        ]);

        return redirect()->route('trabajadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajadore $trabajadore)
    {
        abort_if(Gate::denies('trabajadore_show'), 403);

        return view('trabajadores.show', compact('trabajadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajadore $trabajadore)
    {
        abort_if(Gate::denies('trabajadore_edit'), 403);

        $cargos = Cargo::get();
        $departamentos = Departamento::get();
        $users = User::get();
        // dd($role);
        return view('trabajadores.edit', compact('trabajadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajadore $trabajadore)
    {
        $trabajadore->update($request->all());

        return redirect()->route('trabajadores.index')->with('success', 'Trabajador actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajadore $trabajadore)
    {
        abort_if(Gate::denies('trabajadore_delete'), 403);
        
        $trabajadore->delete();
        return redirect()->route('trabajadores.index');
    }
}
