@extends('plantilla')

@section('contenido')
<div class="container mt-5">
    <h2>Agregar Película</h2>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
    <form method="POST" action="{{ route('guardar') }}">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="string" name="titulo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="string" name="descripcion" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="string" name="genero" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="string" name="director" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="fecha_de_estreno" class="form-label">Fecha de Estreno</label>
            <input type="date" name="fecha_de_estreno" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection

