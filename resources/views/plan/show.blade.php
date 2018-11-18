@extends('layouts.layout')
@section('title', 'Informacion de cliente')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
            <h5 class="card-header">Cliente numero: {{$cliente->id}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$cliente->nombre}} {{$cliente->apellido}}</h5>
                <p class="card-text">Creado el: {{$cliente->created_at->format('d M Y - H:i:s')}}</p>
                <form action="/cliente/{{$cliente->id}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-primary" type="submit" value="Eliminar"/>
                </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection