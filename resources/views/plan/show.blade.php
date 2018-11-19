@extends('layouts.layout')
@section('title', 'Informacion de cliente')
@section('content')
<div class="row">
       
    <div class="col">
        
        <img class="img-fluid" src="/images/memb1.jpg" alt="Card image cap">
            
        
    </div>
    
    <div class="col">
    
        <h5>{{ $plan->nombre}}</h5>
        <p>{{ $plan->descripcion}}</p>
        <p><small class="text-muted">Last updated 3 mins ago</small></p>
        <form action="/plan/{{$plan->id}}" method="POST" id="deleteForm">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" value="Eliminar" type="submit"/>
        </form>
    
    </div>
</div>

            
    
@endsection