@extends('layouts.main',['activePage' => 'etiquetas','titlePage' => 'Nueva etiqueta'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('etiquetas.store')}}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Etiqueta</h4>
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
                                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion de la Etiqueta</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="descripcion" placeholder="Ingrese la Descripcion" value="{{old('descripcion')}}">
                                        @if ($errors->has('descripcion'))
                                            <span class="error text-danger" for="input-descripcion">{{ $errors->first('descripcion') }}</span>
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