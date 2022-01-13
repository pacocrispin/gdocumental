<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\Carpeta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class CarpetaController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('carpeta_index'), 403);
        //$carpetas = Carpeta::paginate(5);
        $carpetas = DB::table('carpetas')
        ->join('users', 'users.id', '=', 'creado_por_id')
        ->select('carpetas.*',
                 'users.name as usuario',
                )
        ->orderBy('id')
        ->paginate(5);
        return view('carpetas.index', compact('carpetas'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('carpeta_create'), 403);

        $creado_por_id = Auth::id();
        return view('carpetas.create', compact('creado_por_id'))->with('success', 'Carpeta creada correctamente');
        
    }


    public function store(Request $request)
    {
        $creado_por_id= Auth::id();
        $request->merge(['creado_por_id'=>$creado_por_id]);
        Carpeta::create($request->all());

        return redirect()->route('carpetas.index');
    }


    public function show(Carpeta $carpeta)
    {
        abort_if(Gate::denies('carpeta_show'), 403);

        return view('carpetas.show', compact('carpeta'));
    }

    public function edit(Carpeta $carpeta)
    {
        abort_if(Gate::denies('carpeta_edit'), 403);

        return view('carpetas.edit', compact('carpeta'));
    }


    public function update(Request $request, Carpeta $carpeta)
    {
        $carpeta->update($request->all());

        return redirect()->route('carpetas.index')->with('success', 'Carpeta actualizada correctamente');
    }


    public function destroy(Carpeta $carpeta)
    {
        abort_if(Gate::denies('carpeta_destroy'), 403);

        $carpeta->delete();

        return redirect()->route('carpetas.index');
    }
}
