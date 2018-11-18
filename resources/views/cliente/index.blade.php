@extends('layouts.layout')
@section('title', 'Clientes')
@section('content')
    <h1>Lista de clientes</h1>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Cedula</th>
                    <th colspan="3">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                   @forelse ($clientes as $cliente)
                        <tr>
                            <th scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->apellido}}</td>
                            <td>{{$cliente->cedula}}</td>
                            <td><a href="/cliente/{{$cliente->id}}/edit"><i class="fas fa-user-edit">Editar</i></a></td>
                            <td><a href="/cliente/{{$cliente->id}}"><i class="fas fa-eye">Ver</i></a></td>
                            <td><a href="/cliente/crear-contrato/{{$cliente->id}}"><i class="fas fa-file-signature"></i> Crear contrato</a></td>
                        </tr>
                   @empty
                       <tr>
                           <td colspan="6">
                             No hay clientes disponibles
                           </td>
                       </tr>
                   @endforelse
                  
                  
                </tbody>
              </table>              
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/cliente/create"><i class="fas fa-plus-square"></i> Crear cliente</a>
            
        
        </div>
        
    </div>
@endsection