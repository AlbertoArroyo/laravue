<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroFormRequest;
use App\User;

class RegistroUsuariosController extends Controller
{
    
    public function registro(RegistroFormRequest $request){
        
        // return response()->json(data: 'Successo Exito', status: 200);

        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->apellidoP = $request->apellidoP;
        $usuario->apellidoM = $request->apellidoM;
        $usuario->genero = $request->genero;
        $usuario->edad = $request->edad;
        $usuario->estadoC = $request->estadoC;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->contra);
        $usuario->nivel = $request->nivel;
        //$usuario->roles_id = 2;
        $usuario->save();


        return response()->json([$request->all(), 'status' => 200]);


    }

}
