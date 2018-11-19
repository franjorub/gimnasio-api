@extends('layouts.layout')
@section('title', 'Informacion de Servicio')
@section('content')
<div class="row">
       
    
    
    <div class="col">
    
        <h5>{{ $servicio->nombre}}</h5>
        <p>{{ $servicio->descripcion}}</p>
        <p><small class="text-muted">Last updated 3 mins ago</small></p>
        <form action="/servicio/{{$servicio->id}}" method="POST" id="deleteForm">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" value="Eliminar" type="submit"/>
        </form>
    
    </div>
</div>

@endsection