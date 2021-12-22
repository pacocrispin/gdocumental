@extends('layouts.main', ['activePage' => 'users', 'titlePage' => ''])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Usuarios</h4>
                                </div>
                                <div class="card-body">
                                    @if (session('success'))
                                    <div class="alert alert-success" role="success">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Crear Usuario</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="text-primary">
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Correo</th>
                                                <th>Nombre de Usuario</th>
                                                <th>Fecha Creacion</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->username }}</td>
                                                        <td>{{ $user->created_at }}</td>
                                                        <td class="td-actions text-right">
                                                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info"><i class="material-icons">visibility</i></a>
                                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Seguro que desea eliminar Ususario?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="button">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{ $users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection