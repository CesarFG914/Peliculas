<?php
use App\Http\Controllers\CatalogoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [CatalogoController::class, 'index'])->name('inicio');

Route::get('/listado', [CatalogoController::class, 'listado'])->name('listado');

Route::get('/agregar', [CatalogoController::class, 'agregar'])->name('agregar');
Route::post('/guardar', [CatalogoController::class, 'guardar'])->name('guardar');

Route::get('/editar/{id}', [CatalogoController::class, 'editar'])->name('editar');
Route::put('/actualizar/{id}', [CatalogoController::class, 'actualizar'])->name('actualizar');

Route::delete('/peliculas/{id}', [CatalogoController::class, 'destroy'])->name('destroy');






