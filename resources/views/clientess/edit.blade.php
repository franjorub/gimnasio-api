@extends('layouts.layout')
@section('title', $cliente->nombre)
@section('content')
<h1>Editar Cliente</h1>
<div class="row">
        <div class="mx-auto col-sm-6">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Actualice los campos</h4>
                        </div>
                        <div class="card-body">
                        <form class="form" role="form" autocomplete="off" action="/clientes/{{$cliente->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                    <div class="col-lg-9">
                                    <input class="form-control" type="text" value="{{$cliente->nombre}}" name="nombre">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Apellido</label>
                                    <div class="col-lg-9">
                                    <input class="form-control" type="text" value="{{$cliente->apellido}}" name="apellido">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Cedula</label>
                                    <div class="col-lg-9">
                                    <input class="form-control" type="number" value="{{$cliente->cedula}}" name="cedula">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Correo</label>
                                    <div class="col-lg-9">
                                    <input class="form-control" type="email" value="{{$cliente->correo}}" name="correo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Fecha de nacimiento</label>
                                    <div class="col-lg-9">
                                    <input class="form-control" type="date" value="{{$cliente->fecha_nacimiento}}" name="fecha_nacimiento">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Direccion</label>
                                    <div class="col-lg-9">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="direccion">{{$cliente->direccion}}</textarea>
                                    </div>
                                </div>                          
                               
                                <div class="form-group row">
                                    
                                    <div class="col-lg">                                            
                                        <input type="submit" class="btn btn-primary btn-block" value="Crear">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->
        </div>
    </div>
@endsection