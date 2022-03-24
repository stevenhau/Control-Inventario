<h1>Productos</h1>
<a href="{{ url('productos/create') }}">Agregar producto</a>
    @if(Session::has('mensaje'))
        {{ Session::get('mensaje') }}
    @endif
<table border=1>
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
                <img src="{{ asset('storage').'/'.$producto->imagen}}" alt="img_{{ $producto->nombre }}" width="100px">
            </td>
            <td>{{ $producto->folio }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->alamcen }}</td>
            <td>{{ $producto->fecha_entrada }}</td>
            <td>{{ $producto->fecha_salida }}</td>
            <td>
                <a href="{{ url('/productos/'.$producto->id.'/edit') }}">Editar</a>    
            | 

                <form action="{{ url('/productos/'.$producto->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Quieres eliminar el producto?')" value="Eliminar">
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>