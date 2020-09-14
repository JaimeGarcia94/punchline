<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MusicController extends Controller
{
    public function index()
    {
        return view('music.content');
    }

    public function insertBeat(Request $request)
    {
        $fileBeat = new \App\Music;

        $validate = $this->validate($request, [
            'music_path' => ['required'],
        ]);

        $music_path = $request->file('music_path');

        if ($music_path){

            $music_path_name = $music_path->getClientOriginalName();
            Storage::disk('beats')->put($music_path_name, File::get($music_path));
            $fileBeat->music_path = $music_path_name;

        }
        
        $fileBeat->save();

        return redirect()->route('beats')->with(['message'=>'beat añadido correctamente']);

    }
}
