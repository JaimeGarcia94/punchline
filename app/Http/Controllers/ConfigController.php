<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ConfigController extends Controller
{
    public function configuration()
    {
        return view('user.configuration');
    }

    public function update(Request $request)
    {

        // usuario identificado
        $user = \Auth::user();
        $id = $user->id;


        // validar formulario
        $validate = $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        // recoger datos del formulario
        $email = $request->input('email');
        $password = $request->input('password');


        // asignar nuevos valores al objeto del usuario
        $user->email = $email;
        $user->password = Hash::make($password);



        // ejecutar consulta y cambios en la BD
        $user->update();

        return redirect()->route('configuration')->with(['message'=>'Usuario actualizado correctamente']);

    }
}
