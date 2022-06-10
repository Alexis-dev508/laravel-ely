<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paisController; #Importamos el controlador de pais

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


#(Nombre de la ruta, [nombre del controlador, nombre de la funcion]) -> alias de la funcion
Route::post('pais/guardar', [paisController::class,'insertar'])->name('pais.insertar');

