@extends('layouts.layout')
@section('title', 'Planes')
@section('content')
<h1>Planes</h1>
    <div class="row pb-4">
        <div class="col">
            <a href="/plan/create"><i class="fa fa-plus-circle"></i> Crear plan</a>      
        </div>
        
    </div>
    <div class="row">
        @foreach ($planes as $plan)
            <div class="col-12 col-sm-4 pb-4">
                <div class="card">
                    <img class="card-img-top" src="/images/memb1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $plan->nombre}}</h5>
                        <p class="card-text">{{ $plan->descripcion}}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="/plan/{{$plan->id}}" class="btn btn-dark m-1">Ver</a>
                        <a href="/plan/{{$plan->id}}/edit" class="btn btn-primary m-1">Editar</a>
                        <form action="/plan/{{$plan->id}}" method="POST" id="deleteForm">
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