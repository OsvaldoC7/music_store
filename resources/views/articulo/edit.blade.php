@extends('layouts.base');

@section('contenido')
    
    <h1>Edit</h1>

    <form action="/articulos/{{$articulo->id}}" method="post">
        
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nombre" class="form-lavel">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" tabindex="1" value="{{$articulo->nombre}}">
        </div>
        <div class="mb-3">
            <label for="lanzamiento" class="form-lavel">Lanzamiento:</label>
            <input type="date" class="form-control" id="lanzamiento" name="lanzamiento" tabindex="2" value="{{$articulo->lanzamiento}}">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-lavel">Descripcion:</label>
            <textarea class="form-control" id="descripcion" rows="3" name="descripcion" tabindex="3">{{$articulo->descripcion}}</textarea>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-lavel">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" tabindex="4" value="{{$articulo->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-lavel">Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio" tabindex="5" value="{{$articulo->precio}}">
        </div>
        <div class="mb-3"><!----------- VER COMO SUBIR LA FOTO A LA BASE DE DATOS-------->
            <label for="foto" class="form-lavel">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" tabindex="6" value="{{$articulo->foto}}">
        </div>

        <a href="/articulos" class="btn btn-secondary" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>

    </form>

@endsection