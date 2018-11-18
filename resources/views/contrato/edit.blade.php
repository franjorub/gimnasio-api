@extends('layouts.layout')
@section('title', $contrato->nombre)
@section('content')
<h1>Editar Contrato</h1>
<div class="row">
        <div class="mx-auto col-sm-6">
                    <!-- form user info -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Actualice los campos</h4>
                        </div>
                        <div class="card-body">
                        <form class="form" role="form" autocomplete="off" action="/contrato/{{$contrato->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label">Fecha</label>
                                    <div class="col-lg-9">
                                    <input class="form-control" type="date" value="{{$contrato->fecha}}" name="fecha">
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Monto Inscipcion</label>
                                        <div class="col-lg-9">
                                        <input class="form-control" type="number" value="{{$contrato->monto_inscripcion}}" name="monto_inscripcion">
                                        </div>
                                    </div>
                                <div class="form-group row">
                                    
                                    <div class="col-lg">                                            
                                        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form user info -->
        </div>
    </div>
@endsection