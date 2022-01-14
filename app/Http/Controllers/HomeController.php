<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\User;
use App\Models\Paciente;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cantidadDocumentos = Documento::count();
        $ultimoUsuarioCreado = User::all()->last();
        $ultimoDocumentoCreado = Documento::all()->last();
        $ultimoPacienteCreado = Paciente::all()->last();
    

        return view('home', compact('cantidadDocumentos','ultimoUsuarioCreado','ultimoDocumentoCreado','ultimoPacienteCreado'));
    }
}
