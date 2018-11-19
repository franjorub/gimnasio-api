@extends('layouts.layout')
@section('title', $plan->nombre)
@section('content')

        <h1>Editar Plan</h1>
        <div class="row">
                <div class="mx-auto col-sm-6">
                            <!-- form user info -->
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Actualizar Plan</h4>
                                </div>
                                <div class="card-body">
                                <form class="form" role="form" autocomplete="off" action="/plan/{{$plan->id}}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                                            <div class="col-lg-9">
                                            <input class="form-control" type="text" value="{{$plan->nombre}}" name="nombre">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Descripcion</label>
                                            <div class="col-lg-9">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="descripcion">{{$plan->descripcion}}</textarea>
                                            </div>
                                        </div>  
                                        <div class="form-control row mb-4">
                                            <p>Servicios</p>
                                            @foreach ($servicios as $servicio)
                                                
                                                <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="servicios[{{$loop->index}}]" value="{{$servicio->id}}">
                                                <label class="form-check-label" for="inlineCheckbox1">{{$servicio->nombre}}</label>
                                                </div>
                                            @endforeach                   
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