@extends('layouts.base');

@section('contenido')
    
    <h1>Create</h1>

    <form action="/articulos" method="post">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-lavel">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="lanzamiento" class="form-lavel">Lanzamiento:</label>
            <input type="date" class="form-control" id="lanzamiento" name="lanzamiento" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-lavel">Descripcion:</label>
            <textarea class="form-control" id="descripcion" rows="3" name="descripcion" tabindex="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-lavel">Cantidad:</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-lavel">Precio:</label>
            <input type="text" class="form-control" id="precio" name="precio" tabindex="4">
        </div>
        <div class="mb-3"><!----------- VER COMO SUBIR LA FOTO A LA BASE DE DATOS-------->
            <label for="foto" class="form-lavel">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" tabindex="5">
        </div>

        <a href="/articulos" class="btn btn-secondary" tabindex="6">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>

    </form>

@endsection