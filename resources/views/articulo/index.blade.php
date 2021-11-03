@extends('layouts.base');

@section('css-datatables')
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

@endsection

@section('contenido')
    
    <h1>Discos</h1>

    <a href="articulos/create" class="btn btn-primary mb-3">Nuevo</a>
    
    <table id="articulos" class="table table-dark table-striped mt-4">

        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Codigo</th>
                <th scope="col">Lanzamiento</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($articulos as $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->foto}}</td>
                <td>{{$articulo->nombre}}</td>
                <td>{{$articulo->codigo}}</td>
                <td>{{$articulo->lanzamiento}}</td>
                <td class="text-break">{{$articulo->descripcion}}</td>
                <td>{{$articulo->cantidad}}</td>
                <td>{{$articulo->precio}}</td>
                <td>
                    <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                </td>
                <td>
                    <form action="{{route('articulos.destroy', $articulo->id)}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

@endsection

@section('js-datatables')
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#articulos').DataTable({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
            });
        });
    </script>

@endsection