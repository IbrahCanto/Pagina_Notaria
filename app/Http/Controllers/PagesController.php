<?php

namespace App\Http\Controllers;

use App\Models\table_test;
use Illuminate\Http\Request;
// use App\Models\Config;


class PagesController extends Controller
{
    public function inicio(){
    	return view('welcome');
    }

    // public function table_test_reg_mostrar(){


    //     return view('table_test_reg_mostrar');
    // }

    public function recibir(Request $request){

        $request->validate([
        'Nombre' => 'required',
        'Email' => 'required|email',
        'Telefono' => 'required',
        'Mensaje' => 'required',
        'Tipo_de_Informacion' => 'required',

        ]);

        $table_test_reg = new table_test();

        $table_test_reg->Nombre = $request->Nombre;
        $table_test_reg->Email = $request->Email;
        $table_test_reg->Telefono = $request->Telefono;
        $table_test_reg->Mensaje = $request->Mensaje;
        $table_test_reg->Tipo_de_Informacion = $request->Tipo_de_Informacion;

        $table_test_reg->save();

        return back()->with('success', '');

        // return redirect()->route('table_test_reg_validacion');
    }

    // public function table_test_reg_validacion(){


    //     return view('table_test_reg_validacion');
    // }
}