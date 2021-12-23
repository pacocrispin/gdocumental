@extends('layouts.main',['activePage' => 'cargos','titlePage' => 'Nuevo Cargo'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('cargos.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Cargo</h4>
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
                                    <label for="codigo" class="col-sm-2 col-form-label">Codigo</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="codigo" placeholder="Ingrese su Codigo" value="{{old('codigo')}}" autofocus>
                                        @if ($errors->has('codigo'))
                                            <span class="error text-danger" for="input-codigo">{{ $errors->first('codigo') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre de Cargo</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el Nombre del Cargo" value="{{old('nombre')}}">
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
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