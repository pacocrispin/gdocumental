@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del Usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="card-title">Usuarios</div>
                            <p class="card-category">Vista detallada del Usuario: {{ $user->name }}</p>
                        </div>
                        <!--body-->
                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    <a href="#" class="d-flex">
                                                        <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                                                        <h5 class="title mx-3">{{ $user->name }}</h5>
                                                    </a>
                                                </div>
                                            </p>
                                            <div class="card-text">
                                                <p class="text-center mb-1"><u>Datos:</u></p>
                                                <b>ID user: </b> 
                                                    {{ $user->id }} <br>
                                                <b>Nombre:</b> 
                                                    {{ $user->name }} <br>
                                                <b>Email:</b> 
                                                    {{ $user->email }} <br>
                                                <b>Fecha creación: </b>
                                                    {{ $user->created_at }} <br>
                                                <b>Fecha actualización: </b>
                                                    {{ $user->updated_at }} <br>
                                                <b>Roles activos:</b>
                                                <td>                                                    
                                                    @forelse ($user->roles as $role)
                                                        <span class="badge rounded-pill bg-info text-white">{{ $role->name }}</span>
                                                    @empty
                                                        <span class="badge badge-danger bg-danger">Sin roles</span>
                                                    @endforelse
                                                </td>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary mr-3">Editar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection