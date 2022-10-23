<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona; #Importando el modelo de Persona

class personaController extends Controller
{
    function insertar(Request $req){
        $persona = new Persona();
        $persona -> nombre = $req -> nombre;
        $persona -> apellidos = $req -> apellidos;
        $persona -> edad = $req -> edad;
        $persona -> estatus = 1;
        $persona -> telefono = $req -> telefono;
        $persona -> fkpais = $req -> fkpais;
        $persona -> save();
        return redirect()-> route('pais.mostrarFk');
    }
    function mostrar(){
                                //join('tabla a relacionar', 'tabla del campo.el campo a relacionar', '=', 'comparacion') 
        $personas = Persona::select('persona.id','persona.nombre as nombre_pe','pais.nombre as nombre_pa', 'persona.apellidos', 'persona.edad', 'persona.telefono') 
        -> join('pais', 'persona.fkpais', '=', 'pais.id') 
        -> where('fkpais', 2)
        -> orderby('telefono', 'asc')
        -> get();
        return view('lista_personas', compact('personas'));
    }
}
