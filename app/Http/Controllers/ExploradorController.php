<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\User;
use App\Models\Carpeta;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;
use App\Models\Explorador;
use Illuminate\Http\Request;

class ExploradorController extends Controller
{
    
    public function index()
    {
        abort_if(Gate::denies('explorador_index'), 403);
        //$carpetas = Carpeta::paginate(5);
        $carpetas = DB::table('carpetas')
        ->join('users', 'users.id', '=', 'creado_por_id')
        ->select('carpetas.*',
                 'users.name as usuario',
                )
        ->orderBy('id')
        ->paginate(5);
        return view('explorador.index', compact('carpetas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Explorador  $explorador
     * @return \Illuminate\Http\Response
     */
    public function show(Carpeta $explorador)
    {
        abort_if(Gate::denies('explorador_show'), 403);
        //$carpetas = Carpeta::paginate(5);
        $id = $explorador->id;
        $documentos = DB::table('documentos')
        ->join('users', 'users.id', '=', 'creado_por_id')
        ->join('carpetas', 'carpetas.id', '=', 'carpeta_id')
        ->select('carpetas.nombre as carpeta',
                 'users.name as usuario',
                 'documentos.*'
                )
        ->where('carpeta_id','=',$id)        
        ->orderBy('documentos.id')
        ->paginate(5);
        
        $carpeta = Carpeta::find($id);

        return view('explorador.show', compact('documentos', 'carpeta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Explorador  $explorador
     * @return \Illuminate\Http\Response
     */
    public function edit(Explorador $explorador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Explorador  $explorador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Explorador $explorador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Explorador  $explorador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Explorador $explorador)
    {
        //
    }
}
