@extends('layouts.layout')
@section('title', 'Crear Servicio')
@section('content')
    <h1>Crear Servicio</h1>
    <div class="row">
            <div class="mx-auto col-sm-6">
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Nuevo Servicio</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" action="/servicio" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" value="Super Entrenamiento" name="nombre">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Descripcion</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
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