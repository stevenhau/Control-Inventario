@extends('layouts.app')

@section('content')
<div class="container">
<h1>Productos</h1>


    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('mensaje') }}
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
   
    @endif
            

<a href="{{ url('productos/create') }}" class="btn btn-primary mb-4">Agregar producto</a>

    
    <div class="table-responsive">
<table class="table">
    <thead>
        <th>#</th>
        <th>Imagen</th>
        <th>Folio</th>
        <th>Nombre</th>
        <th>Alamcen</th>
        <th>Fecha Entrada</th>
        <th>Fecha Salida</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach( $productos as $producto )
        <tr>
            <td>{{ $producto->id }}</td>
            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->imagen}}" alt="img_{{ $producto->nombre }}" width="100px">
            </td>
            <td>{{ $producto->folio }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->alamcen }}</td>
            <td>{{ $producto->fecha_entrada }}</td>
            <td>{{ $producto->fecha_salida }}</td>
            <td>
                <a href="{{ url('/productos/'.$producto->id.'/edit') }}" class="btn btn-warning">Editar</a>    
            | 

                <form action="{{ url('/productos/'.$producto->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres eliminar el producto?')" class="btn btn-danger" value="Eliminar">
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $productos->links() !!}
</div>
</div>
@endsection