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
                    <th colspan="2">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                   @forelse ($contratos as $contrato)
                        <tr>
                            <th scope="row">{{$contrato->id}}</th>
                            <td>{{$contrato->fecha}}</td>
                            <td>{{$contrato->monto_inscripcion}}</td>                            
                            <td><a href="/contratos/{{$contrato->id}}/edit"><i class="fas fa-user-edit"></i></a></td>
                            <td><a href="/contratos/{{$contrato->id}}"><i class="fas fa-eye"></i></a></td>
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
    <div class="row">
        <div class="col">
            <a href="/contratos/create"><i class="fas fa-plus-square"></i> Crear contrato</a>
        </div>
        
    </div>
@endsection