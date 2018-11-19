@extends('layouts.layout')
@section('title', 'Contratos')
@section('content')
    <h1>Lista de contratos</h1>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Monto Inscripcion</th>                    
                    <th scope="col">Cliente</th>                 
                    <th scope="col">Plan</th>                 
                                        
                    <th colspan="2">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                   @forelse ($contratos as $contrato)
                        <tr>
                            <th scope="row">{{$contrato->id}}</th>
                            <td>{{$contrato->fecha}}</td>
                            <td>{{$contrato->monto_inscripcion}}</td>                            
                            <td><a href="/cliente/{{$contrato->cliente_id}}">{{$contrato->nombre}} {{$contrato->apellido}}</a> </td>                            
                            <td><a href="/plan/{{$contrato->plan_id}}"> {{$contrato->plan}}</a></td>                    
                            <td><a href="/contrato/{{$contrato->id}}/edit"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="/contrato/{{$contrato->id}}"><i class="fa fa-eye"></i></a></td>
                        </tr>
                   @empty
                       <tr>
                           <td colspan="6">
                            No hay contratos disponibles
                           </td>
                       </tr>
                   @endforelse
                  
                  
                </tbody>
              </table>              
        </div>
    </div>
    
@endsection