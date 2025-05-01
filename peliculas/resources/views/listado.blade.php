@extends('plantilla')

@section('contenido')
<div class="container mt-5">
    <h2>Listado de Películas</h2>
    <a href="{{ route('agregar') }}" class="btn btn-success mb-3">Agregar nueva</a>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Género</th>
                <th>Director</th>
                <th>Fecha de Estreno</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $pelicula)
                <tr>
                    <td>{{ $pelicula->titulo }}</td>
                    <td>{{ $pelicula->descripcion }}</td>
                    <td>{{ $pelicula->genero }}</td>
                    <td>{{ $pelicula->director }}</td>
                    <td>{{ $pelicula->fecha_de_estreno }}</td>
                    <td>
                        <div style="display: flex; gap: 5px;">
                            <a href="{{ route('editar', $pelicula->id) }}" class="btn btn-warning">Editar</a>

                            <form action="{{ route('destroy', $pelicula->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta película?')">Eliminar</button>
                            </form>
                        </div>
                    </td>   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
