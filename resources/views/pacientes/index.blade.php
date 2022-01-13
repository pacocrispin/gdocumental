@extends('layouts.main', ['activePage' => 'pacientes', 'titlePage' => 'Pacientes'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Paciente</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            @can('paciente_create')
                                            <a href="{{ route('pacientes.create') }}" class="btn btn-sm btn-facebook">Crear Paciente</a>
                                            @endcan
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Codigo</th>
                                                <th>Cedula</th>
                                                <th>Nombre</th>
                                                <th>Direccion</th>
                                                <th>Telefono</th>
                                                <th>Celular</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($pacientes as $paciente)
                                                    <tr>
                                                        <td>{{ $paciente->id }}</td>
                                                        <td>{{ $paciente->celula }}</td>
                                                        <td>{{ $paciente->codigo }}</td>
                                                        <td>{{ $paciente->nombre }}</td>
                                                        <td>{{ $paciente->direccion}}</td>
                                                        <td>{{ $paciente->telefono }}</td>
                                                        <td>{{ $paciente->celular }}</td>
                                                        <td class="td-actions text-right">
                                                            @can('paciente_show')
                                                            <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                            @endcan
                                                            @can('paciente_edit')
                                                            <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            @endcan
                                                            @can('paciente_destroy')
                                                            <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que desea eliminar Paciente?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>
                                                            @endcan
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $pacientes->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection