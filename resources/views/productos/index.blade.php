@extends('layouts.app')

@section('content')
<div class="container">
<h1>Productos</h1>



    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> {{ Session::get('mensaje') }}</h5>
        </div>               

   
    @endif
            <div class="float-right">
            <!-- <a href="{{ url('productos/create') }}" class="btn btn-primary mb-4">Agregar producto</a> -->
            <a href="{{ url('productos/create') }}" class="btn btn-danger mb-4">PDF</a>
            <a href="{{ url('productos/create') }}" class="btn btn-success mb-4">Ecxel</a>
            </div>



    
    <div class="table-responsive">
<table class="table">
    <thead>
        <th>#</th>
        <th>Imagen</th>
        <th>Folio</th>
        <th>Nombre</th>
        <th>Alamcen</th>
        <th>Precio</th>
        <th>Fecha Entrada</th>
        <th>Fecha Salida</th>
        <th>Acciones</th>
    </thead>
    <tbody>
       <!--  <tr>
            <td>1</td>
            <td>foto</td>
            <td>555</td>
            <td>PermaDate</td>
            <td>Cancún</td>
            <td>$ 50,000.00</td>
            <td>04-04-2022</td>
            <td>06-04-2022</td>
            <td>
            <a href="#" class="btn btn-warning">Editar</a> 
            <a href="#" class="btn btn-danger">Eliminar</a> 
            </td>
        </tr> -->
        @foreach( $productos as $producto )
        <tr>
            <td>{{ $producto->id }}</td>
            <td>
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->imagen}}" alt="img_{{ $producto->nombre }}" width="100px">
            </td>
            <td>{{ $producto->folio }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->alamcen }}</td>
            <td>$ {{ $producto->precio }}</td>
            <td>{{ $producto->fecha_entrada }}</td>
            <td>{{ $producto->fecha_salida }}</td>
            <td>
              
                
                <a class="btn btn-app bg-warning" href="{{ url('/productos/'.$producto->id.'/edit') }}">
                    <i class="fas fa-edit"></i> Modificar
                </a>
            | 
         
                    <form action="{{ url('/productos/'.$producto->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <!-- <input type="submit" onclick="return confirm('¿Quieres eliminar el producto?')" class="btn btn-danger" value="Eliminar"> -->
                    <button type="submit" class="btn btn-app bg-danger" onclick="return confirm('¿Quieres eliminar el producto?')">
                    <i class="fas fa-trash"></i>
                    Borrar
                    </button>
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