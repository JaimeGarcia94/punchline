<?php

namespace App\Http\Controllers;

use App\Music;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
//use App\Music;

class MusicController extends Controller
{
    public function index()
    {

        $getBeats = Music::all('music_path');

        foreach ($getBeats as $getBeat){
            $array_beat[] = $this->getMusic($getBeat->music_path);
        }
//        dd($array_beat);

        return view('music.content',[
            'beats' => $array_beat
        ]);

    }

    public function insertBeat(Request $request)
    {

        $fileBeat = new \App\Music;


        // validar formulario
        $validate = $this->validate($request, [
            'music_path' => ['required'],
        ]);


        // recoger datos del formulario
        $music_path = $request->file('music_path');
//        dd($music_path);


//        //subir el beat
        if ($music_path){

            //Poner nombre único
            $music_path_name = time().$music_path->getClientOriginalName();

            //Guardar en la carpeta storage users
            Storage::disk('beats')->put($music_path_name, File::get($music_path));

            //seteo el nombre de la imagen en el objeto
            $fileBeat->music_path = $music_path_name;
        }


        // ejecutar consulta y cambios en la BD
        $fileBeat->save();

        return redirect()->route('beats')->with(['message'=>'beat añadido correctamente']);

    }

    public function getMusic($filename)
    {
        $file = Storage::disk('beats')->get($filename);

        return new Response($file,200);
    }

}
