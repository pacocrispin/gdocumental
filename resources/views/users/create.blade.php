@extends('layouts.main',['activePage' => 'users','titlePage' => 'Nuevo Usuario'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('users.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Usuario</h4>
                                <p class="card-category">Ingresar Datos</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="name" placeholder="Ingrese su Nombre" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="username" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="username" placeholder="Ingrese su Nombre de Usuario">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" placeholder="Ingrese su Correo">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                                    </div>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <!--End Footer-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection