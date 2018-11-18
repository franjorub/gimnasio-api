@extends('layouts.layout')
@section('title', 'Contratos')
@section('content')
    <h1>Lista de contratos</h1>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Monto Inscripcion</th>                    
                    <th scope="col">Cliente</th>                 
                                        
                    <th colspan="2">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                   @forelse ($contratos as $contrato)
                        <tr>
                            <th scope="row">{{$contrato->id}}</th>
                            <td>{{$contrato->fecha}}</td>
                            <td>{{$contrato->monto_inscripcion}}</td>                            
                            <td>{{$contrato->nombre}} {{$contrato->apellido}}</td>                            
                                                 
                            <td><a href="/contrato/{{$contrato->id}}/edit"><i class="fas fa-user-edit"></i></a></td>
                            <td><a href="/contrato/{{$contrato->id}}"><i class="fas fa-eye"></i></a></td>
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