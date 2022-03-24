    <h1>{{ $modo }} Productos</h1>
    <br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="{{ isset($productos->nombre)?$productos->nombre:'' }}" id="nombre"><br>
    <label for="folio">Folio</label>
    <input type="text" name="folio" value="{{ isset($productos->folio)?$productos->folio:'' }}" id="folio"><br>
    <label for="alamacen">Almacen:</label>
    <input type="text" name="alamcen" value="{{ isset($productos->alamcen)?$productos->alamcen:'' }}" id="alamcen"><br>
    <label for="imagen">Imagen</label>  
    @if(isset($productos->imagen))
    <img src="{{ asset('storage').'/'.$productos->imagen}}" alt="img_{{ $productos->nombre }}" width="100px">
    @endif
    <input type="file" name="imagen" value="" id="imagen"><br>
    <label for="fecha_entrada" >Fecha entrada</label>
    <input type="text" name="fecha_entrada" value="{{ isset($productos->fecha_entrada)?$productos->fecha_entrada:'' }}" id="fecha_entrada"><br>
    <label for="fecha_salida">Fecha salida</label>
    <input type="text" name="fecha_salida" value="{{ isset($productos->fecha_salida)?$productos->fecha_salida:'' }}" id="fecha_salida"><br>
    <input type="submit" value="{{ $modo }}">
    <a href="{{ url('productos') }}">Volver</a>