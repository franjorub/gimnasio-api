@extends('layouts.layout')
@section('title', 'facturas')
@section('content')
    <h1>Lista de facturas</h1>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                                    
                    <th colspan="2">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                   @forelse ($facturas as $factura)
                        <tr>
                            <th scope="row">{{$factura->id}}</th>
                            <td>{{$factura->fecha}}</td>                                                     
                            <td><a href="/factura/{{$factura->id}}/edit"><i class="fas fa-user-edit"></i></a></td>
                            <td><a href="/factura/{{$factura->id}}"><i class="fas fa-eye"></i></a></td>
                        </tr>
                   @empty
                       <tr>
                           <td colspan="6">
                            No hay facturas disponibles
                           </td>
                       </tr>
                   @endforelse
                  
                  
                </tbody>
              </table>              
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="/factura/create"><i class="fas fa-plus-square"></i> Crear factura</a>
        </div>
        
    </div>
@endsection