<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //metodo que hace un insert a la tabla usuarios
    //tiene como parametros nombre,correo,la contrasena y si mostramos el anucio
    public function create(Request $request)
    {
        //filtramos el JSON ($request) por cada campo asigandonlo al modelo
        $user = new Usuarios();
        $user->nombre = $request->nombre;
        $user->correo = $request->correo;
        $user->password = $request->password;
        $user->anuncios = $request->anuncios;


        if ( ! $user->save())
        {
         //200 es metodo http es exitoso
          return response()->json(['Status'=>'NO'],200);
        }
        return response()->json(['Status'=>'Guardado'],200);
    }

    public function Login(Request $request)
    {
        $correo = $request->correo;
        $password = $request->password;
        $user =Usuarios::where('correo',$correo)->where('password',$password)->get();



         if($user->count()==0)
        {
          return $user;
        }
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


}
