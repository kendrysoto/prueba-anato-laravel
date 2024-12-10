<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenciaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas se cargan mediante el RouteServiceProvider y todas ellas se asignan
| al grupo de middleware "web". ¡Haz algo increíble!
|
*/

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Ruta de recursos para el controlador Agencia (maneja CRUD)
Route::resource('/agencia', AgenciaController::class)
    ->names('agencias')
    ->middleware('validate_role');

// Ruta para editar agencia (formulario)
Route::get('/agencia/{agencia}/edit', [AgenciaController::class, 'edit'])
    ->name('agencias.edit')
    ->middleware('validate_role');

// Ruta para actualizar agencia
Route::put('/agencia/{agencia}', [AgenciaController::class, 'update'])
    ->name('agencias.update')
    ->middleware('validate_role');

// Ruta para redirigir de "agencia" a "prospecto"
Route::redirect('/agencia', '/prospecto');

// Ruta para prospecto (si tienes un controlador para prospecto)
Route::get('/prospecto', [AgenciaController::class, 'prospecto'])
    ->name('prospecto')
    ->middleware('validate_role');
