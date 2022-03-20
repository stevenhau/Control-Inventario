<h2>formulario para crear productos</h2>
<form action="{{ url('/productos') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="folio">Folio</label>
    <input type="text" name="folio" id="folio"><br>
    <label for="almacen">Almacen:</label>
    <input type="text" name="alamcen" id="alamcen"><br>
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen" id="imagen"><br>
    <label for="fecha_entrada">Fecha entrada</label>
    <input type="text" name="fecha_entrada" id="fecha_entrada"><br>
    <label for="fecha_salida">Fecha salida</label>
    <input type="text" name="fecha_salida" id="fecha_salida"><br>
    <input type="submit" value="Guardar">
</form>