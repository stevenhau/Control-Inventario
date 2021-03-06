@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{ $modo }} Productos</h1>

<div class="form-goup row">
<div class="col-sm-10">
    <label for="nombre" class="col-form-label">Nombre:</label>
    <input type="text" class="form-control" name="nombre" value="{{ isset($productos->nombre)?$productos->nombre:'' }}" id="nombre">
</div>
</div>

<div class="form-group row">
<div class="col-sm-10">
    <label for="folio" class="col-form-label">Folio</label>
    <input type="text" class="form-control" name="folio" value="{{ isset($productos->folio)?$productos->folio:'' }}" id="folio">
</div>
</div>
<div class="form-group row">
    <div class="col-sm-10">
        <label for="alamacen" class="col-form-label">Almacen:</label>
        <input type="text" class="form-control" name="alamcen" value="{{ isset($productos->alamcen)?$productos->alamcen:'' }}" id="alamcen">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10">
        <label for="precio" class="col-form-label">Precio:</label>
        <input type="text" class="form-control" name="precio" value="{{ isset($productos->precio)?$productos->precio:'' }}" id="precio">
    </div>
</div>

<div class="form-group row">
<div class="col-sm-10">
    <label for="imagen" class="col-form-label">Imagen</label>  
    @if(isset($productos->imagen))
    <img src="{{ asset('storage').'/'.$productos->imagen}}" alt="img_{{ $productos->nombre }}" width="100px">
    @endif
    <input type="file" class="form-control" name="imagen" value="" id="imagen">
    </div>
</div>
<div class="form-group row">
<div class="col-sm-10">
<label for="fecha_entrada" class="col-form-label">Fecha entrada</label>
    <input type="text" class="form-control" name="fecha_entrada" value="{{ isset($productos->fecha_entrada)?$productos->fecha_entrada:'' }}" id="fecha_entrada">
</div>
</div>
<div class="form-group row">
<div class="col-sm-10">
<label for="fecha_salida" class="col-form-label">Fecha salida</label>
    <input type="text" class="form-control" name="fecha_salida" value="{{ isset($productos->fecha_salida)?$productos->fecha_salida:'' }}" id="fecha_salida">
    </div></div>
    <div class="form-group row mt-4">
        <div class="col-sm-10">
            <input class="btn btn-success" type="submit" value="{{ $modo }}">
            <a href="{{ url('productos') }}" class="btn btn-danger">Volver</a>
        </div>
    </div>
</div>
@endsection