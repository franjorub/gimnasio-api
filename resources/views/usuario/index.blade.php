@extends('layouts.layout')
@section('title', 'Crear factura')
@section('content')
<h1>Login</h1>
<div class="row">
        <div class="mx-auto col-sm-6">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Login</h4>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" action="/login/auth" method="POST">
                                {{ csrf_field() }}
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
                                    <div class="col-lg">                                     
                                        <input type="submit" class="btn btn-primary btn-block" value="Iniciar Sesión">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->
        </div>
    </div>








@endsection