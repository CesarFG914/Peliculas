<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class CatalogoController extends Controller
{
    // Página de inicio (opcional)
    public function index() {
        return view('inicio', ['titulo' => 'Inicio']);
    }

    // Vista de listado de películas
    public function listado() {
        $peliculas = Pelicula::all();
        return view('listado', [
            'titulo' => 'Listado de Películas',
            'peliculas' => $peliculas
        ]);
    }

    // Vista del formulario para agregar
    public function agregar() {
        return view('agregar', ['titulo' => 'Agregar Película']);
    }

    // Guardar una nueva película
    public function guardar(Request $request) {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'director' => 'required',
            'fecha_de_estreno' => 'required|date',
        ]);

        Pelicula::create($request->all());

        return redirect()->route('listado')->with('success', 'Película guardada exitosamente.');
    }

    // Vista del formulario de edición
    public function editar($id) {
        $pelicula = Pelicula::findOrFail($id);
        return view('editar', ['titulo' => 'Editar Película', 'pelicula' => $pelicula]);
    }

    // Actualizar los datos de la película
    public function actualizar(Request $request, $id) {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'director' => 'required',
            'fecha_de_estreno' => 'required|date',
        ]);

        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->all());

        return redirect()->route('listado')->with('success', 'Película actualizada correctamente.');
    }
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
    
        return redirect()->route('listado')->with('success', 'Película eliminada correctamente');
    }
    
}
