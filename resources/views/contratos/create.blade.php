@extends('layouts.layout')
@section('title', 'Crear cliente')
@section('content')
    <h1>Crear cliente</h1>
    <div class="row">
            <div class="mx-auto col-sm-6">
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Nuevo Contrato</h4>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" action="/contratos" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Fecha</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="date" value="" name="fecha">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Monto Inscipcion</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="number" value="" name="monto_inscripcion">
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