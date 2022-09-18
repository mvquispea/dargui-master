<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Consulte;

class ConsulteController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contacto_consulta' => 'required|string',
            'contacto_nombre' => 'required|string',
            'contacto_email' => 'required|string',
            'contacto_celular' => 'required',
        ]);

        if( $validator->fails() ) return redirect()->back()->with('error_consulted', 'Por favor, vuelva a intentarlo.');
        
        $consulta = $request->contacto_consulta;
        $nombre = $request->contacto_nombre;
        $email = $request->contacto_email;
        $celular = $request->contacto_celular;

        $consulte = new Consulte();
        $consulte->name = $nombre;
        $consulte->email = $email;
        $consulte->phone = $celular;
        $consulte->message = $consulta;
        $consulte->save();

       return redirect()->back()->with('success_consulted', 'Su consulta fue recibida por Alerta USIL. Gracias por comunicarse con nosotros.');   
    }
}
