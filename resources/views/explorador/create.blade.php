@extends('layouts.main',['activePage' => 'explorador','titlePage' => 'Nueva Carpeta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('carpetas.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Carpeta</h4>
                                <p class="card-category">Ingresar Datos</p>
                            </div>
                            <div class="card-body">
                                {{--@if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif--}}
                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre de la carpeta</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el Nombre" value="{{old('nombre')}}" autofocus>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="estado" class="col-sm-2 col-form-label">Estado de la Carpeta</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="estado" placeholder="Ingrese el Estado de la Carpeta" value="{{old('estado')}}">
                                        @if ($errors->has('estado'))
                                            <span class="error text-danger" for="input-estado">{{ $errors->first('estado') }}</span>
                                        @endif
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