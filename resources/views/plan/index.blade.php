@extends('layouts.layout')
@section('title', 'Clientes')
@section('content')
    <h1>Planes</h1>
    <div class="row">
        

        @foreach ($planes as $plan)
            <div class="col-12 col-sm-6 pb-4">
                <div class="card">
                    <img class="card-img-top" src="/images/memb1.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{ $plan->nombre}}</h5>
                    <p class="card-text">{{ $plan->descripcion}}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>                    
            </div>
        @endforeach
            
        
        
    </div>
    <div class="row">
        <div class="col">
            <a href="/plan/create"><i class="fa fa-plus-circle"></i> Crear plan</a>      
        </div>
        
    </div>
@endsection