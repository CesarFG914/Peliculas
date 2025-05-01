<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si el nombre coincide con el plural del modelo)
    protected $table = 'peliculas';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'titulo',
        'descripcion',
        'genero',
        'director',
        'fecha_de_estreno',
    ];
}
