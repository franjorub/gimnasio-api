@extends('layouts.layout')
@section('title', 'Login')
@section('content')

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-danger mb-4">Komplex GYM</h2>
                <div class="row">
                    <div class="col-md-6 mx-auto">
    
                        <!-- form card login -->
                        <div class="card rounded-0">
                            <div class="card-header">
                                <h3 class="mb-0">Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="post" action="/authenticate">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="uname1">Correo</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="email" id="uname1" required="">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Contrasena</label>
                                        <input type="password" name="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                    </div>
                                    <div>
                                        <label class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input">
                                          <span class="custom-control-indicator"></span>
                                          <span class="custom-control-description small text-dark">Recuerdame en esta Computadora</span>
                                        </label>
                                    </div>
                                    <a href="/register" class="btn btn-dark float-left">Registrar</a>
                                    <button type="submit" class="btn btn-danger btn-lg float-right" id="btnLogin">Entrar</button>
                                </form>
                            </div>
                            <!--/card-block-->
                        </div>
                        <!-- /form card login -->
    
                    </div>
    
    
                </div>
                <!--/row-->
    
            </div>
            <!--/col-->
        </div>
        <!--/row-->
 
@endsection