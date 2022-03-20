<h1>Productos</h1>
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
            <td>{{ $producto->imagen }}</td>
            <td>{{ $producto->folio }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->alamacen }}</td>
            <td>{{ $producto->fecha_entrada }}</td>
            <td>{{ $producto->fecha_salida }}</td>
            <td>Editar | 

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