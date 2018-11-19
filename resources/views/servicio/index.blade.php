@extends('layouts.layout')
@section('title', 'Servicios')
@section('content')
<h1>Servicios</h1>
    <div class="row pb-4">
        <div class="col">
            <a href="/servicio/create"><i class="fa fa-plus-circle"></i> Crear servicio</a>      
        </div>
        
    </div>
    <div class="row">
        @foreach ($servicios as $servicio)
            <div class="col-12 col-sm-4 pb-4">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $servicio->nombre}}</h5>
                        <p class="card-text">{{ $servicio->descripcion}}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="/servicio/{{$servicio->id}}" class="btn btn-dark m-1">Ver</a>
                        <a href="/servicio/{{$servicio->id}}/edit" class="btn btn-primary m-1">Editar</a>
                        <form action="/servicio/{{$servicio->id}}" method="POST" id="deleteForm">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" value="Eliminar" type="submit"/>
                        </form>
                    </div>
                </div>                    
            </div>
        @endforeach
    </div>
   
@endsection