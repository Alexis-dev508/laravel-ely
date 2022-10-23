<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paisController;
use App\Http\Controllers\personaController; #Importamos el controlador de pais

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pagina1', function(){
    return view('pagina1', ['nombre'=> 'Fulanito', 'apellido' => 'Peinado']); #Enviando parametros a la vista
});


Route::get('/registroPais', function(){
    return view('formulario_pais');
});


Route::get('/registroPersonas', [paisController::class, 'mostrarFk']) -> name('pais.mostrarFk');

Route::get('/paises', [paisController::class, 'mostrar']) -> name('pais.mostrar');
 

#(Nombre de la ruta, [nombre del controlador, nombre de la funcion]) -> alias de la funcion
Route::post('pais/guardar', [paisController::class,'insertar'])->name('pais.insertar');

#(Nombre de la ruta, [nombre del controlador, nombre de la funcion]) -> alias de la funcion
Route::post('persona/guardar', [personaController::class,'insertar'])->name('persona.insertar');

Route::delete('pais/eliminar/{id}', [paisController::class, 'eliminar']) -> name('pais.eliminar');

Route::get('pais/editar/{id}', [paisController::class, 'editar']) -> name('pais.editar');

Route::put("pais/actualizar/{id}", [paisController::class, 'actualizar']) -> name('pais.actualizar');

Route::get('/personas', [personaController::class, 'mostrar']) -> name('personas.mostrar');
