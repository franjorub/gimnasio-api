@extends('layouts.layout')
@section('title', 'Crear cliente')
@section('content')
    <h1>Crear cliente</h1>
    <div class="row">
            <div class="mx-auto col-sm-6">
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Nuevo usuario</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" action="/clientes" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="Jane" name="nombre">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Apellido</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="Bishop" name="apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Cedula</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="number" value="3333" name="cedula">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Correo</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" value="email@gmail.com" name="correo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Fecha de nacimiento</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="date" value="" name="fecha_nacimiento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Direccion</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="direccion"></textarea>
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