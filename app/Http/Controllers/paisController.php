<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pais; #Importando el modelo de Pais

class paisController extends Controller
{
    #Request trae los datos del formulario
    function insertar(Request $req){
        $pais = new Pais(); #Instanciando el modelo Pais
        #$Nombre de la variable con la intancia -> nombre de la columna = $variable con los datos -> nombre del campo del formulario 
        $pais -> nombre = $req-> nombre; #Guardando el nombre que vienen del formulario
        $pais -> abreviatura = $req-> abreviatura;
        $pais -> save(); #Es como el commit
        return redirect() -> route('pais.mostrar');
    }


    function mostrar(){
        $paises=Pais::all(); #Trae todos los registros del modelo de pais
        #view('nombre vista'), compact('nombre de la variable a enviar a la vista')
        return view('lista_paises', compact('paises'));
    }


    function mostrarFk(){
        $paises=Pais::all(); #Trae todos los registros del modelo de pais
        #view('nombre vista'), compact('nombre de la variable a enviar a la vista')
        return view('formulario_persona', compact('paises'));
    }


    function eliminar(Pais $id){
        $id -> delete();
        return redirect()-> route('pais.mostrar');
    }


    function editar(Pais $id){
        return view("editar_pais", compact('id'));
    }


    function actualizar(Pais $id, Request $req){
        #$Nombre de la variable con la intancia -> nombre de la columna = $variable con los datos -> nombre del campo del formulario 
        $id -> nombre = $req-> nombre; #Guardando el nombre que vienen del formulario
        $id -> abreviatura = $req-> abreviatura;
        $id -> save(); #Es como el commit
        return redirect() -> route('pais.mostrar');
    }
}
