<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function update(Request $request)
    {

        // usuario identificado
        $user = \Auth::user();
        $id = $user->id;


        // validar formulario
        $validate = $this->validate($request, [
            'name' => ['required', 'string', 'max:100'],
            'surname' => ['required', 'string', 'max:200'],
            'phone' => ['required', 'int', 'min:9'],
            'age' => ['required', 'int', 'size:2'],
            'city' => ['required', 'string', 'max:50'],
            'country' => ['required', 'string', 'max:50'],
            'nick' => ['required', 'string', 'max:255', 'unique:users,nick,'.$id],
            'image_path' => ['required', 'image'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        // recoger datos del formulario
        $name = $request->input('name');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $age = $request->input('age');
        $city = $request->input('city');
        $country = $request->input('country');
        $nick = $request->input('nick');
        $image_path = $request->input('image_path');
        $email = $request->input('email');
        $password = $request->input('password');
//        $confirmPassword = $request->input('password_confirmation');


        // asignar nuevos valores al objeto del usuario
        $user->name = $name;
        $user->surname = $surname;
        $user->phone = $phone;
        $user->age = $age;
        $user->city = $city;
        $user->country = $country;
        $user->nick = $nick;
        $user->email = $email;
        $user->password = Hash::make($password);
//        $user->confirmPassword = $confirmPassword;

        //subir la imagen
        $image_path = $request->file('image_path');
        if ($image_path){

            //Poner nombre único
            $image_path_name = time().$image_path->getClientOriginalName();

            //Guardar en la carpeta storage users
            Storage::disk('users')->put($image_path_name, File::get($image_path));

            //seteo el nombre de la imagen en el objeto
            $user->image_path = $image_path_name;
        }


        // ejecutar consulta y cambios en la BD
        $user->update();

        return redirect()->route('perfil')->with(['message'=>'Usuario actualizado correctamente']);

    }
}
