@extends('layouts.layout')
@section('title', 'Informacion de plan')
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
<div class="row mt-4 mb-4 pt-4 ">
    <div class="col">
        <h3>Servicios que incluye el plan</h3>
    </div>
</div>
<div class="row">
    @forelse ($servicios as $servicio)
        <div class="col-12 col-sm-4">
            <div class="card">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">{{$servicio->nombre}}</h5>
                    <p class="card-text">{{$servicio->descripcion}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    @empty
    <div class="col">
        <p>No hay servicios disponibles en este momento :(.</p>

    </div>
    @endforelse

</div>
            
    
@endsection