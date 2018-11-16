@extends('layouts.layout')
@section('title', 'Informacion de contrato')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
            <h5 class="card-header">contrato numero: {{$contrato->id}}</h5>
                <div class="card-body">
                    <h5 class="card-title">Informacion</h5>
                <p class="card-text">Creado el: {{$contrato->created_at->format('d M Y - H:i:s')}}</p>
                <form action="/contratos/{{$contrato->id}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-primary" type="submit" value="Eliminar"/>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection