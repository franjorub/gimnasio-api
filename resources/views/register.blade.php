@extends('layouts.layout')
@section('title', 'Crear factura')
@section('content')
    
    <h1>Registro de usuario</h1>
    <div class="row">
            <div class="mx-auto col-sm-6">
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Nuevo usuario</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" method="POST" autocomplete="off" action="{{ url('/usuario') }}">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" placeholder="Nombre" name="nombre">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Apellido</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" placeholder="Apellido" name="apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Correo</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="email" placeholder="email@gmail.com"name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" placeholder="Contraseña" value="" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Confirmar contraseña</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="password" placeholder="Contraseña" value="" name="password_confirm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Rol</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="rol">
                                            	<option value="1">Admin</option>
                                            	<option value="2">User</option>
                                            </select>
                                        </div>
                                    </div>                          
                                   
                                    <div class="form-group row">
                                        
                                        <div class="col-lg">                                            
                                            <input type="submit" class="btn btn-primary btn-block" value="Crear Usuario">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /form user info -->
            </div>
    </div>
@endsection