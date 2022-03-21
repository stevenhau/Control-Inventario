    <br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ $productos->nombre }}" id="nombre"><br>
    <label for="folio">Folio</label>
    <input type="text" name="folio" value="{{ $productos->folio }}" id="folio"><br>
    <label for="alamacen">Almacen:</label>
    <input type="text" name="alamcen" value="{{ $productos->alamcen }}" id="alamcen"><br>
    <label for="imagen">Imagen</label>
    {{ $productos->imagen }}
    <input type="file" name="imagen" value="" id="imagen"><br>
    <label for="fecha_entrada" >Fecha entrada</label>
    <input type="text" name="fecha_entrada" value="{{ $productos->fecha_entrada }}" id="fecha_entrada"><br>
    <label for="fecha_salida">Fecha salida</label>
    <input type="text" name="fecha_salida" value="{{ $productos->fecha_salida }}" id="fecha_salida"><br>
    <input type="submit" value="Guardar">