<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use \App\Music;

class MusicController extends Controller
{
    public function index()
    {
        return view('music.content');

    }

    public function insertBeat(Request $request)
    {

        // usuario identificado
//        $user = \Auth::user();


        $fileModel = new \App\Music;


        // validar formulario
        $validate = $this->validate($request, [
            'music_path' => ['required'],
        ]);


        // recoger datos del formulario
        $music_path = $request->file('music_path');
//        dd($music_path);


//        //subir la imagen
        if ($music_path){

            //Poner nombre único
            $music_path_name = time().$music_path->getClientOriginalName();

            //Guardar en la carpeta storage users
            Storage::disk('beats')->put($music_path_name, File::get($music_path));

            //seteo el nombre de la imagen en el objeto
            $fileModel->music_path = $music_path_name;
        }


        // ejecutar consulta y cambios en la BD
        $fileModel->save();

        return redirect()->route('beats')->with(['message'=>'beat añadido correctamente']);

    }

    public function getMusic($filename)
    {
        $file = Storage::disk('beats')->get($filename);

        return new Response($file,200);
    }

}
