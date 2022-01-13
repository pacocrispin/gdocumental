<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\Etiqueta;
use App\Models\DetalleEtiqueta;
use App\Models\Carpeta;
use App\Models\User;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Facades\Log;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('documento_index'), 403);
        //$carpetas = Carpeta::paginate(5);
        $documentos = DB::table('documentos')
        ->join('users', 'users.id', '=', 'creado_por_id')
        ->join('carpetas', 'carpetas.id', '=', 'carpeta_id')
        ->select('documentos.*',
                 'users.name as usuario',
                 'carpetas.nombre as carpeta',
                )
        ->orderBy('id')
        ->paginate(5);
        return view('documentos.index', compact('documentos'));
        
        
    }

    public function create()
    {
        abort_if(Gate::denies('documento_create'), 403);
        $documentos = \App\Models\Documento::get()->pluck('id');
        $carpetas         = Carpeta::orderBy('nombre', 'asc')->get();
        $creado_por_id = Auth::id();
        $etiquetas = Etiqueta::All();
        return view('documentos.create', compact('creado_por_id','documentos', 'carpetas','etiquetas'))->with('success', 'Documento creado correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $creado_por_id= Auth::id();
        $request->merge(['creado_por_id'=>$creado_por_id]);
        $uuid = Str::uuid()->toString();
        $request->merge(['uuid'=>$uuid]);

        $input = $request->all();
        $documento = Documento::create($input);
        
        /*if($request->hasFile('archivo') && $request->file('archivo')->isValid()){
            $documento->addMediaFromRequest('archivo')->toMediaCollection('archivo');
        }*/
        $mediaItems = $documento->getMedia();
        
        //$documento->addMedia($request->file('file'))->preservingOriginal()->toMediaCollection('files');
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $documento->addMedia($file)->toMediaCollection();
        }
        
        foreach($input["etiqueta_id"] as $key => $value){
            DetalleEtiqueta::create([
                "etiqueta_id"=>$value,
                "documento_id"=>$documento->id
            ]);
        }

        $mensaje = $request; 
        $ip = request()->server();
        $datauser =auth()->user();
        Log::info( 'IP DEL CLIENTE:'. $ip['REMOTE_ADDR'] . ' CLIENTE: '. $datauser->name . ' DESDE NAVEGADOR:'.$ip['HTTP_USER_AGENT'] . ' DESCRIPCIÓN: Documento creado: con nombre ' .$mensaje->nombre . ' ' . $mensaje->numero );
        
        return redirect()->route('documentos.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        
        abort_if(Gate::denies('documento_show'), 403);
        $file = $documento->getFirstMedia();
        $file_name = $file->file_name;
        return view('documentos.show', compact('documento', 'file','file_name'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        abort_if(Gate::denies('documento_edit'), 403);
        $carpetas = Carpeta::All();

        return view('documentos.edit', compact('documento', 'carpetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        $documento->update($request->all());

        $mensaje = $documento; 
        $ip = request()->server();
        $datauser =auth()->user();
        Log::info( 'IP DEL CLIENTE:'. $ip['REMOTE_ADDR'] . ' CLIENTE: '. $datauser->name . ' DESDE NAVEGADOR:'.$ip['HTTP_USER_AGENT'] . ' DESCRIPCIÓN: Documento actualizado: con id ' .$mensaje->id . ' '  .$mensaje->nombre . ' ' . $mensaje->numero );
        
        return redirect()->route('documentos.index')->with('success', 'Documento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        abort_if(Gate::denies('documento_destroy'), 403);

        $mensaje = $documento; 
        $ip = request()->server();
        $datauser =auth()->user();
        Log::info( 'IP DEL CLIENTE:'. $ip['REMOTE_ADDR'] . ' CLIENTE: '. $datauser->name . ' DESDE NAVEGADOR:'.$ip['HTTP_USER_AGENT'] . ' DESCRIPCIÓN: Documento eliminado: con id ' .$mensaje->id . ' ' .$mensaje->nombre . ' ' . $mensaje->numero );
        
        $documento->delete();
        return redirect()->route('documentos.index')->with('success', 'Documento eliminado correctamente');
    }

    
}
