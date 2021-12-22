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
                                                    <p class="description">
                                                        {{ $user->username }} <br>
                                                        {{ $user->email }} <br>
                                                        {{ $user->created_at }} <br>
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur earum excepturi omnis minima deserunt numquam, doloremque totam quasi nam, assumenda quas facere, ad itaque? Doloremque doloribus quae voluptas cumque qui.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('users.index') }}" class="btn btn-sm btn-success mr-3">Volver</a>
                                                <button class="btn btn-sm btn-primary">Editar</button>
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