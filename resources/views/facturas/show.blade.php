@extends('layouts.layout')
@section('title', 'Informacion de factura')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
            <h5 class="card-header">factura numero: {{$factura->id}}</h5>
                <div class="card-body">
                    <h5 class="card-title">Informacion</h5>
                <p class="card-text">Creado el: {{$factura->created_at->format('d M Y - H:i:s')}}</p>
                <form action="/facturas/{{$factura->id}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-primary" type="submit" value="Eliminar"/>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection