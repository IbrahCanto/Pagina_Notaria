<?php

namespace App\Http\Controllers;

use App\Models\table_test;
use Illuminate\Http\Request;
use App\Models\Config;


class PagesController extends Controller
{
    public function inicio(){
    	return view('welcome');
    }

    // public function comentarios_mostrar(){


    //     return view('comentarios_mostrar');
    // }

    public function recibir(Request $request){

        $request->validate([
        'Nombre' => 'required',
        'Email' => 'required|email',
        'Telefono' => 'required',
        'Mensaje' => 'required',
        'Tipo_de_Informacion' => 'required',

        ]);

        $comentarios = new table_test();

        $comentarios->Nombre = $request->Nombre;
        $comentarios->Email = $request->Email;
        $comentarios->Telefono = $request->Telefono;
        $comentarios->Mensaje = $request->Mensaje;
        $comentarios->Tipo_de_Informacion = $request->Tipo_de_Informacion;

        $comentarios->save();

        return back()->with('success', 'Enviado con exito!');

        // return redirect()->route('comentarios_validacion');
    }

    // public function comentarios_validacion(){


    //     return view('comentarios_validacion');
    // }
}